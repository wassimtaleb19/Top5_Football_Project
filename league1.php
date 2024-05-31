<?php 
include("linking.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="style2.css" rel="stylesheet">
    <link href="styleE.css" rel="stylesheet">
  </head>
<body>
  <!-- <p class="test">hii</p> -->
  <div class="bg">
    <div class="horizontalNavBar">
        <a href="prem.php" class="navv first">
        <img class="flagIcons" src="images/prem.jpg">
        <span class="firstNav">PL</span>
        </a>
        <a href="laliga.php" class="navv second">
        <img class="flagIcons" src="images/laliga.jpg">
        <span class="firstNav">Laliga</span>
        </a>
        <a href="serieA.php" class="navv third">
        <img class="flagIcons" src="images/serieA.jpg">
        <span class="firstNav">Serie A</span>
        </a>
        <a href="budes.php" class="navv fourth">
        <img class="flagIcons" src="images/bunds.jpg">
        <span class="firstNav">Bundesliga</span>
        </a>
        <a class="navv fifth">
        <img class="flagIcons" src="images/league1.jpg">
        <span class="firstNav">League 1</span>
        </a>
    </div>

<!-- 2 -->

    <div class="majmoo3a">

    <button class="btt btt1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 icon">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21 16.811c0 .864-.933 1.406-1.683.977l-7.108-4.061a1.125 1.125 0 0 1 0-1.954l7.108-4.061A1.125 1.125 0 0 1 21 8.689v8.122ZM11.25 16.811c0 .864-.933 1.406-1.683.977l-7.108-4.061a1.125 1.125 0 0 1 0-1.954l7.108-4.061a1.125 1.125 0 0 1 1.683.977v8.122Z" />
</svg>
</button>

<div class="e block b1">
      <h1 class="centering">Top Players</h1>
      <div class="listing list1">
        <p class="player1"><?php $sql="SELECT PlayerName from players where PlayerID = 21";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["PlayerName"]; ?></p>
        <p class="goals1"><?php $sql="SELECT PlayerNbOfGaols from players where PlayerID = 21";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["PlayerNbOfGaols"]; ?></p>
      </div>
      <div class="listing list2">
        <p class="player2"><?php $sql="SELECT PlayerName from players where PlayerID = 22";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["PlayerName"]; ?></p>  
        <p class="goals2"><?php $sql="SELECT PlayerNbOfGaols from players where PlayerID = 22";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["PlayerNbOfGaols"]; ?></p>
      </div>
      <div class="listing list3">
        <p class="player3"><?php $sql="SELECT PlayerName from players where PlayerID = 23";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["PlayerName"]; ?></p>
        <p class="goals3"><?php $sql="SELECT PlayerNbOfGaols from players where PlayerID = 23";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["PlayerNbOfGaols"]; ?></p>
      </div>
      <div class="listing list4">
        <p class="player4"><?php $sql="SELECT PlayerName from players where PlayerID = 24";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["PlayerName"]; ?></p>
        <p class="goals4"><?php $sql="SELECT PlayerNbOfGaols from players where PlayerID = 24";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["PlayerNbOfGaols"]; ?></p>
      </div>
      <div class="listing list5">
        <p class="player5"><?php $sql="SELECT PlayerName from players where PlayerID = 25";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["PlayerName"]; ?></p>
        <p class="goals5"><?php $sql="SELECT PlayerNbOfGaols from players where PlayerID = 25";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["PlayerNbOfGaols"]; ?></p>
      </div>
     </div>
     <div class="e block b2">
      <h1 class="centering">Top Managers</h1>
      <div class="listing list1">
        <p class="player1"><?php $sql="SELECT ManagerName from managers where ManagerID = 21";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["ManagerName"]; ?></p>
        <p class="goals1"><?php $sql="SELECT HisTitlesWon from managers where ManagerID = 21";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["HisTitlesWon"]; ?></p>
      </div>
      <div class="listing list2">
        <p class="player2"><?php $sql="SELECT ManagerName from managers where ManagerID = 22";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["ManagerName"]; ?></p>
        <p class="goals2"><?php $sql="SELECT HisTitlesWon from managers where ManagerID = 22";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["HisTitlesWon"]; ?></p>
      </div>
      <div class="listing list3">
        <p class="player3"><?php $sql="SELECT ManagerName from managers where ManagerID = 23";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["ManagerName"]; ?></p>
        <p class="goals3"><?php $sql="SELECT HisTitlesWon from managers where ManagerID = 23";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["HisTitlesWon"]; ?></p>
      </div>
      <div class="listing list4">
        <p class="player4"><?php $sql="SELECT ManagerName from managers where ManagerID = 24";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["ManagerName"]; ?></p>
        <p class="goals4"><?php $sql="SELECT HisTitlesWon from managers where ManagerID = 24";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["HisTitlesWon"]; ?></p>
      </div>
      <div class="listing list5">
        <p class="player5"><?php $sql="SELECT ManagerName from managers where ManagerID = 25";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["ManagerName"]; ?></p>
        <p class="goals5"><?php $sql="SELECT HisTitlesWon from managers where ManagerID = 25";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["HisTitlesWon"]; ?></p>
      </div>
     </div>
     <div class="e block b3">
      <h1 class="centering">Top Teams</h1>
      <div class="listing list1">
        <p class="player1"><?php $sql="SELECT TeamName from teams where TeamID = 21";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["TeamName"]; ?></p>
        <p class="goals1"><?php $sql="SELECT TeamTitlesWon from teams where TeamID = 21";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["TeamTitlesWon"]; ?></p>
      </div>
      <div class="listing list2">
        <p class="player2"><?php $sql="SELECT TeamName from teams where TeamID = 22";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["TeamName"]; ?></p>
        <p class="goals2"><?php $sql="SELECT TeamTitlesWon from teams where TeamID = 22";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["TeamTitlesWon"]; ?></p>
      </div>
      <div class="listing list3">
        <p class="player3"><?php $sql="SELECT TeamName from teams where TeamID = 23";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["TeamName"]; ?></p>
        <p class="goals3"><?php $sql="SELECT TeamTitlesWon from teams where TeamID = 23";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["TeamTitlesWon"]; ?></p>
      </div>
      <div class="listing list4">
        <p class="player4"><?php $sql="SELECT TeamName from teams where TeamID = 24";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["TeamName"]; ?></p>
        <p class="goals4"><?php $sql="SELECT TeamTitlesWon from teams where TeamID = 24";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["TeamTitlesWon"]; ?></p>
      </div>
      <div class="listing list5">
        <p class="player5"><?php $sql="SELECT TeamName from teams where TeamID = 25";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["TeamName"]; ?></p>
        <p class="goals5"><?php $sql="SELECT TeamTitlesWon from teams where TeamID = 25";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_assoc($result);
        echo $row["TeamTitlesWon"]; ?></p>
      </div>
    </div>

<button class="btt btt2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 icon">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3 8.689c0-.864.933-1.406 1.683-.977l7.108 4.061a1.125 1.125 0 0 1 0 1.954l-7.108 4.061A1.125 1.125 0 0 1 3 16.811V8.69ZM12.75 8.689c0-.864.933-1.406 1.683-.977l7.108 4.061a1.125 1.125 0 0 1 0 1.954l-7.108 4.061a1.125 1.125 0 0 1-1.683-.977V8.69Z" />
</svg>
</button>
      
    </div>
    
    </div>
    <script src="js2.js"></script>
  </body>
  </html>