<?php
session_start();

// Kiểm tra cookie nếu chưa có session
if (!isset($_SESSION['username']) && isset($_COOKIE['username'])) {
    require_once 'connecting.php';
    
    $username = mysqli_real_escape_string($conn, $_COOKIE['username']);
    
    $query = "SELECT * FROM accounts WHERE user_acc=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $username;
        $_SESSION['id_acc'] = $user['id_acc'];
        $_SESSION['user_name'] = $user['user_name'];
    }
}
?>