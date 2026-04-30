<?php
// 1
echo "1. Timestamp: " . mktime(10, 25, 0, 3, 15, 2025) . "<br>";

// 2
$past = mktime(8, 5, 59, 10, 2, 1990);
echo "2. Разница в секундах: " . (time() - $past) . "<br>";

// 3
echo "3. Текущая дата-время: " . date('Y.m.d H:i:s') . "<br>";

// 4
echo "4. 1 сентября: " . date('Y.m.d', mktime(0, 0, 0, 9, 1, date('Y'))) . "<br>";

// 5
$weekDays = ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота"];
$dayOfWeek = date('w', mktime(0, 0, 0, 2, 2, 2000));
echo "5. 2 февраля 2000 года: " . $weekDays[$dayOfWeek] . "<br>";

// 6
$week = ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота"];
echo "6. Текущий день недели: " . $week[date('w')] . "<br>";
echo "6. 12.06.2016: " . $week[date('w', mktime(0, 0, 0, 6, 12, 2016))] . "<br>";
echo "6. 30.01.2007: " . $week[date('w', mktime(0, 0, 0, 1, 30, 2007))] . "<br>";

// 7
$date1 = '2025-12-31';
$date2 = '2025-03-08';
$timestamp1 = strtotime($date1);
$timestamp2 = strtotime($date2);
$greater = ($timestamp1 > $timestamp2) ? $date1 : $date2;
echo "7. Большая дата из '$date1' и '$date2': $greater<br>";

// 8
$inputDate = '2025-06-15';
echo "8. Преобразованная дата '$inputDate': " . date('d-m-Y', strtotime($inputDate)) . "<br>";

// 9
$date = date_create('2000-02-03');
date_modify($date, '+2 days +1 month +3 days +1 year');
echo "9. Прибавление: " . date_format($date, 'd.m.Y') . "<br>";
$date = date_create('2000-02-03');
date_modify($date, '-3 days');
echo "9. Отнимание 3 дней: " . date_format($date, 'd.m.Y') . "<br>";

// 10
$now = time();
$nextNewYear = mktime(0, 0, 0, 1, 1, date('Y') + 1);
$diffSeconds = $nextNewYear - $now;
echo "10. Дней до Нового Года: " . ceil($diffSeconds / (60 * 60 * 24)) . "<br>";
