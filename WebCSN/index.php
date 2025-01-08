<?php
session_start();

// Kiểm tra cookie nếu chưa có session
if(!isset($_SESSION['username']) && isset($_COOKIE['remember_token']) && isset($_COOKIE['username'])) {
    $conn = mysqli_connect("localhost", "username", "password", "database_name");
    
    $token = mysqli_real_escape_string($conn, $_COOKIE['remember_token']);
    $username = mysqli_real_escape_string($conn, $_COOKIE['username']);
    
    $query = "SELECT * FROM users WHERE username='$username' AND remember_token='$token'";
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
    }
}
?>
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
    <?php include 'nav.php'; ?>
    
    <div class="top-nav">
        <div class="logo">
            <a href="Trangchu.php"><img src="Images/logo.png" alt="Logo"></a>
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
            <h1>Lịch sử hình thành tỉnh Trà Vinh</h1>
            <p>Trải qua những thăng trầm vì bị chi phối bởi những quy luật kiến tạo địa chất cùng những lần "biển tiến,
                biển lùi", vùng đất có tên gọi "Trà Vang" – tiền thân của tỉnh Trà Vinh sau này đã được hình thành từ
                lâu đời. Vào thời kỳ đó, Trà Vinh vẫn còn là một vùng đất rất hoang vu, các loại cây rừng trùm lên những
                giồng đất, những đầm lầy và sông rạch chằng chịt, dân cư thưa thớt.</p>
                <p><i>(Nguồn: vietnam.vn)</i></p>
            <img src="Images/map_TV.jpg" alt="Anh" class="resize-image">
            <p><i>(Nguồn báo Trà Vinh)</p></i>
            <p>
                Vào thế kỷ XVII, các quốc gia phong kiến như Việt Nam, Trung Quốc, Campuchia… trong bối cảnh chung của
                thế giới đã không tránh khỏi sự khủng hoảng và suy yếu. Ở Việt Nam, cuộc chiến tranh Trịnh – Nguyễn
                (1627-1673) đã chia cắt đất nước thành hai xứ: Đàng trong và Đàng ngoài (lấy sông Gianh làm ranh giới).
                Điều này đã làm cho hàng vạn nông dân lâm vào thảm họa bị tiêu diệt, phải đi tìm cõi sống ở Phương Nam.
            </p>
            <p><i>(Nguồn: vietnam.vn)</i></p>
            <p>
                Trước thực tế khách quan đó, vào cuối thế kỷ thứ XVII, các Chúa Nguyễn đã chủ động tổ chức di dân người
                Việt vào vùng đất Nam bộ, thực thi những chính sách chiêu mộ lưu dân và đưa quân đội vào Nam khai phá
                đất đai. Cùng với người Việt và người Khmer, người Hoa cũng được Chúa Nguyễn tạo điều kiện để cùng nhau
                khai phá và định cư trên vùng đất phía Nam này, trong đó có vùng đất Trà Vinh.
            </p>
            <p><i>(Nguồn: vietnam.vn)</i></p>
            <p>
                Như vậy, vùng đất Trà Vinh, con đẻ của Biển Đông và sông Cửu Long, một vùng đất chứa đựng một hệ sinh
                thái đa dạng cùng với nhiều tiềm năng kinh tế khác nhau, vào thế kỷ thứ XVII đã có chủ nhân là một cộng
                đồng dân cư đa dân tộc (Việt, Khmer, Hoa…). Sự hình thành một cộng đồng dân cư đa dân tộc trên vùng đất
                này là một trong những sự kiện lịch sử có ý nghĩa cực kỳ trọng đại đối với sự hình thành và phát triển
                của tỉnh Trà Vinh sau này.
            </p>
            <p><i>(Nguồn: vietnam.vn)</i></p>
            <img src="Images/ban_do_Tv.jpg" alt="Anh 1" class="resize-image">
            <p><i>(Nguồn: Báo Trà Vinh)</i></p>
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



        document.addEventListener('DOMContentLoaded', function() {
    const scrollToTopButton = document.getElementById('scrollToTop');
    
    // Hiển thị/ẩn nút khi cuộn
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 200) {
            scrollToTopButton.classList.add('visible');
        } else {
            scrollToTopButton.classList.remove('visible');
        }
    });
    
    // Xử lý sự kiện click
    scrollToTopButton.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
    </script>

    <button id="scrollToTop" class="scroll-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
</body>

</html>