<?php
$link = mysqli_connect("localhost","root", ""); // hostname - username - password

// $link: connection with mysql server
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($link, "online_quiz"); // link - db name to be selected

//couldve been done directly
// $link = mysqli_connect($host, $username, $password, $database);


?>