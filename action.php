<!DOCTYPE html>
<html>
<head>
    <title>Обработка формы</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $username = htmlspecialchars($_POST['username'] ?? '');
        $gender = $_POST['gender'] ?? 'не указан';

        if (empty($email) || empty($password)) {
            echo "<p style='color: red;'>Ошибка: Поля Email и Пароль обязательны для заполнения!</p>";
            echo "<a href='index.php'>Вернуться к форме регистрации</a>";
        } else {
            echo "<h2>Регистрация прошла успешно!</h2>";
            echo "<p>Здравствуйте, " . $username . ".</p>";
            echo "<p>Ваш email: " . htmlspecialchars($email) . "</p>";
            echo "<p>Ваш пол: " . $gender . "</p>";
        }
    } else {
        echo "<p>Доступ запрещен. Пожалуйста, используйте форму для отправки данных.</p>";
    }
    ?>
</body>
</html>