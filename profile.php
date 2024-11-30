<?php
require_once 'connecting.php';
session_start();

// Kiểm tra đăng nhập
if (!isset($_SESSION['id_acc'])) {
    header("Location: login.php");
    exit();
}

// Lấy thông tin người dùng
$user_id = $_SESSION['id_acc'];
$user_query = "SELECT * FROM accounts WHERE id_acc = ?";
$stmt = $conn->prepare($user_query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$user_result = $stmt->get_result();
$user_info = $user_result->fetch_assoc();

// Lấy lịch sử làm bài
$history_query = "SELECT *, 
                 (score * 100 / total_questions) as percentage 
                 FROM quiz_results 
                 WHERE user_id = ? 
                 ORDER BY completion_time DESC";
$stmt = $conn->prepare($history_query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$history_result = $stmt->get_result();

// Tính điểm trung bình
$avg_query = "SELECT AVG(score * 100 / total_questions) as avg_score 
             FROM quiz_results 
             WHERE user_id = ?";
$stmt = $conn->prepare($avg_query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$avg_result = $stmt->get_result();
$avg_score = $avg_result->fetch_assoc()['avg_score'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hồ sơ người dùng</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .profile-header {
            background: #B72426;
            color: white;
            padding: 2rem 0;
            margin-bottom: 2rem;
        }
        .profile-stats {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .history-card {
            background: white;
            border-radius: 10px;
            padding: 1rem;
            margin-bottom: 1rem;
            border-left: 5px solid #B72426;
            transition: transform 0.2s;
        }
        .history-card:hover {
            transform: translateX(5px);
        }
        .score-badge {
            font-size: 1.2rem;
            padding: 0.5rem 1rem;
            border-radius: 20px;
        }
        .nav-link {
            color: white;
            margin: 0 1rem;
        }
        .nav-link:hover {
            color: #FFCC00;
        }
    </style>
</head>
<body class="bg-light">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #B72426;">
        <div class="container">
            <a class="navbar-brand" href="index.php">Trang chủ</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="cauhoi.php">Làm bài</a>
                <a class="nav-link" href="logout.php">Đăng xuất</a>
            </div>
        </div>
    </nav>

    <!-- Profile Header -->
    <div class="profile-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1><i class="fas fa-user-circle"></i> <?php echo htmlspecialchars($user_info['user_name']); ?></h1>
                    <p><i class="fas fa-user"></i> Tên đăng nhập: <?php echo htmlspecialchars($user_info['user_acc']); ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Statistics -->
        <div class="profile-stats">
            <h3><i class="fas fa-chart-line"></i> Thống kê</h3>
            <div class="row mt-4">
                <div class="col-md-4 text-center">
                    <h4>Điểm trung bình</h4>
                    <div class="score-badge bg-primary text-white">
                        <?php echo number_format($avg_score, 1); ?>%
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <h4>Số lần làm bài</h4>
                    <div class="score-badge bg-success text-white">
                        <?php echo $history_result->num_rows; ?>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <h4>Thành viên từ</h4>
                    <div class="score-badge bg-info text-white">
                        <?php echo date('d/m/Y', strtotime($user_info['created_at'])); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- History -->
        <div class="profile-stats">
            <h3><i class="fas fa-history"></i> Lịch sử làm bài</h3>
            <?php if ($history_result->num_rows > 0): ?>
                <?php while($row = $history_result->fetch_assoc()): ?>
                    <div class="history-card">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <h5>Điểm số: <?php echo $row['score']; ?>/<?php echo $row['total_questions']; ?></h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" 
                                         style="width: <?php echo $row['percentage']; ?>%"
                                         aria-valuenow="<?php echo $row['percentage']; ?>" 
                                         aria-valuemin="0" 
                                         aria-valuemax="100">
                                        <?php echo number_format($row['percentage'], 1); ?>%
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <p class="mb-0">
                                    <i class="fas fa-calendar"></i> 
                                    <?php echo date('d/m/Y', strtotime($row['completion_time'])); ?>
                                </p>
                                <p class="mb-0">
                                    <i class="fas fa-clock"></i> 
                                    <?php echo date('H:i', strtotime($row['completion_time'])); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p class="text-center">Chưa có lịch sử làm bài</p>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>