
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <nav>
        <ul id="menuList" style="font-size:18px;">
            <li><a href="index.php" style="color:#787878;">Главная</a></li>
            <li><a href="../newspor/news.php">Новости</a></li>
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

    <main>
    <section >
    <h1 style="color:#fff; pading-bottom:200px;">Последние новости</h1>
<div class="news" style="color:#161515">

<div class="blog">
    <?php
    include_once "../newspor/lastnews.php";
    ?>
    </div>
    <a href="../newspor/news.php">Все новости</a>
</div>

<div class="feedback">
    <a href="../feedback/form.php">Обратная связь</a>
</div>
</section></main>
   

    
    <footer>

        <div class="footerBottom">
            <p>Copyright &copy;2024 <span>A.E.E</span></p>
        </div>
    </footer>
    
</body>
</html>

