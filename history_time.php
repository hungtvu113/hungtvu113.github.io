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

            <nav id="toc" class="toc">
                <ul>
                    <li>
                        <a href="#introduction"><i class="fas fa-info-circle"></i> Giới thiệu</a>
                        <ul>
                            <li><a href="#phase1"><i class="fas fa-history"></i> Giai đoạn 1: 1732 - 1900</a></li>
                            <li><a href="#phase2"><i class="fas fa-history"></i> Giai đoạn 2: 1900 - 1992</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#modern-era"><i class="fas fa-city"></i> Thời kỳ hiện đại</a>
                        <ul>
                            <li><a href="#resistance"><i class="fas fa-fist-raised"></i> Kháng chiến chống Pháp và
                                    Mỹ</a></li>
                            <li><a href="#post-war"><i class="fas fa-dove"></i> Sau chiến tranh</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <h1 id="introduction">Sự hình thành và phát triển của tỉnh Trà Vinh có thể được chia thành 2 giai đoạn sau:
            </h1>
            <p><i>(Nguồn toàn bộ: vietnam.vn)</i></p>
            <h2 id="phase1">Giai đoạn 1: từ năm 1732 đến năm 1900.</h2>
            <p>
                Vùng đất và tên gọi "Trà Vang", tiền thân của tỉnh Trà Vinh sau này đã có từ trước khi Chúa Nguyễn lập
                Châu Định Viễn, dựng Dinh Long Hồ vào năm 1732. Như vậy, lúc bấy giờ đất Trà Vinh thuộc Châu Định Viễn.
            </p>
            <p>
                Năm 1802, sau khi lên ngôi, Vua Gia Long bắt tay ngay vào việc sắp xếp và phân định lại ranh giới các
                đơn vị hành chính trên toàn quốc. Từ đó, Gia Định phủ được đổi thành Gia Định Trấn. Lãnh thổ Gia Định
                Trấn được phân chia thành 4 dinh và 1 trấn phụ, vùng đất Trà Vinh lúc này thuộc Dinh Vĩnh Trấn.
            </p>
            <p>
                Năm 1803, Vua Gia Long cho lập địa đồ các dinh thuộc Gia Định Trấn và đổi Dinh Vĩnh Trấn thành Dinh
                Hoằng Trấn. Vùng đất Trà Vinh lúc này thuộc Dinh Hoằng Trấn.
            </p>
            <p>
                Năm 1808, Gia Long đổi Gia Định Trấn thành Gia Định Thành, Dinh Vĩnh Trấn được đổi thành Trấn Vĩnh
                Thanh. Lúc bấy giờ, vùng đất Trà Vinh thuộc Trấn Vĩnh Thanh.
            </p>
            <p>
                Năm 1825, Vua Minh Mạng lập thành Phủ Lạc Hóa trực thuộc Gia Định Thành gồm hai huyện Trà Vinh và Tuân
                Mỹ.
            </p>
            <p>
                Đến năm 1832, Trấn Vĩnh Thanh được đổi tên là Trấn Vĩnh Long. Sau đó, Vua Minh Mạng cho đổi các trấn
                thành tỉnh. Vùng đất Nam Bộ được chia thành sáu tỉnh, gọi là "Nam Kỳ lục tỉnh" gồm: Biên Hòa, Gia Định,
                Định Tường, Vĩnh Long, An Giang, Hà Tiên. Lúc này, Trà Vinh là một huyện thuộc Phủ Lạc Hóa tỉnh Vĩnh
                Long.
            </p>
            <p>
                Năm 1876, Thống đốc Nam Kỳ ra nghị định phân chia toàn bộ Nam Kỳ thành 4 khu vực hành chính lớn. Trên cơ
                sở phân chia đó, khu vực hành chính lớn Vĩnh Long gồm 4 tiểu khu: Vĩnh Long, Trà Vinh, Bến Tre, Sa Đéc.
                Tiểu khu Trà Vinh là tiền thân của tỉnh Trà Vinh sau này.
            </p>
            <p>
                Ngày 20/12/1899, Toàn quyền Đông Dương Doumer ký nghị định đổi tên gọi tiểu khu thành tỉnh. Từ đây Nam
                Kỳ lục tỉnh cũ được phân chia lại thành 10 tỉnh mới, tỉnh Vĩnh Long cũ được tách ra thành 3 tỉnh mới:
                Vĩnh Long, Bến Tre, Trà Vinh. Nghị định này được chính thức thi hành từ ngày 1/1/1900. từ đây, tên tỉnh
                Trà Vinh được sử dụng chính thức trên các văn bản tiếng Pháp là Province de Trà Vinh.<i>vietnam.vn</i>
            </p>

            <h2 id="phase2">Giai đoạn 2: từ năm 1900 đến năm 1992.</h2>
            <p>
                Từ 1/1/1900, tên gọi tỉnh Trà Vinh được sử dụng chính thức cho đến tháng 5/1951, thực hiện sự chỉ đạo
                của Trung ương Cục , Ủy ban kháng chiến hành chính Nam Bộ đã ban hành Nghị định số 174/NB-51 ngày
                27/6/1951 về việc sáp nhập 20 tỉnh Nam Bộ thành 11 tỉnh. Theo đó, tỉnh Vĩnh Long và tỉnh Trà Vinh được
                sáp nhập lại thành 1 tỉnh Vĩnh Trà.
            </p>
            <p>
                Từ năm 1954 đến năm 1960, Mỹ – Diệm đã tiến hành phân chia lại địa giới hành chính các tỉnh miền Nam.
                Trên địa bàn tỉnh Trà Vinh, hai huyện Cầu Kè và Tiểu Cần được tách ra, ghép với hai huyện Trà Ôn và Tam
                Bình của Vĩnh Long để thành lập một tỉnh mới là tỉnh Tam Cần (theo Sắc lệnh số 16-NV ngày 9/2/1956) và
                tách một phần đất của huyện Cầu Ngang để thành lập một quận mới là quận Long Toàn (theo Sắc lệnh số
                143-NV ngày 22/10/1956). Đầu năm 1957, Ngô Đình Diệm đổi tên tỉnh Trà Vinh thành tỉnh Vĩnh Bình. Tỉnh
                Tam Cần thành lập được gần một năm thì giải thể, ba quận của tỉnh Tam Cần và quận Vũng Liêm (của tỉnh
                Vĩnh Long) được sáp nhập vào tỉnh Vĩnh Bình (theo Nghị định số 3-ND/HC/ND ngày 3/1/1957).
            </p>
            <p>
                Thực hiện Nghị quyết số 245-NQ/TW ngày 20/9/1975 của Bộ Chính trị về việc bỏ khu hợp tỉnh và Nghị quyết
                số 19/NQ ngày 20/12/1975 của Bộ Chính trị về việc điều chỉnh hợp nhất một số tỉnh ở miền Nam Việt Nam;
                tháng 2/1976, Chính phủ Cách mạng lâm thời Cộng hòa miền Nam Việt Nam đã ban hành nghị định về việc giải
                thể khu, hợp nhất tỉnh ở miền Nam Việt Nam. Theo nghị định này ở miền Nam có 21 đơn vị hành chính trực
                thuộc Trung ương, tỉnh Vĩnh Long và tỉnh Trà Vinh được sáp nhập thành tỉnh Cửu Long.
            </p>
            <p>
                Kỳ họp thứ 10, Quốc hội khóa VIII đã ra quyết định tách tỉnh Cửu Long thành 2 tỉnh Vĩnh Long và Trà
                Vinh. Ngày 5/5/1992 tỉnh Trà Vinh chính thức đi vào hoạt động và phát triển cho đến ngày nay.
            </p>

            <h2 id="modern-era">Thời kỳ hiện đại</h2>
            <p>
                Hiện nay, tỉnh Trà Vinh là một trong 13 tỉnh thành ở khu vực Đồng bằng sông Cửu Long, nằm về phía hạ lưu
                giữa sông Tiền và sông Hậu, giáp với biển Đông. Nhìn một cách tổng thể, Trà Vinh có dạng như một hình tứ
                giác với diện tích đất tự nhiên là 2.288.09 km2 với dân số là 1.012.648 người (số liệu của Cục Thống kê
                tỉnh Trà Vinh năm 2011).
            </p>
            <p>
                Địa giới hành chính của tỉnh Trà Vinh được phân chia thành 8 đơn vị bao gồm: thành phố Trà Vinh và 7
                huyện (Càng Long, Cầu Kè, Tiểu Cần, Trà Cú, Cầu Ngang, Duyên Hải, Châu Thành). Tỉnh Trà Vinh là địa bàn
                cộng cư của 3 dân tộc chính là Kinh, Khmer, Hoa và một số ít các dân tộc khác. Trong đó, người Kinh có
                tỷ lệ cao nhất trong cơ cấu dân số của tỉnh với 684.119 người chiếm 67,5% dân số của tỉnh. Ngoài ra,
                tỉnh Trà Vinh còn là nơi có đồng bào Khmer sinh sống đông thứ 2 ở Đồng bằng sông Cửu Long cũng như cả
                nước sau tỉnh Sóc Trăng. Đồng bào Khmer ở Trà Vinh có 320.292 người (chiếm 31,63%). Bên cạnh đó còn có
                người Hoa và một số đồng bào khác như Chăm, Dao…có tổng số là 8.237 người chiếm 0,81% dân số của tỉnh.
            </p>
            <p>
                Chúng ta biết rằng từ xa xưa, trên đất Trà Vinh đã hình thành nên truyền thống đoàn kết gắn bó keo sơn.
                Đó là thành quả của quá trình cộng cư ngày một đông đảo, phát triển sự gần gũi và đoàn kết của quan hệ
                dân tộc Việt, Khmer, Hoa trong việc khai hoang mở đất. Nhưng đồng thời với việc mở mang ruộng đất đó là
                sự hình thành và lớn dần của mâu thuẫn giai cấp, cùng với những biến động trong xã hội Việt Nam dưới
                triều Nguyễn vào những năm 40 – 50 của thế kỷ XIX. Đó là thời kỳ tình hình xã hội rất phức tạp và nhiều
                cuộc nổi dậy liên tiếp của nông dân đều bị quân triều đình dập tắt, thúc đẩy những mâu thuẫn xã hội ngày
                càng gay gắt.
            </p>
            <p>
                Tuy vậy, từ cuối thập kỷ thứ năm của thế kỷ XIX, trước tai họa ngoại xâm và nguy cơ mất nước, đồng bào
                các dân tộc Trà Vinh đã tạm gác những mâu thuẫn với chính quyền phong kiến để tập trung chống Pháp. Từ
                đây, lịch sử Trà Vinh bước sang trang mới, mở đầu thời kỳ chống thực dân Pháp xâm lược.
            </p>

            <h2 id="resistance">Kháng chiến chống Pháp và Mỹ</h2>
            <p>
                Ngay khi thực dân Pháp đặt chân xâm lược lên vùng đất Trà Vinh này, thì ngay lập tức chúng đã vấp phải
                sự kháng cự quyết liệt của nhân dân Trà Vinh dưới ngọn cờ của Trương Định, Thủ khoa Huân, Võ Duy Dương,
                Đề Triệu,… Mặc dù các cuộc khởi nghĩa ấy đều thất bại và tổn thất nhiều về người và của, song cũng như
                cả nước, nhiều người con của Trà Vinh bất khuất vẫn không sợ hy sinh, không nản chí, mà nhẫn nại tìm tòi
                phương cách hoạt động khác để chống xâm lăng. Các hoạt động yêu nước chống thực dân Pháp xâm lược và bọn
                tay sai ở Trà Vinh trong 3 thập niên đầu thế kỷ XX diễn ra theo hai hướng:
            </p>
            <p>
                + Một hướng là các phong trào mang tính chất nông dân và tiểu tư sản, tiêu biểu như cuộc ám sát hai tên
                thực dân Pháp do thầy Thông Chánh thực hiện; phong trào Duy Tân; phong trào Đông Du, phong trào Đông
                kinh nghĩa thục, phong trào Thiên địa hội…
            </p>
            <p>
                + Hướng còn lại là các phong trào mang tính chất cộng sản, ảnh hưởng vào Trà Vinh từ trước năm 1920 với
                thắng lợi của Cách mạng Tháng Mười Nga. Trong thời gian này, tại Bình Đông (thuộc quận Tám thành phố Hồ
                Chí Minh ngày nay), Tôn Đức Thắng cùng 17 đồng chí, trong đó có một người con của Trà Vinh là Dương
                Quang Đông đã thành lập ra tổ chức Công Hội Đỏ.
            </p>
            <p>
                Với tình yêu quê hương đất nước và tài năng sáng tạo cách mạng của tuổi trẻ, Dương Quang Đông về Trà
                Vinh xúc tiến việc thành lập tổ chức "Thanh niên đỏ". Tổ chức này lần lượt ra đời tại Cầu Ngang, tỉnh lỵ
                Trà Vinh và Càng Long, đây cũng chính là những chiếc nôi hình thành các Chi bộ Đảng Cộng sản Việt Nam
                đầu tiên của tỉnh Trà Vinh vào năm 1930. Mùa xuân năm 1930, Tỉnh ủy Trà Vinh ra đời, và đến năm 1945,
                dưới sự chỉ đạo trực tiếp của Tỉnh ủy và các Huyện ủy, nhân dân Trà Vinh đã vùng lên tiến hành cuộc Tổng
                khởi nghĩa giành thắng lợi vào ngày 25/8/1945.
            </p>
            <p>
                Dưới sự lãnh đạo của Đảng bộ tỉnh và chính quyền cách mạng, nhân dân Trà Vinh đã làm nên những chiến
                công vang dội như trận La Bang (16/12/1948); chiến dịch Cầu Kè (1949); chiến dịch Trà Vinh (1950)…góp
                phần cùng cả nước làm nên chiến thắng Điện Biên Phủ chấn động địa cầu, buộc Pháp phải ký Hiệp định
                Geneve, rút quân về nước.
            </p>
            <p>
                Hoàn thành xong nhiệm vụ đánh Pháp, quân dân Trà Vinh lại tiếp tục cùng cả nước thực hiện nhiệm vụ đuổi
                Mỹ ra khỏi bờ cõi của Tổ quốc. Trong kháng chiến chống Mỹ, đồng bào các dân tộc ở Trà Vinh đã vượt qua
                muôn vàn thử thách, một lòng theo Đảng, góp phần cùng nhân dân miền Nam đánh bại hoàn toàn các chiến
                lược chiến tranh do Mỹ đề ra (chiến tranh đơn phương; chiến tranh đặc biệt; chiến tranh cục bộ, Việt Nam
                hóa chiến tranh), làm nên những chiến công vang dội như Đồng Khởi (1960); Tổng tiến công và nổi dậy Xuân
                1968 (với chiến thắng đó, quân dân Trà Vinh được Đảng và Nhà nước khen tặng Huân chương Thành đồng hạng
                nhất và lá cờ vẻ vang với tám chữ vàng: "toàn dân nổi dậy, đoàn kết lập công”.)…
            </p>
            <p>
                Sau khi Hiệp định Pari được ký kết (27/1/1973), Mỹ rút quân về nước, nhân dân Trà Vinh cùng nhân dân cả
                nước dưới sự lãnh đạo của Đảng tiếp tục đánh đổ chính quyền Ngụy giành độc lập dân tộc thống nhất nước
                nhà. Với cuộc Tổng tiến công và nổi dậy mùa Xuân năm 1975 mà đỉnh cao là Chiến dịch Hồ Chí Minh lịch sử,
                ngày 30 tháng 4 năm 1975 miền Nam đã hoàn toàn giải phóng. Ngày 30 tháng 4 đã đi vào lòng mỗi người dân
                Việt Nam nói chung và nhân dân Trà Vinh nói riêng như một mốc son chói lọi về một ngày toàn thắng thống
                nhất Tổ quốc, cùng cả nước đi lên chủ nghĩa xã hội.
            </p>

            <h2 id="post-war">Sau chiến tranh</h2>
            <p>
                Sau ngày hòa bình thống nhất, Trà Vinh cùng cả nước tiến lên xây dựng chủ nghĩa xã hội, thực hiện công
                cuộc đổi mới do Đảng khởi xướng. Thi hành Quyết định của Quốc hội khóa VIII, tháng 5/1992 tỉnh Trà Vinh
                được tái lập cùng với 12 tỉnh thành trong khu vực Đồng bằng sông Cửu Long tiến lên xây dựng và phát
                triển kinh tế. Cộng đồng các dân tộc ở Trà Vinh luôn phát huy truyền thống đoàn kết dân tộc, truyền
                thống anh hùng trong kháng chiến ngày đêm ra sức lao động xây dựng cuộc sống mới, xây dựng quê hương đất
                nước theo mục tiêu dân giàu, nước mạnh, dân chủ, công bằng, văn minh.
            </p>
            <p>
                Trong hai cuộc kháng chiến chống Pháp và Mỹ, Trà Vinh có 18.374 liệt sĩ; 987 bà mẹ Việt Nam anh hùng
                cùng 61 đơn vị, địa phương được Nhà nước tuyên dương danh hiệu Anh hùng lực lượng vũ trang.
            </p>
            <p>
                Là một tỉnh nghèo với kinh tế chủ yếu là nông nghiệp, có xuất phát điểm thấp nhưng Đảng bộ và quân dân
                Trà Vinh đã không ngừng nỗ lực đưa tỉnh nhà phát triển bền vững trên các lĩnh vực kinh tế, văn hóa, xã
                hội, an ninh quốc phòng…. Ngày xưa, trong chiến đấu nhân dân Trà Vinh đã không tiếc máu xương của mình,
                anh dũng ngã xuống để đổi lấy hòa bình cho đất nước với những tấm gương tiêu biểu như Nguyễn Thị Út (Út
                Tịch), Kiên Thị Nhẫn, Hồ Thị Nhâm, đồng chí Phạm Thái Bường, Hồ Đức Thắng… Còn ngày hôm nay, trong lao
                động sản xuất, Trà Vinh lại có những con người cần cù, sáng tạo, năng động, hăng say và hết mình trong
                công việc. Vượt qua thử thách đói nghèo, họ đã cống hiến sức mình cho sự nghiệp xây dựng và bảo vệ thành
                quả mà ông cha ta đã giành được. Tiêu biểu như cặp vợ chồng thương binh “hai nửa của một danh hiệu anh
                hùng” Lê Văn Lục và Cam Thị Cúc; hay “vua măng cụt” Lưu Văn Nhiều; nhà “sáng chế chân đất” Trần Văn
                Dũng; “vua lúa giống” Dương Văn Châu….
            </p>
            <p>
                Trong chiến tranh, nhân dân Trà Vinh cùng nhân dân cả nước đã chiến thắng những kẻ thù xâm lược hùng
                mạnh. Trong hòa bình, nhân dân Trà Vinh lại một lần nữa sẽ chiến thắng, đó là chiến thắng nghèo nàn, lạc
                hậu. Đồng bào các dân tộc ở Trà Vinh đã phát huy truyền thống đoàn kết, cần cù, sáng tạo để vùng đất mà
                họ khai phá từ những thế kỷ trước dần ‘thay da đổi thịt”, vững vàng cùng cả nước tiến lên xây dựng chủ
                nghĩa xã hội, con đường mà Đảng ta đã sáng suốt lựa chọn.
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

        // New JavaScript for sticky table of contents
        window.onscroll = function () { stickyTOC() };

        var toc = document.getElementById("toc");
        var sticky = toc.offsetTop;

        function stickyTOC() {
            if (window.pageYOffset >= sticky) {
                toc.classList.add("sticky")
            } else {
                toc.classList.remove("sticky");
            }
        }
    </script>
</body>

</html>