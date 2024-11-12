<?php 
include_once "connect.php";




$stmt = $pdo->query("SELECT id, title, date FROM news12 LIMIT 3");


if ($stmt->rowCount() > 0) {

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        echo "<br>"."<h2>" . htmlspecialchars($row['title']) . "</h2>"."<br>";
        echo "<br>"."<small>Дата публикации: " . $row['date'] . "</small>"."<br>";
    }
} else {

    echo "Новостей нет.";
}
?>