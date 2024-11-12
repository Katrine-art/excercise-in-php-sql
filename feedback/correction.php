<html>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица</title>
    <link rel="stylesheet" href="../page/style.css">   
    <style>
        table {
            background: #fff;
            
        }
        table td {
            max-width: 100%;
        }

    </style> 
 
</head>
<body>
    <nav>
        <ul id="menuList">
            <li><a href="../page/index.php">Главная</a></li>
            <li><a href="../newspor/news.php">Новости</a></li>
            <li><a href="../feedback/form.php" style="color:#787878;">Обратная связь</a></li>
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

    </body>

<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback";

$conn = mysqli_connect ($servername, $username, $password, $dbname);



if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error); 
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $conn->real_escape_string($_POST['name']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $address = $conn->real_escape_string($_POST['address']);
    $email = $conn->real_escape_string($_POST['email']);


    $sql = "INSERT INTO form (name, phone, address, email) 
            VALUES ('$name', '$phone', '$address', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Сообщение успешно отправлено!<br>";
    } else {
        echo "Ошибка: " . $conn->error . "<br>";
    }
}

?>
<center>
<?php
echo "<h3>Таблица всех пользователей</h3>";

$sql = "SELECT id, name, phone, address, email FROM form ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table border='1' cellpadding='10' cellspacing='0'  >";
    echo "<tr><th>ID</th><th>Имя</th><th>Телефон</th><th>Адрес</th><th>Email</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr >";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
        echo "<td>" . nl2br(htmlspecialchars($row['address'])) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Нет сообщений.";
}


?>

</center>



