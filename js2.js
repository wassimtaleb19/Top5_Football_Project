document.addEventListener("DOMContentLoaded", () => {
  document.querySelector(".btt2").addEventListener("click", next);
  document.querySelector(".btt1").addEventListener("click", previous);
});
let currentIndex = 0;
const blocks = document.querySelectorAll(".block");

function updateBlocks() {
  blocks.forEach((block, index) => {
    block.style.display = index === currentIndex ? "block" : "none";
  });
}

function next() {
  currentIndex = (currentIndex + 1) % blocks.length;
  updateBlocks();
}

function previous() {
  currentIndex = (currentIndex - 1 + blocks.length) % blocks.length;
  updateBlocks();
}

// Initialize the display
updateBlocks();

// ::::::: Changig page CONTENT :::::::

// function laliga() {
//   let a = document.querySelectorAll(".a");
//   let b = document.querySelectorAll(".b");
//   let c = document.querySelectorAll(".c");
//   let d = document.querySelectorAll(".d");
//   let e = document.querySelectorAll(".e");
//   a.forEach((element) => {
//     element.classList.add(".clear");
//   });
//   b.forEach((element) => {
//     element.classList.add(".appear");
//   });
//   c.forEach((element) => {
//     element.classList.add(".clear");
//   });
//   d.forEach((element) => {
//     element.classList.add(".clear");
//   });
//   e.forEach((element) => {
//     element.classList.add(".clear");
//   });
// }
