<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="style1.css" rel="stylesheet">
  </head>
  <body>
    
    
    <div class="bg2">
      <!-- <p class="test">test</p> -->
      
      <!-- Your navigation links -->
      
      <nav class="flagsDiv">
        <a class="navLinks" href="prem.php">
          <img class="navFlags englandFlag" src="images/england1.jpg" />
          <p class="navP navP1">ENGLAND</p>
        </a>
        <a class="navLinks" href="laliga.php">
          <img class="navFlags spainFlag" src="images/spain1.jpg" />
          <p class="navP navP2">SPAIN</p>
        </a>
        <a class="navLinks" href="serieA.php">
          <img class="navFlags italyFlag" src="images/italy1.jpg" />
          <p class="navP navP3">ITALY</p>
        </a>
        <a class="navLinks" href="budes.php">
          <img class="navFlags germanyFlag" src="images/germany1.jpg" />
          <p class="navP navP4">GERMANY</p>
        </a>
        <a class="navLinks" href="league1.php">
          <img class="navFlags franceFlag" src="images/france1.jpg" />
          <p class="navP navP5">FRANCE</p>
        </a>
      </nav>
      
      <div class="border">
        <h1 class="h1">
          <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M400 0H176c-26.5 0-48.1 21.8-47.1 48.2c.2 5.3 .4 10.6 .7 15.8H24C10.7 64 0 74.7 0 88c0 92.6 33.5 157 78.5 200.7c44.3 43.1 98.3 64.8 138.1 75.8c23.4 6.5 39.4 26 39.4 45.6c0 20.9-17 37.9-37.9 37.9H192c-17.7 0-32 14.3-32 32s14.3 32 32 32H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H357.9C337 448 320 431 320 410.1c0-19.6 15.9-39.2 39.4-45.6c39.9-11 93.9-32.7 138.2-75.8C542.5 245 576 180.6 576 88c0-13.3-10.7-24-24-24H446.4c.3-5.2 .5-10.4 .7-15.8C448.1 21.8 426.5 0 400 0zM48.9 112h84.4c9.1 90.1 29.2 150.3 51.9 190.6c-24.9-11-50.8-26.5-73.2-48.3c-32-31.1-58-76-63-142.3zM464.1 254.3c-22.4 21.8-48.3 37.3-73.2 48.3c22.7-40.3 42.8-100.5 51.9-190.6h84.4c-5.1 66.3-31.1 111.2-63 142.3z"/></svg>
          <p>Football top 5 leagues</p>
          <!-- <button class="arrow1"></button>
          <button class="arrow2"></button> -->
        </h1>
        
        <!-- Your list items -->
        <ul class="list">
          <div class="list1">
            <li>
              <p class="positionP">1st</p>
              <img class="flags" src="images/prem.jpg" />
              <p class="description">The Three Lions, embodying pride, and competitive spirit on the global stage</p>
              <button class="btn1 englandBtn">View All</button>
            </li>
          </div>
          
          <div class="list2">
            <li>
              <p class="positionP">2nd</p>
              <img class="flags" src="images/laliga.jpg" />
              <p class="description">La Roja, masters of possession play and reigning European champions</p>
              <button class="btn1 spainBtn">View All</button>
            </li>
        </div>
        
        <div class="list3">
          <li>
            <p class="positionP">3rd</p>
            <img class="flags" src="images/serieA.jpg" />
            <p class="description">The Azzurri, renowned for their defensive prowess and tactical mastery</p>
            <button class="btn1 italyBtn">View All</button>
          </li>
        </div>
        
        <div class="list4">
          <li>
            <p class="positionP">4th</p>
            <img class="flags" src="images/bunds.jpg" />
            <p class="description">Die Mannschaft, known for their efficiency, resilience, and winning mentality</p>
            <button class="btn1 germanyBtn">View All</button>
          </li>
        </div>
        <div class="list5">
          <li>
            <p class="positionP">5th</p>
            <img class="flags" src="images/league1.jpg" />
            <p class="description">Les Bleus, a powerhouse of skill, flair, and World Cup triumphs</p>
            <button class="btn1 franceBtn">View All</button>
          </li>
        </ul>
    </div>
  </div>
  <script src="js1.js"></script>
  <!-- <script>
    function changeBackground(imageSrc) {
      document.querySelector('.bg2').style.backgroundImage = `url('${imageSrc}')`;
    }
  </script> -->
</body>
</html>

