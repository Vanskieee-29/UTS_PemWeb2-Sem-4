<?php
$conn = mysqli_connect("localhost", "root", "", "test_db");

$username = $_POST['username'];
$password = $_POST['password'];

// prepared statement
$stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE username=? AND password=?");

// binding parameter
mysqli_stmt_bind_param($stmt, "ss", $username, $password);

// eksekusi
mysqli_stmt_execute($stmt);

// ambil hasil
$result = mysqli_stmt_get_result($stmt);

// cek login
if(mysqli_num_rows($result) > 0){
    header("Location: dashboard.php");
exit;
} else {
    header("Location: index.php?error=1");
exit;
}
?>