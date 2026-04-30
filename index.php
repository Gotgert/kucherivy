<?php
// 1
try {
    $file = fopen("nonexistent_file.txt", "r");
    if (!$file) {
        throw new Exception("Не удалось открыть файл 'nonexistent_file.txt'");
    }
    fclose($file);
} catch (Exception $ex) {
    echo "1. Исключение: " . $ex->getMessage() . "<br>";
}

// 2
try {
    $divisor = 0;
    if ($divisor == 0) {
        throw new Exception("Деление на ноль");
    }
    $result = 10 / $divisor;
} catch (Exception $ex) {
    $logMessage = date('Y-m-d H:i:s') . " - Исключение: " . $ex->getMessage() . "\n";
    file_put_contents("log.txt", $logMessage, FILE_APPEND);
    echo "2. Исключение записано в log.txt: " . $ex->getMessage() . "<br>";
}

// 3
try {
    $countries = ['Spain' => 'Madrid', 'Russia' => 'Moscow'];
    $key = 'Germany';
    if (!array_key_exists($key, $countries)) {
        throw new Exception("Ключ '$key' не существует в массиве");
    }
    echo $countries[$key];
} catch (Exception $ex) {
    echo "3. Исключение: " . $ex->getMessage() . "<br>";
}
