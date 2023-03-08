// js untuk mode gelap dan terang
const body = document.querySelector("body"),
  sidebar = body.querySelector("nav"),
  toggle = body.querySelector(".toggle"),
  searchBtn = body.querySelector(".search-box"),
  modeSwitch = body.querySelector(".toggle-switch"),
  modeText = body.querySelector(".mode-text");

toggle.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});

searchBtn.addEventListener("click", () => {
  sidebar.classList.remove("close");
});

modeSwitch.addEventListener("click", () => {
  body.classList.toggle("dark");

  if (body.classList.contains("dark")) {
    modeText.innerText = "Dark mode";
  } else {
    modeText.innerText = "Light mode";
  }
});

// js untuk button scroll up
let scrollTimeout;

window.addEventListener("scroll", () => {
  clearTimeout(scrollTimeout);

  document.querySelector(".icon-up").classList.remove("hide");

  scrollTimeout = setTimeout(() => {
    document.querySelector(".icon-up").classList.add("hide");
  }, 1500);
});

// fungsi pencarian namun hasil test masih berantakan
function searchText() {
  const searchInput = document.getElementById("search-input").value;
  const lines = document.body.textContent.split("\n");

  const output = lines.map((line) => (line.includes(searchInput) ? `<span class="highlight">${line}</span>` : `<span class="blocked">${line}</span>`)).join("");

  document.body.innerHTML = output;
}

const submitButton = document.getElementById("submit-btn");

submitButton.addEventListener("click", function (event) {
  event.preventDefault();
  alert("terimakasih atas masukanya!");
});
