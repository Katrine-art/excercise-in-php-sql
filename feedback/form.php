
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>обратная связь</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="../page/style.css">

</head>
<body>
<nav>
        <ul id="menuList" style="font-size:18px;">
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


    <div class="container1">
        <form action="correction.php" method="POST">
        <div class="title">Форма обратной связи</div>
        <div class="form">
            <div class="input_field">
                <label for="">Имя:</label>
                <input type="text" class="input" name="name" required>
            </div>

            <div class="input_field">
                <label for="">Номер телефона:</label>
                <input type="text" class="input" name="phone" required>
            </div>

            <div class="input_field">
                <label for="">Адрес:</label>
                <input type="text" class="input" name="address" required>
            </div>

            <div class="input_field">
                <label for="">Email:</label>
                <input type="text" class="input" name="email" required>
            </div>

            <div class="input_field">
                <input type="submit" value="Отправить" class="btn" name="butten">
            </div>
        </div>
    </form>
    </div>



</body>
</html>

