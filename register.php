<?php
require_once 'connecting.php';

$error = '';
$success = '';

if(isset($_POST['register'])) {
    $user_acc = mysqli_real_escape_string($conn, $_POST['user_acc']);
    $pass_acc = mysqli_real_escape_string($conn, $_POST['pass_acc']);
    $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
    
    // Kiểm tra username đã tồn tại chưa
    $check_query = "SELECT * FROM accounts WHERE user_acc=?";
    $check_stmt = mysqli_prepare($conn, $check_query);
    mysqli_stmt_bind_param($check_stmt, "s", $user_acc);
    mysqli_stmt_execute($check_stmt);
    $check_result = mysqli_stmt_get_result($check_stmt);
    
    if(mysqli_num_rows($check_result) > 0) {
        $error = "Tên đăng nhập đã tồn tại!";
    } else {
        // Thêm tài khoản mới
        $insert_query = "INSERT INTO accounts (user_acc, pass_acc, user_name) VALUES (?, ?, ?)";
        $insert_stmt = mysqli_prepare($conn, $insert_query);
        mysqli_stmt_bind_param($insert_stmt, "sss", $user_acc, $pass_acc, $user_name);
        
        if(mysqli_stmt_execute($insert_stmt)) {
            $success = "Đăng ký thành công! Vui lòng đăng nhập.";
            header("Location: login.php");
            exit();
        } else {
            $error = "Lỗi: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row min-vh-100 align-items-center justify-content-center">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h2 class="text-center mb-4">Đăng ký tài khoản</h2>
                        <?php if($error): ?>
                            <div class="alert alert-danger"><?php echo $error; ?></div>
                        <?php endif; ?>
                        <?php if($success): ?>
                            <div class="alert alert-success"><?php echo $success; ?></div>
                        <?php endif; ?>
                        <form method="POST">
                            <div class="mb-3">
                                <input type="text" name="user_acc" class="form-control" placeholder="Tên đăng nhập" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" name="pass_acc" class="form-control" placeholder="Mật khẩu" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="user_name" class="form-control" placeholder="Tên người dùng" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" name="register" class="btn btn-primary">Đăng ký</button>
                            </div>
                        </form>
                        <p class="text-center mt-3 mb-0">
                            Đã có tài khoản? <a href="login.php" class="text-decoration-none">Đăng nhập</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
