<?php 
session_start();
include 'config.php';

?>

<!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>freelance order</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/fonts.css">
</head>



<body>

<a href="https://oauth.vk.com/authorize?client_id=<?=ID?>&display=page&redirect_uri=<?=URL?>&scope=photos&response_type=code&v=5.131" target="_blank">VK AUTHORIZE</a>
<?php 

if(isset($_SESSION['logged_in']) == true){
echo '<a href="/profile.php">Профиль</a>';
}
?>
    <div class="page">
        <h1 class="visually-hidden">развивающие игры по русскому языку и другим предметам</h1>

        <header class="toolbar">
            <nav class="nav">
                <ul class="menu">
                    <li class="menu__item">
                        <a href="tags.php" class="menu__link">#ТЕГИ</a>
                    </li>
                    <li class="menu__item">
                        <a href="transform.php" class="menu__link">Трансформеры</a>
                    </li>
                    <li class="menu__item">
                        <a href="rainbow.php" class="menu__link">Радуга числительных</a>
                    </li>
                    <li class="menu__item">
                        <a href="train.php" class="menu__link">Паровозик</a>
                    </li>
                    <!-- <li class="menu__item">
                        <a href="#" class="menu__link">ВХОД / РЕГИСТРАЦИЯ</a>
                    </li> -->
                </ul>
            </nav>
        </header>

        <main class="main">
            <section class="games">
                <h2 class="title-index">ТЕСТОВАЯ ВЕРСИЯ САЙТА !</h2>
                <h2 class="title-games">Серия игр "ПОПАДИ В ЦЕЛЬ"</h2>
                <div class="video">
                    <video class="video__promo-n" autoplay="" muted="" loop="">
                        <source type="video/webm" src="media/HH1080.webm">
                        <source type="video/mp4" src="media/HH1080.mp4">
                    </video>
                </div>
            </section>
        </main>




    </div>

    <script defer="" src="js/script.js"></script>



</body></html>