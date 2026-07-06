const API_URL = "https://script.google.com/macros/s/AKfycbx_ynLXb9Pl3rH6JKhgSRFHCWpsxLAFbVGzHuKaShgJtjNWYmOvl7Z6qOYVR71QzhYl6w/exec";

let tasks = [];

async function loadTasks() {
  const res = await fetch(API_URL);
  const data = await res.json();

  tasks = data.slice(1).map(row => ({
    id: String(row[0]),
    tarea: row[1],
    estado: row[2],
    prioridad: row[3],
    categoria: row[4],
    fecha: row[5]
  }));

  render();
}

function render(filterDate = null) {
  const list = document.getElementById("taskList");
  list.innerHTML = "";

  let filtered = filterDate
    ? tasks.filter(t => t.fecha === filterDate)
    : tasks;

  filtered.forEach(task => {
    const li = document.createElement("li");

    if (task.estado === "completada") li.classList.add("done");

    li.classList.add(task.prioridad);

    li.innerHTML = `
      <span>
        ${task.tarea} 
        [${task.prioridad.toUpperCase()}] 
        (${task.categoria}) 
        - ${formatDate(task.fecha)}
      </span>
      <div>
        <button onclick="toggleTask('${task.id}')">✔</button>
        <button onclick="deleteTask('${task.id}')">🗑</button>
      </div>
    `;

    list.appendChild(li);
  });
}

function formatDate(dateStr) {
  if (!dateStr) return "";
  return new Date(dateStr).toLocaleDateString();
}

async function addTask() {
  const task = document.getElementById("taskInput").value.trim();
  const priority = document.getElementById("priorityInput").value;
  const category = document.getElementById("categoryInput").value;
  const date = document.getElementById("dateInput").value;

  if (!task || !date) return;

  await fetch(API_URL, {
    method: "POST",
    body: JSON.stringify({
      action: "add",
      id: Date.now().toString(),
      tarea: task,
      estado: "pendiente",
      prioridad: priority,
      categoria: category,
      fecha: date
    })
  });

  document.getElementById("taskInput").value = "";
  loadTasks();
}

async function toggleTask(id) {
  const task = tasks.find(t => t.id === id);

  const newState = task.estado === "pendiente"
    ? "completada"
    : "pendiente";

  await fetch(API_URL, {
    method: "POST",
    body: JSON.stringify({
      action: "update",
      ...task,
      estado: newState
    })
  });

  loadTasks();
}

async function deleteTask(id) {
  await fetch(API_URL, {
    method: "POST",
    body: JSON.stringify({
      action: "delete",
      id: id
    })
  });

  loadTasks();
}

loadTasks();