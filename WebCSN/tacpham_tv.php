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
            <h1>Tác phẩm ‘Người đàn bà gánh chữ vượt sông’</h1>
            <p>
                Nhắc đến nhà văn Trần Dũng, giới văn nghệ sĩ tỉnh Trà Vinh chắc hẳn ai cũng phải kính phục. Bởi ông là
                tác giả gạo cội của miền đất Trà Vinh, một tài năng sáng chói trong sáng tác trên cả hai thể loại thơ ca
                và văn xuôi. Dẫu chưa được tiếp xúc trực tiếp với nhà văn Trần Dũng nhưng thông qua kênh thông tin trên
                internet và qua sách báo cho tôi biết được dôi chút về sự nghiệp sáng tác của nhà văn Trần Dũng. Với tấm
                lòng yêu quý tài năng của ông, người viết xin được cảm nhận văn xuôi của tác giả Trần Dũng qua bút ký
                nổi tiếng đã in trong sách Ngữ văn địa phương Trà Vinh khối trung học cơ sở có nhan đề <i>Người đàn bà
                    gánh chữ vượt sông</i>.
            </p>
            <img src="Images/20190731_132515-696x887.jpg" alt="Người đàn bà gánh chữ vượt sông" class="resize-image">
            <p><i>Nhà văn Trần Dũng.</i></p>
            <p>
                Đọc bút ký Người đàn bà gánh chữ vượt sông, chúng ta thấy được vẻ đẹp tâm hồn của cô giáo Trần Thị Mỹ
                Duyên, người gánh chữ vượt sông, người chung thủy, sắc son với nghề dạy học.
            </p>
            <p>
                Bằng việc ghi chép lại câu chuyện một cô giáo hết lòng với nghề dạy học, nhà văn Trần Dũng đã khắc họa
                nên một vẻ đẹp tâm hồn của cô Trần Thị Mỹ Duyên trong bút ký Người đàn bà gánh chữ vượt sông được thể
                hiện bằng một giọng văn chân thật, truyền cảm. Nhà văn đã làm nổi bật lên một tấm gương sáng ngời trong
                chiều sâu tâm hồn của nhân vật, có sức ảnh hưởng sâu rộng trong xã hội, là tấm gương người tốt việc tốt,
                tiêu biểu trong việc học tập và làm theo tư tưởng đạo đức phong cách Hồ Chí Minh. Vì thế, bút ký này có
                sức sống vượt thời gian, là một thành công của nhà văn Trần Dũng. Bằng chứng là Người đàn bà gánh chữ
                vượt sông của ông đã từng đoạt giải nhì của Hội Nhà Văn Việt Nam.
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
                    <p><i class="fas fa-phone"></i> 0375663427</p>
                    <p><i class="fas fa-envelope"></i> info@hungtvu113.github.io</p>
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