<?php
session_start();
require_once 'connecting.php';

if (!isset($_SESSION['id_acc'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $user_id = $_SESSION['id_acc'];
    
    // Xử lý upload ảnh
    $target_dir = "uploads/";
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    
    $image_path = null;
    if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $target_file = $target_dir . time() . '_' . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        // Kiểm tra file có phải là ảnh không
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false && move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $image_path = $target_file;
        }
    }
    
    // Thêm bài viết vào database
    $sql = "INSERT INTO posts (title, content, image_path, created_at, user_id) 
            VALUES (?, ?, ?, NOW(), ?)";
            
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssi", $title, $content, $image_path, $user_id);
    
    if (mysqli_stmt_execute($stmt)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
}
?>
