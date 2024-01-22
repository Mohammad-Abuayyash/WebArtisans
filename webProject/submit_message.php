<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webartisans"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $team_member = $_POST["team_member"];
    $message = $_POST["message"];

    $sql = "INSERT INTO teammessages (first_name, last_name, email, team_member, message) VALUES ('$first_name', '$last_name', '$email', '$team_member', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
