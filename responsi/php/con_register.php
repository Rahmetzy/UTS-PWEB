<?php
include 'dbconfig.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Verify existing username
$checkQuery = mysqli_query($connect, "SELECT * FROM userdb WHERE username = '$username'");

// Check existing username
if (mysqli_num_rows($checkQuery) > 0) {
    // Username already exists, return an error message
    echo "Username already exists";
    exit;
}

// Hash the password using bcrypt
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

// Use prepared statements to prevent SQL injection
$sql = "INSERT INTO userdb (username, password) VALUES (?, ?)";
$stmt = mysqli_prepare($connect, $sql);
mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPassword);
$query = mysqli_stmt_execute($stmt);

if ($query) {
    header("location:../login.php?pesan=registered");
    exit;
} else {
    header("location:../login.php?pesan=error");
    exit;
}
?>