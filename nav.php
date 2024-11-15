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
                <a href="HD_TV.html"><i class="fas fa-question-circle"></i> Hướng dẫn</a>
                <a href="Terms _&_Conditions.html"><i class="fas fa-file-contract"></i> Điều khoản</a>
            </div>
        </div>
        <ul>
            <li><a href="Trangchu.html">TRANG CHỦ</a></li>
            <li><a href="history_time.html">DÒNG LỊCH SỬ</a></li>
            <li>
                <a href="tacpham_tv.html">TƯ LIỆU</a>
                <div class="dropdown">
                    <a href="tacpham_tv.html">Tác phẩm</a>
                    <a href="bando_tv.html">Bản đồ</a>
                </div>
            </li>
            <li><a href="ditich_tv.html">DI TÍCH</a></li>
            <li><a href="introduce.html">GIỚI THIỆU</a></li>
        </ul>
    </div>
</nav>
