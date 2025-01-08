<?php
include 'connecting.php';

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);

$posts = array();
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $posts[] = $row;
    }
}

echo json_encode($posts);
mysqli_close($conn);
?>
