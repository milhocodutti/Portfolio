const API_URL = "https://script.google.com/macros/s/AKfycbw3nWFAy7y18aIeODoSO9Dr3NlHbY4kDNZKch0cahE3Ca4_LWb80lHqS1ciJa6MK_OKlw/exec";

async function loadTasks() {
  const res = await fetch(API_URL);
  const data = await res.json();

  const list = document.getElementById("taskList");
  const stats = document.getElementById("stats");
  list.innerHTML = "";

  let total = 0;
  let completed = 0;

  data.slice(1).forEach(row => {
    total++;

    const li = document.createElement("li");
    const span = document.createElement("span");
    span.textContent = row[1] + " (" + row[3] + ")";

    if (row[2] === "true") {
      li.classList.add("done");
      completed++;
    }

    li.appendChild(span);
    list.appendChild(li);
  });

  stats.textContent = `Total: ${total} | Completadas: ${completed}`;
}

async function addTask() {
  const task = document.getElementById("taskInput").value.trim();
  const date = document.getElementById("dateInput").value;

  if (!task || !date) return;

  const newTask = {
    id: Date.now(),
    tarea: task,
    estado: "false",
    fecha: date
  };

  await fetch(API_URL, {
    method: "POST",
    body: JSON.stringify(newTask)
  });

  document.getElementById("taskInput").value = "";
  loadTasks();
}

loadTasks();