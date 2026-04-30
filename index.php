<?php
// 1
$filename1 = 'test.txt';
$file1 = fopen($filename1, 'w');
if ($file1) {
    fwrite($file1, 'Привет, мир');
    fclose($file1);
    echo "Файл '$filename1' создан и записан.<br>";
} else {
    echo "Ошибка создания файла '$filename1'.<br>";
}

// 2
if (file_exists($filename1)) {
    $file1_read = fopen($filename1, 'r');
    if ($file1_read) {
        $content = fgets($file1_read);
        fclose($file1_read);
        echo "Содержимое '$filename1': " . $content . "<br>";
    }
} else {
    echo "Файл '$filename1' не найден для чтения.<br>";
}

// 3
$oldname = 'test.txt';
$newname = 'mir.txt';
if (file_exists($oldname)) {
    if (rename($oldname, $newname)) {
        echo "Файл '$oldname' переименован в '$newname'.<br>";
    } else {
        echo "Ошибка переименования файла.<br>";
    }
} else {
    echo "Файл '$oldname' не существует для переименования.<br>";
}

// 4
$dir = 'folder';
if (!file_exists($dir)) {
    if (mkdir($dir)) {
        echo "Папка '$dir' создана.<br>";
    } else {
        echo "Ошибка создания папки '$dir'.<br>";
    }
}

$file_to_move = 'mir.txt';
$destination = $dir . '/' . $file_to_move;
if (file_exists($file_to_move)) {
    if (rename($file_to_move, $destination)) {
        echo "Файл '$file_to_move' перемещен в '$destination'.<br>";
    } else {
        echo "Ошибка перемещения файла.<br>";
    }
} else {
    echo "Файл '$file_to_move' не найден для перемещения.<br>";
}

// 5
$source = $dir . '/mir.txt';
$copy_name = $dir . '/world.txt';
if (file_exists($source)) {
    if (copy($source, $copy_name)) {
        echo "Файл '$source' скопирован в '$copy_name'.<br>";
    } else {
        echo "Ошибка копирования файла.<br>";
    }
} else {
    echo "Исходный файл '$source' не найден для копирования.<br>";
}

// 6
$world_file = $dir . '/world.txt';
if (file_exists($world_file)) {
    $size_bytes = filesize($world_file);
    $size_mb = $size_bytes / (1024 * 1024);
    $size_gb = $size_bytes / (1024 * 1024 * 1024);
    
    echo "Размер файла 'world.txt':<br>";
    echo "В байтах: $size_bytes<br>";
    echo "В мегабайтах: " . number_format($size_mb, 6) . " MB<br>";
    echo "В гигабайтах: " . number_format($size_gb, 9) . " GB<br>";
} else {
    echo "Файл '$world_file' не найден для определения размера.<br>";
}

// 7
if (file_exists($world_file)) {
    if (unlink($world_file)) {
        echo "Файл '$world_file' успешно удален.<br>";
    } else {
        echo "Ошибка удаления файла '$world_file'.<br>";
    }
} else {
    echo "Файл '$world_file' не существует для удаления.<br>";
}

// 8
$check_world = $dir . '/world.txt';
$check_mir = $dir . '/mir.txt';

echo "Проверка существования файлов:<br>";
echo "'$check_world' существует? - " . (file_exists($check_world) ? 'Да' : 'Нет') . "<br>";
echo "'$check_mir' существует? - " . (file_exists($check_mir) ? 'Да' : 'Нет') . "<br>";
