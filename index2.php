<?php
// 1
$dir_test = 'test';
if (!file_exists($dir_test)) {
    if (mkdir($dir_test)) {
        echo "Папка '$dir_test' создана.<br>";
    } else {
        echo "Ошибка создания папки '$dir_test'.<br>";
    }
} else {
    echo "Папка '$dir_test' уже существует.<br>";
}

// 2
$dir_old = 'test';
$dir_new = 'www';
if (file_exists($dir_old) && !file_exists($dir_new)) {
    if (rename($dir_old, $dir_new)) {
        echo "Папка '$dir_old' переименована в '$dir_new'.<br>";
    } else {
        echo "Ошибка переименования папки.<br>";
    }
} elseif (file_exists($dir_new)) {
    echo "Папка '$dir_new' уже существует. Переименование невозможно.<br>";
} else {
    echo "Папка '$dir_old' не найдена для переименования.<br>";
}

// 3
$dir_to_delete = 'www';
if (file_exists($dir_to_delete)) {
    $files_in_dir = scandir($dir_to_delete);
    foreach ($files_in_dir as $item) {
        if ($item != '.' && $item != '..') {
            $path = $dir_to_delete . '/' . $item;
            if (is_file($path)) {
                unlink($path);
            } elseif (is_dir($path)) {
                rmdir($path);
            }
        }
    }
    if (rmdir($dir_to_delete)) {
        echo "Папка '$dir_to_delete' успешно удалена.<br>";
    } else {
        echo "Ошибка удаления папки '$dir_to_delete'.<br>";
    }
} else {
    echo "Папка '$dir_to_delete' не существует.<br>";
}

// 4
$folders_to_create = ['images', 'css', 'js', 'uploads'];
$parent_dir = 'test';
if (!file_exists($parent_dir)) {
    mkdir($parent_dir);
    echo "Создана родительская папка '$parent_dir'.<br>";
}

foreach ($folders_to_create as $folder) {
    $path = $parent_dir . '/' . $folder;
    if (!file_exists($path)) {
        if (mkdir($path)) {
            echo "Создана вложенная папка: '$path'.<br>";
        } else {
            echo "Ошибка создания папки '$path'.<br>";
        }
    } else {
        echo "Папка '$path' уже существует.<br>";
    }
}

// 5
echo "<br><strong>Файлы с расширением .jpg в текущей папке:</strong><br>";
$jpg_files = glob("*.jpg");
if (count($jpg_files) > 0) {
    foreach ($jpg_files as $jpg) {
        echo "Найден файл: $jpg<br>";
    }
} else {
    echo "Файлы .jpg не найдены в текущей папке.<br>";
}
