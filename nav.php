<nav class="navbar">
    <div class="container">
        <div class="menu-container">
            <button class="hamburger" onclick="toggleMenu()">&#9776;</button>
            <div class="dropdown-menu">
                <?php if(isset($_SESSION['username'])): ?>
                <div class="profile-item">
                    <div class="profile-header">
                        <i class="fas fa-user-circle"></i>
                        <span class="username"><?php echo $_SESSION['username']; ?></span>
                    </div>
                    <div class="profile-links">
                        <a href="profile.php"><i class="fas fa-id-card"></i> Trang cá nhân</a>
                        <div class="divider"></div>
                        <a href="logout.php" class="logout-link"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
                    </div>
                </div>
                <?php else: ?>
                <a href="login.php" class="login-link"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a>
                <?php endif; ?>
                <div class="divider"></div>
                <a href="HD_TV.php"><i class="fas fa-question-circle"></i> Hướng dẫn</a>
                <a href="Terms _&_Conditions.php"><i class="fas fa-file-contract"></i> Điều khoản</a>
            </div>
        </div>
        <ul>
            <li><a href="index.php">TRANG CHỦ</a></li>
            <li><a href="history_time.php">DÒNG LỊCH SỬ</a></li>
            <li>
                <a href="tacpham_tv.php">TƯ LIỆU</a>
                <div class="dropdown">
                    <a href="tacpham_tv.php">Tác phẩm</a>
                    <a href="bando_tv.php">Bản đồ</a>
                </div>
            </li>
            <li><a href="ditich_tv.php">DI TÍCH</a></li>
            <li><a href="introduce.php">GIỚI THIỆU</a></li>
            <li><a href="cauhoi.php">CÂU HỎI</a></li>
        </ul>
    </div>
</nav>

<script>
// Thêm event listener để đóng menu khi click bên ngoài
document.addEventListener('click', function(event) {
    const menu = document.querySelector('.dropdown-menu');
    const hamburger = document.querySelector('.hamburger');
    
    // Kiểm tra nếu click không phải vào menu hoặc nút hamburger
    if (!menu.contains(event.target) && !hamburger.contains(event.target)) {
        menu.style.display = 'none';
    }
});

// Sửa lại hàm toggleMenu để ngăn chặn event bubbling
function toggleMenu() {
    const menu = document.querySelector('.dropdown-menu');
    if (menu.style.display === 'block') {
        menu.style.display = 'none';
    } else {
        menu.style.display = 'block';
    }
    event.stopPropagation(); // Ngăn chặn event bubbling
}
</script>
