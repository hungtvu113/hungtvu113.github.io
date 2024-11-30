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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .search-result-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .search-result-image {
            width: 100px;
            height: 70px;
            object-fit: cover;
            margin-right: 15px;
            border-radius: 4px;
        }

        .search-result-title {
            font-size: 16px;
            color: #333;
        }

        .carousel-inner img {
            width: 80%;
            height: auto;
        }
       
    .pagination-container {
        margin-top: 20px;
    }

    .resize-image {
        width: 100%;
        max-width: 500px;
        height: auto;
        margin-bottom: 15px;
        display: block;
    }

    .page-item.disabled .page-link {
        pointer-events: none;
        opacity: 0.6;
    }

    </style>
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
            <form id="searchForm" class="d-flex align-items-center">
                <input type="text" name="query" class="form-control me-2" placeholder="Tìm kiếm..." />

                <!-- Bộ lọc theo danh mục -->
                <select name="category" class="form-select me-2">
                    <option value="">Tất cả danh mục</option>
                    <option value="history">Lịch sử</option>
                    <option value="science">Du lịch</option>
                    <option value="literature">Di tích</option>
                </select>
                <button type="submit" class="btn btn-outline-secondary">
                    <i class="fas fa-search"></i>
                </button>
            </form>

            <!-- Thêm phần spinner -->
            <div id="searchSpinner" class="text-center mt-4 d-none">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Đang tìm kiếm...</span>
                </div>
                <p class="mt-2">Đang tìm kiếm...</p>
            </div>

            <div id="results" class="mt-3">
                <h3>Tin tức nổi bật</h3>
                <div id="imageContainer">
                    <!-- Images will be displayed here -->
                </div>
                <div class="pagination-container mt-3 d-flex justify-content-center">
                    <nav aria-label="Image navigation">
                        <ul class="pagination">
                            <li class="page-item">
                                <button class="page-link" onclick="changePage(-1)">Previous</button>
                            </li>
                            <li class="page-item">
                                <button class="page-link" onclick="changePage(1)">Next</button>
                            </li>
                        </ul>
                    </nav>
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

        function toggleSpinner(show) {
            const spinner = document.getElementById('searchSpinner');
            const results = document.getElementById('results');

            if (show) {
                spinner.classList.remove('d-none');
                results.classList.add('d-none');
            } else {
                spinner.classList.add('d-none');
                results.classList.remove('d-none');
            }
        }

        document.getElementById('searchForm').addEventListener('submit', function (event) {
            event.preventDefault();
            performSearch();
        });

        function performSearch() {
            var query = document.querySelector('input[name="query"]').value;
            var category = document.querySelector('select[name="category"]').value;

            // Hiển thị spinner
            toggleSpinner(true);

            // Giả lập delay 1.5 giây
            setTimeout(() => {
                var results = [
                    {
                        title: 'Ao Bà Ôm',
                        category: 'science',
                        image: 'Images/ao.jpg',
                        link: 'DL_2024.php'
                    },
                    {
                        title: 'Bảo tàng văn hóa dân tộc của người Khmer',
                        category: 'history',
                        image: 'Images/nhabaotang.jpg',
                        link: 'DL_2024.php'
                    },
                    {
                        title: 'Bản đồ xưa Trà Vinh',
                        category: 'history',
                        image: 'Images/map_TV.jpg',
                        link: 'index.php'
                    }
                ];

                var filteredResults = results.filter(function (result) {
                    return (category === '' || result.category === category) &&
                        result.title.toLowerCase().includes(query.toLowerCase());
                });

                var resultsContainer = document.getElementById('results');
                resultsContainer.innerHTML = '';

                if (filteredResults.length > 0) {
                    filteredResults.forEach(function (result) {
                        var resultItem = document.createElement('div');
                        resultItem.className = 'search-result-item';
                        resultItem.innerHTML = `
                            <a href="${result.link}" style="display: flex; align-items: center; text-decoration: none; color: inherit; width: 100%;">
                                <img src="${result.image}" alt="${result.title}" class="search-result-image">
                                <div class="search-result-title">${result.title}</div>
                            </a>
                        `;
                        resultsContainer.appendChild(resultItem);
                    });
                } else {
                    resultsContainer.textContent = 'Không tìm thấy kết quả nào.';
                }

                // Ẩn spinner sau khi hoàn thành
                toggleSpinner(false);
            }, 1500); // Delay 1.5 giây
        }
        
    const imagesData = [
        {
            url: 'https://www.dienmayxanh.com/kinh-nghiem-hay/top-nhung-dia-diem-check-in-noi-tieng-khi-di-du-li-1353005',
            img: 'Images/anh1.jpg',
            alt: 'Địa điểm check in Trà Vinh'
        },
        {
            url: 'https://www.bachhoaxanh.com/kinh-nghiem-hay/lang-thang-8-dia-diem-du-lich-tra-vinh-dep-noi-tieng-ban-nhat-dinh-phai-di-1365402',
            img: 'Images/anh2.jpg',
            alt: 'Địa điểm du lịch Trà Vinh'
        },
        {
            url: 'https://xanhwedding.com/goi-y-5-diem-chup-anh-cuoi-tra-vinh-dep-xuat-than/',
            img: 'Images/anh3.jpg',
            alt: 'Địa điểm chụp ảnh cưới Trà Vinh'
        },
        {
            url: 'https://www.baotravinh.vn/anh-dep-tra-vinh-9020/tag.html',
            img: 'Images/anh4.jpg',
            alt: 'Ảnh đẹp Trà Vinh'
        }
    ];

    const imagesPerPage = 2;
    let currentPage = 1;

    function displayImages() {
        const container = document.getElementById('imageContainer');
        container.innerHTML = '';

        const startIndex = (currentPage - 1) * imagesPerPage;
        const endIndex = startIndex + imagesPerPage;
        const currentImages = imagesData.slice(startIndex, endIndex);

        currentImages.forEach(image => {
            const link = document.createElement('a');
            link.href = image.url;
            
            const img = document.createElement('img');
            img.src = image.img;
            img.alt = image.alt;
            img.className = 'resize-image';

            link.appendChild(img);
            container.appendChild(link);
        });

        // Update pagination buttons state
        const prevButton = document.querySelector('.pagination .page-item:first-child');
        const nextButton = document.querySelector('.pagination .page-item:last-child');
        
        prevButton.classList.toggle('disabled', currentPage === 1);
        nextButton.classList.toggle('disabled', currentPage >= Math.ceil(imagesData.length / imagesPerPage));
    }

    function changePage(delta) {
        const maxPage = Math.ceil(imagesData.length / imagesPerPage);
        const newPage = currentPage + delta;

        if (newPage >= 1 && newPage <= maxPage) {
            currentPage = newPage;
            displayImages();
        }
    }

    // Initial display
    document.addEventListener('DOMContentLoaded', displayImages);

    </script>
</body>

</html>