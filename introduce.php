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
            <h1>Giới thiệu về Con người Trà Vinh</h1>
            <p>
                Chào mừng bạn đến với <strong>Con người Trà Vinh</strong>, nơi mà hành trình khám phá quá khứ trở nên
                sống động và thú vị hơn bao giờ hết. Chúng tôi tự hào là nguồn tài liệu toàn diện và đáng tin cậy về
                lịch sử, cung cấp những thông tin, câu chuyện, và sự kiện đã định hình thế giới chúng ta đang sống.
            </p>

            <p>Tại <strong>Con người Trà Vinh</strong>, bạn sẽ tìm thấy:</p>

            <ul>
                <li>Bài viết chuyên sâu về các thời kỳ lịch sử, từ cổ đại đến hiện đại, với những góc nhìn phong phú và
                    mới mẻ.</li>
                <li>Hồ sơ nhân vật lịch sử, giúp bạn hiểu rõ hơn về những con người đã để lại dấu ấn trong dòng chảy
                    thời gian.</li>
                <li>Sự kiện quan trọng, từ các cuộc chiến tranh, phát kiến khoa học đến những cuộc cách mạng văn hóa và
                    chính trị.</li>
                <li>Tư liệu lịch sử, bao gồm tài liệu gốc, hình ảnh và bản đồ cổ giúp bạn tiếp cận với nguồn thông tin
                    chân thực và chính xác.</li>
            </ul>

            <p>
                Mục tiêu của chúng tôi là mang lại một góc nhìn toàn diện và dễ tiếp cận về lịch sử cho mọi đối tượng,
                từ học sinh, sinh viên, đến những người yêu thích và đam mê lịch sử. Chúng tôi mong muốn kết nối quá khứ
                với hiện tại, để từ đó giúp mỗi người hiểu rõ hơn về nguồn gốc, truyền thống và những bài học quý giá từ
                các thời đại trước.
            </p>

            <p>
                Hãy cùng <strong>Con người Trà Vinh</strong> dấn thân vào những câu chuyện lịch sử hấp dẫn, khám phá
                những bí ẩn chưa được giải đáp và tìm hiểu sâu hơn về các sự kiện đã làm thay đổi thế giới!
            </p>
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
            menuContainer.classList.toggle('active');
        }
    </script>
</body>

</html>