<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "football";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// echo "Connected successfully"; //


// 
// 
// 
// 
// 


// Perform database operations
// $sql = "SELECT * FROM teams";//syntax queriyeye 7atayneha bi $sql
// $result = $conn->query($sql);//hayda l syntax 3melne query 5alas(->query(....)) la db tacoolna($conn) w 7atayneha bi $result 

// if ($result->num_rows > 0) {
  // Output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["TeamID"]. " - Name: " . $row["TeamName"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }

// Close connection
// $conn->close();

// $sql = "SELECT * FROM players";
// $result = $conn->query($sql);

// if($result->num_rows > 0){
  // while($row = $result->fetch_assoc()){
    // $row = $result->fetch_assoc();
    // echo "PlayerID: " . $row['PlayerID'] . " / PlayerName: ". $row['PlayerName'] . " / GoalsScored: " . $row['PlayerNbOfGaols'] . '<br>';
  // }
// } else {
  // echo "0 Players";
// }/

// Close connection
// $conn->close();

