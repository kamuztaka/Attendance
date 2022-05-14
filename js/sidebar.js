const bar = document.querySelector("#bar");
const sidebar = document.querySelector("#sidebar");
const close = document.querySelector("#close");

bar.addEventListener("click", () => {
  if (sidebar.classList.contains("close")) {
    sidebar.classList.remove("close");
    sidebar.classList.add("open");
  }
});

close.addEventListener("click", () => {
  if (sidebar.classList.contains("open")) {
    sidebar.classList.remove("open");
    sidebar.classList.add("close");
  }
});
