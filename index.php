<!DOCTYPE html>
<html>
<head>
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Форма регистрации</h1>
    <form action="action.php" method="post">
        <label for="username">Имя:</label>
        <input type="text" id="username" name="username" placeholder="Введите имя" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Введите email" required><br>

        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" placeholder="Введите пароль" required><br>

        <label for="password">Подтвердите пароль:</label>
        <input type="password" id="password" name="password" placeholder="Введите пароль" required><br>

        <label for="gender">Пол:</label>
        <select id="gender" name="gender">
            <option value="">-- Выберите пол --</option>
            <option value="male">Мужской</option>
            <option value="female">Женский</option>
        </select><br>

        <input type="submit" value="Отправить">
    </form>
</body>
</html>
