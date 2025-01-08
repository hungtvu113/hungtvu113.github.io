<!DOCTYPE html>
<html lang="vi">

<head>
    <link rel="icon" href="Images/VNlogo.png" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Con người Trà Vinh</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php 
    session_start();
    include 'nav.php'; 
    ?>
    
    <div class="top-nav">
        <div class="logo">
            <a href="index.php"><img src="Images/logo.png" alt="Logo"></a>
        </div>

        <div class="nav-links">

            <div class="social-icons">
                <div class="facebook_icon">
                    <a href="https://www.facebook.com/profile.php?id=61556071283286&mibextid=ZbWKwL" class="fab fa-facebook"></a>
                </div>
               
            </div>
        </div>
    </div>

    <div class="search-bar">
        <div class="sliding-text-container">
            <div class="sliding-text">
                <h1>Bạn Có Biết: Lịch sử sự hình thành của tỉnh TRÀ VINH?</h1>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="sidebar">
            <h2 class="sidebar-title">Khám phá Trà Vinh</h2>
            <div class="menu-container">
                <a href="HP_2024.php" class="menu-item">
                    <i class="fas fa-heart"></i>
                    <span>HAPPY TRÀ VINH</span>
                </a>

                <a href="DL_2024.php" class="menu-item">
                    <i class="fas fa-umbrella-beach"></i>
                    <span>DU LỊCH</span>
                </a>
                <a href="DliTV.php" class="menu-item">
                    <i class="fas fa-map-marked-alt"></i>
                    <span>ĐỊA LÝ</span>
                </a>
                <a href="VH_TV.php" class="menu-item">
                    <i class="fas fa-theater-masks"></i>
                    <span>VĂN HÓA</span>
                </a>
            </div>
        </div>
        <div class="main-content">
            <h1>Hướng dẫn sử dụng trang web</h1>

            <h2>1. Điều hướng</h2>
            <p>Sử dụng thanh menu ở đầu trang để di chuyển giữa các phần khác nhau của trang web.</p>

            <h2>2. Tìm kiếm thông tin</h2>
            <p>Sử dụng thanh tìm kiếm để tìm nội dung cụ thể trên trang web.</p>

            <h2>3. Khám phá nội dung</h2>
            <p>Khám phá các mục như "Dòng lịch sử", "Tư liệu", "Di tích" để tìm hiểu về Trà Vinh.</p>

            <h2>4. Tương tác</h2>
            <p>Đọc và bình luận về các bài viết, chia sẻ thông tin qua các biểu tượng mạng xã hội.</p>

            <h2>5. Liên hệ</h2>
            <p>Sử dụng thông tin liên hệ ở cuối trang nếu bạn cần hỗ trợ hoặc có câu hỏi.</p>
        </div>
    </div>




    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section about">
                    <h3>Về Con người Trà Vinh</h3>
                    <p>Chúng tôi là nguồn tài liệu đáng tin cậy về lịch sử Trà Vinh, cung cấp thông tin chính xác và hấp
                        dẫn cho mọi độc giả.</p>
                </div>
                <div class="footer-section links">
                    <h3>Liên kết nhanh</h3>
                    <ul>
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="history_time.php">Dòng lịch sử</a></li>
                        <li><a href="tacpham_tv.php">Tư liệu</a></li>
                        <li><a href="bando_tv.php">Bản đồ</a></li>
                        <li><a href="ditich_tv.php">Di tích</a></li>
                        <li><a href="introduce.php">Giới thiệu</a></li>
                    </ul>
                </div>
                <div class="footer-section contact">
                    <h3>Liên hệ</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 126 Nguyễn Thiện Thành, Khóm 4, Phường 5, TP. Trà Vinh</p>
                    <p><i class="fas fa-phone"></i> (0294) 3851941</p>
                    <p><i class="fas fa-envelope"></i> info@connguoitravinh.com</p>
                </div>
            </div>
         
        </div>
    </footer>
    <script>

        function toggleMenu() {
            var menuContainer = document.querySelector('.menu-container');
            var hamburger = document.querySelector('.hamburger');
            menuContainer.classList.toggle('active');
            hamburger.classList.toggle('active');
        }
    </script>
</body>

</html>