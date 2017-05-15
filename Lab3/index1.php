<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script type="text/javascript" src="login.js"></script>
    </head>

    <body>

        
        <header>

            <ul class="menuUl">

                <li class="menuLiLogo"> CONCEPTSAW </li>

                <li> <button onclick="clickLogout()" class="menuLiLogin"> 
                <?php session_start(); echo $_SESSION['username'] ?> </button> </li>

                <li class="menuLi"><a class="menuLiA" href="index.php">Home</a></li>
                <li class="menuLi"><a class="menuLiA" href="index.php">News</a></li>
                <li class="menuLi"><a class="menuLiA" href="index.php">Contact</a></li>
                <li class="menuLi"><a class="menuLiA" href="index.php">About</a></li>
            </ul>
        </header>

        <form id="logout01" class="userForm" action="logout.php" method="post">
             
                <button type="submit" class="logoutButton" >Logout</button>                   
                  </form>
        
        <h1 class="welcomeStyle">Benvenuto <?php echo $_SESSION['username'] ?></h1>
    </body>
</html>