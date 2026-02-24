const API_URL = "https://script.google.com/macros/s/AKfycbxp3HJYMVJLffQdgmnqNM9_QppJCI4yWEYnXcgUH_saTkRMX_iveTjaYz8mhOROGRtScA/exec";

let tasks = [];

async function loadTasks() {
  const res = await fetch(API_URL);
  const data = await res.json();

  tasks = data.slice(1).map(row => ({
    id: String(row[0]),
    tarea: row[1],
    estado: String(row[2]) === "true",
    fecha: row[3]
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

    if (task.estado) li.classList.add("done");

    li.innerHTML = `
      <span>${task.tarea} (${formatDate(task.fecha)})</span>
      <div>
        <button onclick="toggleTask('${task.id}')">✔</button>
        <button onclick="editTask('${task.id}')">✏</button>
        <button onclick="deleteTask('${task.id}')">🗑</button>
      </div>
    `;

    list.appendChild(li);
  });
}

function formatDate(dateStr) {
  if (!dateStr) return "";
  const d = new Date(dateStr);
  return d.toLocaleDateString();
}

async function addTask() {
  const task = document.getElementById("taskInput").value.trim();
  const date = document.getElementById("dateInput").value;

  if (!task || !date) return;

  await fetch(API_URL, {
    method: "POST",
    body: JSON.stringify({
      action: "add",
      id: Date.now().toString(),
      tarea: task,
      estado: "false",
      fecha: date
    })
  });

  document.getElementById("taskInput").value = "";
  loadTasks();
}

async function toggleTask(id) {
  const task = tasks.find(t => t.id === id);

  await fetch(API_URL, {
    method: "POST",
    body: JSON.stringify({
      action: "update",
      id: task.id,
      tarea: task.tarea,
      estado: (!task.estado).toString(),
      fecha: task.fecha
    })
  });

  loadTasks();
}

async function editTask(id) {
  const task = tasks.find(t => t.id === id);
  const newText = prompt("Editar tarea:", task.tarea);
  if (!newText) return;

  await fetch(API_URL, {
    method: "POST",
    body: JSON.stringify({
      action: "update",
      id: task.id,
      tarea: newText,
      estado: task.estado.toString(),
      fecha: task.fecha
    })
  });

  loadTasks();
}

async function deleteTask(id) {
  if (!confirm("¿Eliminar tarea?")) return;

  await fetch(API_URL, {
    method: "POST",
    body: JSON.stringify({
      action: "delete",
      id: id
    })
  });

  loadTasks();
}

function filterByDate() {
  const date = document.getElementById("filterDate").value;
  render(date);
}

loadTasks();