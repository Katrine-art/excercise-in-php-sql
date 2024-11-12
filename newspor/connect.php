<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "newspor"; 

try {
    // Создаем подключение через PDO
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Устанавливаем режим ошибок
} catch (PDOException $e) {
    // Обработка ошибок подключения
    echo "Ошибка подключения к базе данных: " . $e->getMessage();
    exit;
}
?>


