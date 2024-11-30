<?php
require_once 'connecting.php';
session_start();

// Kiểm tra đăng nhập trước khi vào trang
if (!isset($_SESSION['id_acc'])) {
    $_SESSION['redirect_url'] = $_SERVER['PHP_SELF'];
    header("Location: login.php");
    exit();
}

// Thay thế phần truy vấn SQL bằng mảng câu hỏi cứng
$questions = array(
    array(
        'id' => 1,
        'question' => 'Tên gọi ban đầu của tỉnh Trà Vinh là gì?',
        'options' => array(
            'A' => 'Trà Cú',
            'B' => 'Vĩnh Bình',
            'C' => 'Trà Vang',
            'D' => 'Cửu Long'
        ),
        'correct_answer' => 'C'
    ),
    array(
        'id' => 2,
        'question' => 'Tỉnh Trà Vinh được thành lập chính thức vào năm nào?',
        'options' => array(
            'A' => '1832',
            'B' => '1899',
            'C' => '1900',
            'D' => '1976'
        ),
        'correct_answer' => 'C'
    ),
    array(
        'id' => 3,
        'question' => 'Quận nào đã bị bãi bỏ vào tháng 8 năm 1928 ở tỉnh Trà Vinh?',
        'options' => array(
            'A' => 'Bắc Trang',
            'B' => 'Ô Lắc',
            'C' => 'Càn Long',
            'D' => 'Bàng Đa'
        ),
        'correct_answer' => 'A'
    ),
    array(
        'id' => 4,
        'question' => 'Tỉnh nào được sáp nhập với Trà Vinh để thành lập tỉnh Vĩnh Trà vào năm 1951?',
        'options' => array(
            'A' => 'Vĩnh Long',
            'B' => 'Bến Tre',
            'C' => 'Sóc Trăng',
            'D' => 'Cần Thơ'
        ),
        'correct_answer' => 'A'
    ),
    array(
        'id' => 5,
        'question' => 'Tên của tỉnh Trà Vinh được đổi thành gì bởi chính quyền Việt Nam Cộng Hòa vào năm 1956?',
        'options' => array(
            'A' => 'Tam Cần',
            'B' => 'Vĩnh Bình',
            'C' => 'Phú Vinh',
            'D' => 'Long Toàn'
        ),
        'correct_answer' => 'B'
    ),
    array(
        'id' => 6,
        'question' => 'Hai quận nào đã được tách khỏi tỉnh Vĩnh Bình (Trà Vinh) để sáp nhập vào tỉnh Vĩnh Long vào năm 1967?',
        'options' => array(
            'A' => 'Cầu Kè và Tiểu Cần',
            'B' => 'Vũng Liêm và Trà Ôn',
            'C' => 'Càng Long và Châu Thành',
            'D' => 'Cầu Ngang và Long Toàn'
        ),
        'correct_answer' => 'B'
    ),
    array(
        'id' => 7,
        'question' => 'Tỉnh Trà Vinh được tái lập vào năm nào sau khi giải thể tỉnh Cửu Long?',
        'options' => array(
            'A' => '1976',
            'B' => '1986',
            'C' => '1992',
            'D' => '2010'
        ),
        'correct_answer' => 'C'
    ),
    array(
        'id' => 8,
        'question' => 'Thị xã Trà Vinh được nâng cấp lên thành phố Trà Vinh vào năm nào?',
        'options' => array(
            'A' => '1992',
            'B' => '2000',
            'C' => '2010',
            'D' => '2016'
        ),
        'correct_answer' => 'C'
    ),
    array(
        'id' => 9,
        'question' => 'Tỉnh Trà Vinh kết nghĩa với tỉnh nào ở miền Bắc Việt Nam?',
        'options' => array(
            'A' => 'Nam Định',
            'B' => 'Hà Nam',
            'C' => 'Thái Bình',
            'D' => 'Ninh Bình'
        ),
        'correct_answer' => 'C'
    ),
    array(
        'id' => 10,
        'question' => 'Theo thống kê năm 2022, dân tộc nào chiếm tỷ lệ cao nhất ở Trà Vinh?',
        'options' => array(
            'A' => 'Khmer',
            'B' => 'Hoa',
            'C' => 'Kinh',
            'D' => 'Chăm'
        ),
        'correct_answer' => 'C'
    ),
    array(
        'id' => 11,
        'question' => 'Trước khi trở thành một tỉnh, Trà Vinh là một đơn vị hành chính nào trong vùng hành chính lớn hơn của Vĩnh Long?',
        'options' => array(
            'A' => 'Làng',
            'B' => 'Thôn',
            'C' => 'Huyện',
            'D' => 'Xã'
        ),
        'correct_answer' => 'C'
    ),
    array(
        'id' => 12,
        'question' => 'Câu nào sau đây mô tả tốt nhất vị trí địa lý của Trà Vinh?',
        'options' => array(
            'A' => 'Địa hình đồi núi ở miền Bắc Việt Nam',
            'B' => 'Tỉnh ven biển ở vùng Đồng bằng sông Cửu Long',
            'C' => 'Khu vực rừng rậm giáp biên giới Campuchia',
            'D' => 'Tỉnh đảo ở Biển Đông'
        ),
        'correct_answer' => 'B'
    ),
    array(
        'id' => 13,
        'question' => 'Sự kiện quan trọng nào trong cơ cấu hành chính của Nam Bộ diễn ra vào năm 1876?',
        'options' => array(
            'A' => 'Chính quyền thực dân Pháp chia Nam Bộ thành bốn vùng hành chính lớn',
            'B' => 'Nhà Nguyễn tổ chức lại các tỉnh thành thành các đơn vị nhỏ hơn',
            'C' => 'Vùng Đồng bằng sông Cửu Long được công nhận là thực thể hành chính riêng biệt',
            'D' => 'Trà Vinh được sáp nhập với Vĩnh Long'
        ),
        'correct_answer' => 'A'
    ),
    array(
        'id' => 14,
        'question' => 'Trà Vinh chuyển từ tiểu khu (phân khu) sang chính thức trở thành một tỉnh khi nào?',
        'options' => array(
            'A' => '1832',
            'B' => '1876',
            'C' => '1899',
            'D' => '1900'
        ),
        'correct_answer' => 'D'
    ),
    array(
        'id' => 15,
        'question' => 'Tỉnh Trà Vinh gồm bao nhiêu huyện vào năm 1917?',
        'options' => array(
            'A' => '3',
            'B' => '4',
            'C' => '5',
            'D' => '7'
        ),
        'correct_answer' => 'C'
    ),
    array(
        'id' => 16,
        'question' => 'Năm 1928, huyện Ô Lắc được đổi tên thành huyện gì?',
        'options' => array(
            'A' => 'Càn Long',
            'B' => 'Cầu Ngang',
            'C' => 'Tiểu Cần',
            'D' => 'Bắc Trang'
        ),
        'correct_answer' => 'C'
    ),
    array(
        'id' => 17,
        'question' => 'Trong các huyện sau, huyện nào được thành lập tại tỉnh Trà Vinh vào năm 1928?',
        'options' => array(
            'A' => 'Bàng Đa',
            'B' => 'Ô Lắc',
            'C' => 'Tiểu Cần',
            'D' => 'Cầu Ngang'
        ),
        'correct_answer' => 'D'
    ),
    array(
        'id' => 18,
        'question' => 'Tỉnh Cửu Long, được thành lập vào năm 1976, bao gồm hai tỉnh cũ nào?',
        'options' => array(
            'A' => 'Bến Tre và Vĩnh Long',
            'B' => 'Trà Vinh và Vĩnh Long',
            'C' => 'Sóc Trăng và Trà Vinh',
            'D' => 'Cần Thơ và Vĩnh Long'
        ),
        'correct_answer' => 'B'
    ),
    array(
        'id' => 19,
        'question' => 'Điều gì thúc đẩy việc sáp nhập hai tỉnh Vĩnh Long và Trà Vinh thành tỉnh Vĩnh Trà vào năm 1951?',
        'options' => array(
            'A' => 'Các sáng kiến phát triển kinh tế',
            'B' => 'Để củng cố lực lượng trong kháng chiến',
            'C' => 'Những nỗ lực đơn giản hóa hành chính của người Pháp',
            'D' => 'Để quản lý tốt hơn các nguồn tài nguyên thiên nhiên'
        ),
        'correct_answer' => 'B'
    ),
    array(
        'id' => 20,
        'question' => 'Câu nào sau đây về tỉnh Trà Vinh không được nguồn cung cấp hỗ trợ?',
        'options' => array(
            'A' => 'Tỉnh này nổi tiếng với di sản văn hóa đa dạng',
            'B' => 'Dân tộc Khmer chiếm một bộ phận đáng kể trong dân số',
            'C' => 'Tỉnh đã trải qua nhiều lần thay đổi hành chính trong suốt chiều dài lịch sử',
            'D' => 'Trà Vinh là một trung tâm công nghiệp lớn ở Việt Nam'
        ),
        'correct_answer' => 'D'
    )

);

// Lấy ngẫu nhiên 10 câu hỏi từ mảng 20 câu
$randomKeys = array_rand($questions, 10);
$selectedQuestions = array();
foreach($randomKeys as $key) {
    $selectedQuestions[] = $questions[$key];
}
$questions = $selectedQuestions;

// Xáo trộn thứ tự của 10 câu đã chọn
shuffle($questions);

// Xử lý khi form được submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;
    $user_answers = array();
    
    // Lưu câu trả lời của người dùng vào mảng
    foreach($_POST as $question_id => $answer) {
        if (is_numeric($question_id)) {
            $user_answers[$question_id] = $answer;
        }
    }

    // Tính điểm dựa trên câu trả lời
    foreach($questions as $key => $question) {
        if (isset($user_answers[$key]) && $question['correct_answer'] == $user_answers[$key]) {
            $score++;
        }
    }

    // Lưu kết quả vào database với id_acc
    $user_id = $_SESSION['id_acc']; // Sử dụng id_acc thay vì user_id
    $total_questions = count($questions);
    
    $sql = "INSERT INTO quiz_results (user_id, score, total_questions, completion_time) VALUES (?, ?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iii", $user_id, $score, $total_questions);
    $stmt->execute();
}

// Lấy lịch sử làm bài
$history_result = false;
$user_id = $_SESSION['id_acc']; // Sử dụng id_acc
$history_sql = "SELECT * FROM quiz_results WHERE user_id = ? ORDER BY completion_time DESC LIMIT 5";
$stmt = $conn->prepare($history_sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$history_result = $stmt->get_result();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Câu hỏi trắc nghiệm Lịch sử</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .loader-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #B72426;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease;
        }
        
        .loader {
            width: 80px;
            height: 80px;
            border: 8px solid #f3f3f3;
            border-top: 8px solid #FFCC00;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .quiz-container {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        .question {
            display: none;
            background: #f8f9fa;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            border-left: 5px solid #B72426;
            animation: slideIn 0.5s ease-out;
        }

        .question.active {
            display: block;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .options {
            margin: 15px 0;
        }

        .option-item {
            display: flex;
            align-items: center;
            margin: 10px 0;
            padding: 10px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .option-item:hover {
            background: #f0f0f0;
            transform: translateX(5px);
        }

        .timer {
            position: fixed;
            top: 20px;
            right: 20px;
            background: #B72426;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            font-size: 1.2em;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        .progress-bar {
            width: 100%;
            height: 10px;
            background: #f0f0f0;
            border-radius: 5px;
            margin: 20px 0;
            overflow: hidden;
        }

        .progress {
            height: 100%;
            background: #B72426;
            transition: width 0.3s ease;
        }

        .navigation-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .nav-btn {
            background: #B72426;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .nav-btn:hover {
            background: #8c1c1e;
            transform: translateY(-2px);
        }

        .nav-btn:disabled {
            background: #ccc;
            cursor: not-allowed;
        }

        .confetti {
            position: fixed;
            width: 10px;
            height: 10px;
            background: #f00;
            pointer-events: none;
            animation: fall 3s linear forwards;
        }

        @keyframes fall {
            to {
                transform: translateY(100vh);
            }
        }

        .quiz-header {
            text-align: center;
            margin-bottom: 30px;
            color: #B72426;
        }

        .quiz-header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        .quiz-header p {
            color: #666;
            font-size: 1.1em;
        }

        .result {
            text-align: center;
            padding: 20px;
            margin-top: 20px;
            background: #FFCC00;
            border-radius: 8px;
            color: #000;
            font-size: 1.2em;
            font-weight: bold;
        }

        .home-btn {
        display: inline-block;
        padding: 8px 15px;
        background: #FFCC00;
        color: #000;
        text-decoration: none;
        border-radius: 5px;
        margin-right: 10px;
        transition: all 0.3s ease;
    }

    .home-btn:hover {
        background: #e6b800;
        transform: translateY(-2px);
    }

    .welcome-user {
        position: fixed;
        top: 20px;
        left: 20px;
        z-index: 1000;
        background: rgba(255, 255, 255, 0.9);
        padding: 10px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    </style>
</head>
<body>
    <!-- Loader -->
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>

    <!-- Welcome message chỉ hiện khi đã đăng nhập -->
    <?php if(isset($_SESSION['username'])): ?>
        <div class="welcome-user">
    Xin chào, <?php echo htmlspecialchars($_SESSION['username']); ?>!
    <a href="index.php" class="home-btn"><i class="fas fa-home"></i> Trang chủ</a>
    <a href="logout.php" class="logout-btn">Đăng xuất</a>
</div>
    <?php else: ?>
    <div class="login-prompt">
        <a href="login.php" class="login-btn">Đăng nhập để lưu kết quả</a>
    </div>
    <?php endif; ?>

    <!-- Timer -->
    <div id="timer" class="timer">
        <i class="fas fa-clock"></i> 10:00
    </div>

    <div class="quiz-container">
        <div class="quiz-header">
            <h1><i class="fas fa-history"></i> Trắc nghiệm Lịch sử</h1>
            <p>Hãy chọn đáp án đúng cho mỗi câu hỏi dưới đây</p>
        </div>

        <!-- Progress Bar -->
        <div class="progress-bar">
            <div class="progress" style="width: 0%"></div>
        </div>

        <form method="post" id="quiz-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <?php foreach($questions as $key => $question): ?>
                <div class="question <?php echo $key === 0 ? 'active' : ''; ?>" data-question="<?php echo $key; ?>">
                    <h3><i class="fas fa-question-circle"></i> Câu <?php echo ($key + 1); ?>:</h3>
                    <p><?php echo $question['question']; ?></p>
                    <div class="options">
                        <?php foreach($question['options'] as $option_key => $option_value): ?>
                            <label class="option-item">
                                <input type="radio" name="<?php echo $key; ?>" value="<?php echo $option_key; ?>" required>
                                <?php echo $option_key . ". " . $option_value; ?>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
            
            <div class="navigation-buttons">
                <button type="button" class="nav-btn prev-btn" onclick="prevQuestion()" disabled>
                    <i class="fas fa-arrow-left"></i> Câu trước
                </button>
                <button type="button" class="nav-btn next-btn" onclick="nextQuestion()">
                    Câu sau <i class="fas fa-arrow-right"></i>
                </button>
            </div>

            <div style="text-align: center; margin-top: 20px;">
                <button type="submit" class="submit-btn">
                    <i class="fas fa-paper-plane"></i> Nộp bài
                </button>
            </div>
        </form>

        <?php if (isset($score)): ?>
            <div class="result">
                <i class="fas fa-award"></i> Kết quả của bạn: <?php echo $score; ?>/<?php echo count($questions); ?> câu đúng
                <?php if(!isset($_SESSION['user_id'])): ?>
                    <p class="save-prompt">Đăng nhập để lưu kết quả của bạn!</p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <!-- Lịch sử làm bài chỉ hiện khi đã đăng nhập -->
        <?php if (isset($_SESSION['user_id']) && $history_result): ?>
        <div class="history-section">
            <h3><i class="fas fa-history"></i> Lịch sử làm bài</h3>
            <?php if ($history_result->num_rows > 0): ?>
                <?php while($row = $history_result->fetch_assoc()): ?>
                    <div class="history-item">
                        <span>Điểm: <?php echo $row['score']; ?>/<?php echo $row['total_questions']; ?></span>
                        <span>Thời gian: <?php echo date('d/m/Y H:i', strtotime($row['completion_time'])); ?></span>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>Chưa có lịch sử làm bài</p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>

    <script>
        // Timer
        let timeLeft = 600; // 10 minutes
        const timerDisplay = document.getElementById('timer');

        const timer = setInterval(() => {
            const minutes = Math.floor(timeLeft / 60);
            const seconds = timeLeft % 60;
            timerDisplay.innerHTML = `<i class="fas fa-clock"></i> ${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
            
            if (timeLeft <= 0) {
                clearInterval(timer);
                document.getElementById('quiz-form').submit();
            }
            timeLeft--;
        }, 1000);

        // Question Navigation
        let currentQuestion = 0;
        const questions = document.querySelectorAll('.question');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        const progressBar = document.querySelector('.progress');

        function updateQuestion() {
            questions.forEach(q => q.classList.remove('active'));
            questions[currentQuestion].classList.add('active');
            
            // Update progress bar
            const progress = ((currentQuestion + 1) / questions.length) * 100;
            progressBar.style.width = `${progress}%`;
            
            // Update navigation buttons
            prevBtn.disabled = currentQuestion === 0;
            nextBtn.disabled = currentQuestion === questions.length - 1;
        }

        function nextQuestion() {
            if (currentQuestion < questions.length - 1) {
                currentQuestion++;
                updateQuestion();
            }
        }

        function prevQuestion() {
            if (currentQuestion > 0) {
                currentQuestion--;
                updateQuestion();
            }
        }

        // Confetti effect
        function startConfetti() {
            for (let i = 0; i < 150; i++) {
                createConfetti(i);
            }
        }

        function createConfetti(i) {
            const confetti = document.createElement('div');
            confetti.className = 'confetti';
            confetti.style.left = Math.random() * 100 + 'vw';
            confetti.style.animationDelay = Math.random() * 3 + 's';
            confetti.style.backgroundColor = `hsl(${Math.random() * 360}, 100%, 50%)`;
            document.body.appendChild(confetti);
            
            setTimeout(() => confetti.remove(), 3000);
        }

        // Loader
        window.addEventListener('load', function() {
            setTimeout(function() {
                const loader = document.querySelector('.loader-wrapper');
                loader.style.opacity = '0';
                setTimeout(function() {
                    loader.style.display = 'none';
                }, 500);
            }, 1500);
        });

        // Start confetti if score is good
        <?php if (isset($score) && ($score / count($questions)) >= 0.8): ?>
            startConfetti();
        <?php endif; ?>
    </script>
</body>
</html>