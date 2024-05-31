let array = [
  "images/std1.jpg",
  "images/std2.jpg",
  "images/std3.jpg",
  "images/std4.jpg",
  "images/std5.jpg",
];

document.addEventListener("DOMContentLoaded", () => {
  //1
  let bg2 = document.querySelector(".bg2");
  let defaultImage = "images/bg.jpg"; // Set your default image URL here

  // document.querySelector(".test").innerHTML = "tested ya bro";

  document.querySelectorAll("li").forEach((listItem, index) => {
    listItem.addEventListener("mouseover", (event) => {
      let imageSrc = event.currentTarget.querySelector("img").src;
      bg2.style.backgroundImage = `linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)),url(${array[index]})`;
      bg2.style.backgroundSize = "cover";
      bg2.style.backgroundPosition = "center";
    });

    listItem.addEventListener("mouseout", () => {
      bg2.style.backgroundImage = `linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)),url(${defaultImage})`;
      bg2.style.backgroundSize = "cover";
      bg2.style.backgroundPosition = "center";
    });
  });

  //switching images in the nav:
  //+
  //switching paragraph in the nav

  //1a

  document.querySelector(".englandFlag").addEventListener("mouseover", () => {
    let a = document.querySelector(".englandFlag");
    a.src = "images/prem.jpg";
    a.classList.add("navFlags");
    let aa = document.querySelector(".navP1");
    aa.innerHTML = "PremLeague";
    let aaa = document.querySelector(".navP1");
    aaa.innerHTML = "PremLeague";
    aaa.classList.add("navP");
  });
  document.querySelector(".englandFlag").addEventListener("mouseout", () => {
    let a = document.querySelector(".englandFlag");
    a.src = "images/england1.jpg";
    a.classList.add("navFlags");
    let aa = document.querySelector(".navP1");
    aa.innerHTML = "ENGLAND";
    let aaa = document.querySelector(".navP1");
    aaa.innerHTML = "ENGLAND";
    aaa.classList.add("navP");
  });

  //1b

  document.querySelector(".navP1").addEventListener("mouseover", () => {
    let a = document.querySelector(".englandFlag");
    a.src = "images/prem.jpg";
    a.classList.add("navFlags");
    let aa = document.querySelector(".navP1");
    aa.innerHTML = "PremLeague";
    let aaa = document.querySelector(".navP1");
    aaa.innerHTML = "PremLeague";
    aaa.classList.add("navP");
  });
  document.querySelector(".navP1").addEventListener("mouseout", () => {
    let a = document.querySelector(".englandFlag");
    a.src = "images/england1.jpg";
    a.classList.add("navFlags");
    let aa = document.querySelector(".navP1");
    aa.innerHTML = "ENGLAND";
    let aaa = document.querySelector(".navP1");
    aaa.innerHTML = "ENGLAND";
    aaa.classList.add("navP");
  });

  //2a

  document.querySelector(".spainFlag").addEventListener("mouseover", () => {
    let b = document.querySelector(".spainFlag");
    b.src = "images/laliga.jpg";
    b.classList.add("navFlags");
    let bb = document.querySelector(".navP2");
    bb.innerHTML = "LaLiga";
    let a = document.querySelector(".navP2");
    a.innerHTML = "LaLiga";
    a.classList.add("navP");
  });
  document.querySelector(".spainFlag").addEventListener("mouseout", () => {
    let b = document.querySelector(".spainFlag");
    b.src = "images/spain1.jpg";
    b.classList.add("navFlags");
    let bb = document.querySelector(".navP2");
    bb.innerHTML = "SPAIN";
    let a = document.querySelector(".navP2");
    a.innerHTML = "SPAIN";
    a.classList.add("navP");
  });

  //2b

  document.querySelector(".navP2").addEventListener("mouseover", () => {
    let b = document.querySelector(".spainFlag");
    b.src = "images/laliga.jpg";
    b.classList.add("navFlags");
    let bb = document.querySelector(".navP2");
    bb.innerHTML = "LaLiga";
    let a = document.querySelector(".navP2");
    a.innerHTML = "LaLiga";
    a.classList.add("navP");
  });
  document.querySelector(".navP2").addEventListener("mouseout", () => {
    let b = document.querySelector(".spainFlag");
    b.src = "images/spain1.jpg";
    b.classList.add("navFlags");
    let bb = document.querySelector(".navP2");
    bb.innerHTML = "SPAIN";
    let a = document.querySelector(".navP2");
    a.innerHTML = "SPAIN";
    a.classList.add("navP");
  });

  //3a

  document.querySelector(".italyFlag").addEventListener("mouseover", () => {
    let c = document.querySelector(".italyFlag");
    c.src = "images/serieA.jpg";
    c.classList.add("navFlags");
    let cc = document.querySelector(".navP3");
    cc.innerHTML = "serieA";
    let a = document.querySelector(".navP3");
    a.innerHTML = "serieA";
    a.classList.add("navP");
  });
  document.querySelector(".italyFlag").addEventListener("mouseout", () => {
    let c = document.querySelector(".italyFlag");
    c.src = "images/italy1.jpg";
    c.classList.add("navFlags");
    let bb = document.querySelector(".navP3");
    bb.innerHTML = "ITALY";
    let a = document.querySelector(".navP3");
    a.innerHTML = "ITALY";
    a.classList.add("navP");
  });

  //3b

  document.querySelector(".navP3").addEventListener("mouseover", () => {
    let c = document.querySelector(".italyFlag");
    c.src = "images/serieA.jpg";
    c.classList.add("navFlags");
    let cc = document.querySelector(".navP3");
    cc.innerHTML = "serieA";
    let a = document.querySelector(".navP3");
    a.innerHTML = "serieA";
    a.classList.add("navP");
  });
  document.querySelector(".navP3").addEventListener("mouseout", () => {
    let c = document.querySelector(".italyFlag");
    c.src = "images/italy1.jpg";
    c.classList.add("navFlags");
    let bb = document.querySelector(".navP3");
    bb.innerHTML = "ITALY";
    let a = document.querySelector(".navP3");
    a.innerHTML = "ITALY";
    a.classList.add("navP");
  });

  //4a

  document.querySelector(".germanyFlag").addEventListener("mouseover", () => {
    let d = document.querySelector(".germanyFlag");
    d.src = "images/bunds.jpg";
    d.classList.add("navFlags");
    let dd = document.querySelector(".navP4");
    dd.innerHTML = "BundesLiga";
    let a = document.querySelector(".navP4");
    a.innerHTML = "BundesLiga";
    a.classList.add("navP");
  });
  document.querySelector(".germanyFlag").addEventListener("mouseout", () => {
    let d = document.querySelector(".germanyFlag");
    d.src = "images/germany1.jpg";
    d.classList.add("navFlags");
    let dd = document.querySelector(".navP4");
    dd.innerHTML = "GERMANY";
    let a = document.querySelector(".navP4");
    a.innerHTML = "GERMANY";
    a.classList.add("navP");
  });

  //4b

  document.querySelector(".navP4").addEventListener("mouseover", () => {
    let d = document.querySelector(".germanyFlag");
    d.src = "images/bunds.jpg";
    d.classList.add("navFlags");
    let dd = document.querySelector(".navP4");
    dd.innerHTML = "BundesLiga";
    let a = document.querySelector(".navP4");
    a.innerHTML = "BundesLiga";
    a.classList.add("navP");
  });
  document.querySelector(".navP4").addEventListener("mouseout", () => {
    let d = document.querySelector(".germanyFlag");
    d.src = "images/germany1.jpg";
    d.classList.add("navFlags");
    let dd = document.querySelector(".navP4");
    dd.innerHTML = "GERMANY";
    let a = document.querySelector(".navP4");
    a.innerHTML = "GERMANY";
    a.classList.add("navP");
  });

  //5a

  document.querySelector(".franceFlag").addEventListener("mouseover", () => {
    let e = document.querySelector(".franceFlag");
    e.src = "images/league1.jpg";
    e.classList.add("navFlags");
    let ee = document.querySelector(".navP5");
    ee.innerHTML = "League1";
    let a = document.querySelector(".navP5");
    a.innerHTML = "League1";
    a.classList.add("navP");
  });

  document.querySelector(".franceFlag").addEventListener("mouseout", () => {
    let e = document.querySelector(".franceFlag");
    e.src = "images/france1.jpg";
    e.classList.add("navFlags");
    let ee = document.querySelector(".navP5");
    ee.innerHTML = "FRANCE";
    let a = document.querySelector(".navP5");
    a.innerHTML = "FRANCE";
    a.classList.add("navP");
  });

  //5b

  document.querySelector(".navP5").addEventListener("mouseover", () => {
    let e = document.querySelector(".franceFlag");
    e.src = "images/league1.jpg";
    e.classList.add("navFlags");
    let ee = document.querySelector(".navP5");
    ee.innerHTML = "League1";
    let a = document.querySelector(".navP5");
    a.innerHTML = "League1";
    a.classList.add("navP");
  });
  document.querySelector(".navP5").addEventListener("mouseout", () => {
    let e = document.querySelector(".franceFlag");
    e.src = "images/france1.jpg";
    e.classList.add("navFlags");
    let ee = document.querySelector(".navP5");
    ee.innerHTML = "FRANCE";
    let a = document.querySelector(".navP5");
    a.innerHTML = "FRANCE";
    a.classList.add("navP");
  });
});

document.querySelector(".englandBtn").addEventListener("click", function () {
  window.location.href = "prem.php";
});
document.querySelector(".spainBtn").addEventListener("click", function () {
  window.location.href = "laliga.php";
});
document.querySelector("italyBtn").addEventListener("click", function () {
  window.location.href = "serieA.php";
});
document.querySelector(".germanyBtn").addEventListener("click", function () {
  window.location.href = "budes.php";
});
document.querySelector(".franceBtn").addEventListener("click", function () {
  window.location.href = "league1.php";
});
