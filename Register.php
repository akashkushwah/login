<?php
$con =mysqli_connect("my_host", "my_user", "my_password", "my_db");

$name = $_POST["name"];
$age = $_POST["age"];
$phone = $_POST["phone"];
$username = $_POST["username"];
$password = $_POST["password"]:

$statement = mysqli_prepare($con, "INSERT INTO user (name, age, username, password) VALUES (?, ?, ?, ?");
mysqli_stmt_bind_param($statement, "siss", $name, $age, $phone, $username, $password);
mysqli_stmt_execute($statement);

$response = array();
$response["SUCCESS"] = true;

echo json)encode($response);
?>

















