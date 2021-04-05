<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gamminghub"; // name of the database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
    $FirstName = $_POST["firstName"];
    $LastName = $_POST["lastName"];
    $Email = $_POST["email"];
    $Password = password_hash($_POST["password"],PASSWORD_DEFAULT);
    $Address = $_POST["address"];
    $Gender = $_POST["gender"];

    $query = "INSERT INTO GammingHub (firstname, lastname, email, password, address, gender)
    VALUES ('".$FirstName."', '".$LastName."', '".$Email."', '".$Password."', '".$Address."', '".$Gender."')";
    echo $query;

    $result = mysqli_query($conn, $query);
    // check if the execution was successful
    if(!$result){
        echo "<p>Something is wrong with ", $query, "</p>";
    }
    else{
        // display an aceration successful message
        echo "<p>Successfully added new record</p>";
    }
}

mysqli_close($conn);

?>
