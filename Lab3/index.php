<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script type="text/javascript" src="login.js"></script>
    </head>

    <body>

        <?php
           if (!isset($_COOKIE['loginCookie'])) {
            session_start();
            if (!isset($_SESSION['username'])) {
                
            } else {
                header('Location:index1.php');
            }
        } else {
            session_start();
            $_SESSION['username'] = $_COOKIE['loginCookie'];
            header('Location:index1.php');
        }
        ?>
        
        <header>

            <ul class="menuUl">

                <li class="menuLiLogo"> CONCEPTSAW </li>

                <button class="menuLiLogin" onclick="window.location='Login.php';"> Sign in </button>

                <li class="menuLi"><a class="menuLiA" href="index.php">Home</a></li>
                <li class="menuLi"><a class="menuLiA" href="index.php">News</a></li>
                <li class="menuLi"><a class="menuLiA" href="index.php">Contact</a></li>
                <li class="menuLi"><a class="menuLiA" href="index.php">About</a></li>
            </ul>
        </header>

    </body>
</html>