<?php
include('../connection.php');


session_start();
ob_start();


// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

if(empty($_SESSION['user_id'])){
    header("location: ../login.php"); 
    exit();
}

$user_id = $_SESSION["user_id"];
// Ensure the database connection is valid.
if (!$conn) {
    die("Database connection failed.");
}

$stmt_user = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt_user->bind_param("i", $user_id); // "i" for integer type
$stmt_user->execute();
$result_user = $stmt_user->get_result();
$user = $result_user->fetch_assoc();

$user_email = $user["email"];


?>