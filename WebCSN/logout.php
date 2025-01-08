<?php
session_start();

// Xóa cookie
setcookie('remember_token', '', time() - 3600, '/');
setcookie('username', '', time() - 3600, '/');

// Xóa session
session_destroy();

header('Location: index.php');
exit();
?>
