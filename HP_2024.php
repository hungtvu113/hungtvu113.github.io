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
                    <a href="#" class="fab fa-facebook"></a>
                </div>
                <div class="google_icon">
                    <a href="#" class="fab fa-google-plus-g"></a>
                </div>
                <div class="twitter_icon">
                    <a href="#" class="fab fa-twitter"></a>
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
                <a href="#" class="menu-item">
                    <i class="fas fa-heart"></i>
                    <span>HAPPY TRÀ VINH</span>
                </a>
                <a href="DL_2024.html" class="menu-item">
                    <i class="fas fa-umbrella-beach"></i>
                    <span>DU LỊCH</span>
                </a>
                <a href="DliTV.html" class="menu-item">
                    <i class="fas fa-map-marked-alt"></i>
                    <span>ĐỊA LÝ</span>
                </a>
                <a href="VH_TV.html" class="menu-item">
                    <i class="fas fa-theater-masks"></i>
                    <span>VĂN HÓA</span>
                </a>
            </div>
        </div>

        <div class="main-content">
            <div class="upload-section">
                <h2>Chia sẻ khoảnh khắc của bạn</h2>
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Tiêu đề:</label>
                        <input type="text" id="title" name="title" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="content">Nội dung:</label>
                        <textarea id="content" name="content" class="form-control" rows="4" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Hình ảnh:</label>
                        <input type="file" id="image" name="image" class="form-control" accept="image/*" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Đăng bài</button>
                </form>
            </div>

            <div class="posts-section">
                <h2>Bài đăng gần đây</h2>
                <div id="posts-container">
                    <!-- Bài đăng sẽ được load động từ database -->
                </div>
            </div>
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
                        <li><a href="history_time.html">Dòng lịch sử</a></li>
                        <li><a href="tacpham_tv.html">Tư liệu</a></li>
                        <li><a href="bando_tv.html">Bản đồ</a></li>
                        <li><a href="ditich_tv.html">Di tích</a></li>
                        <li><a href="introduce.html">Giới thiệu</a></li>
                    </ul>
                </div>
                <div class="footer-section contact">
                    <h3>Liên hệ</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 126 Nguyễn Thiện Thành, Khóm 4, Phường 5, TP. Trà Vinh</p>
                    <p><i class="fas fa-phone"></i> 0375663427</p>
                    <p><i class="fas fa-envelope"></i> info@hungtvu113.github.io</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Con người Trà Vinh. Tất cả quyền được bảo lưu.</p>
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
    <script>
        // Function để load bài đăng
        function loadPosts() {
            fetch('display_posts.php')
                .then(response => response.json())
                .then(posts => {
                    const container = document.getElementById('posts-container');
                    container.innerHTML = '';

                    posts.forEach(post => {
                        const postElement = document.createElement('div');
                        postElement.className = 'post-item';
                        postElement.innerHTML = `
                            <h3>${post.title}</h3>
                            <img src="${post.image_path}" alt="${post.title}" class="post-image">
                            <p>${post.content}</p>
                            <small>Đăng ngày: ${new Date(post.created_at).toLocaleDateString('vi-VN')}</small>
                        `;
                        container.appendChild(postElement);
                    });
                })
                .catch(error => console.error('Error:', error));
        }

        // Load bài đăng khi trang được tải
        document.addEventListener('DOMContentLoaded', loadPosts);
    </script>
</body>

</html>