<?php
include "./assets/conf/variables.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="">
    <meta name="author" content="RC-CONSULTORIA E ASSESSORIA EM TELECOM">
    <title><?php echo $title; ?></title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="<?php echo $img; ?>logo_perfil.svg">

    <!-- IMPORT GOOGLE FONTS POPPINS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS CDN BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo $css; ?>main.min.css">
</head>

<body>

    <nav class="sidebar close">
        <header>
            <a href="index.php">
                <div class="image-text">
                    <span class="image">
                        <p>CJ</p>
                    </span>

                    <div class="text header-text">
                        <span class="name">Charles Junior</span>
                        <span class="profession">Web Developer</span>
                    </div>
                </div>
            </a>

            <i class="bx bx-chevron-right toggle"></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class="bx bx-search icon"></i>
                    <input type="text" placeholder="Pesquisar...">
                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-home-alt icon"></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-bar-chart-alt-2 icon"></i>
                            <span class="text nav-text">Revenue</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-bell icon"></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-pie-chart-alt icon"></i>
                            <span class="text nav-text">Analytics</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-heart icon"></i>
                            <span class="text nav-text">Likes</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-wallet icon"></i>
                            <span class="text nav-text">Wallets</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class="bx bx-log-out icon"></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="moon-sun">
                        <i class="bx bx-moon icon moon"></i>
                        <i class="bx bx-sun icon sun"></i>
                    </div>
                    <span class="mode-text text">Dark Mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>

        </div>
    </nav>

    <section class="home">
        <div class="text">Dashboard</div>
    </section>
    <!-- JS MAIN -->
    <script src="<?php echo $js; ?>main.js"></script>
</body>

</html>
