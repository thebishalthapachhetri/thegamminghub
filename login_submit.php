<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gamminghub"; // name of the database

$Email = $_POST["email"];
$Password = $_POST["password"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT password, fname FROM register WHERE email = '".$email."' LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
    // output the data of each row
    $row = mysqli_fetch_array($result);
    if(password_verify($password, $row["password"])){
        echo '<h2>Welcome '.$row["fname"].', your password is valid!</h2>';
    }else{
        echo 'Invalid password!'
    }
}
