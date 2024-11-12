<html>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости</title>
    <link rel="stylesheet" href="../page/style.css">   
 
</head>
<body>
    <nav>
        <ul id="menuList" style="font-size:18px;">
            <li><a href="../page/index.php">Главная</a></li>
            <li><a href="../newspor/news.php" style="color:#787878;">Новости</a></li>
            <li><a href="../feedback/form.php">Обратная связь</a></li>
        </ul>
        <div class="menu-icon">
            <i class="fa-solid fa-bars" onclick="toggleMenu()"></i>
        </div>
    </nav>

    <script>
        let menuList = document.getElementById("menuList")
        menuList.style.maxHeight = "0px";

        function toggleMenu(){
            if(menuList.style.maxHeight == "0px")
            {
                menuList.style.maxHeight = "300px";
            }
            else{
                menuList.style.maxHeight = "0px";
            }
        }
        
    </script>
    <script src="https://kit.fontawesome.com/f8e1a90484.js" crossorigin="anonymous"></script>

    <div class="newsp">
        <center>
    <h3>Новости</h3>
    </center>
    <?php 
include_once "connect.php";




$stmt = $pdo->query("SELECT id, title, text, date FROM news12");


if ($stmt->rowCount() > 0) {

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        echo "<h2>" . htmlspecialchars($row['title']) . "</h2>"."<br>";
        echo "<p>" ."". nl2br(htmlspecialchars($row['text'])) . "</p>"."<br>";
        echo "<small>Дата публикации: " . $row['date'] . "</small>."."<br>"."<hr>"."<br>";
    }
} else {

    echo "Новостей нет.";
}
?>
</div>
</body>


