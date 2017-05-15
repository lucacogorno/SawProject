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
    
    <li class="menuLi"><a class="menuLiA" href="index.php">Home</a></li>
                <li class="menuLi"><a class="menuLiA" href="index.php">News</a></li>
                <li class="menuLi"><a class="menuLiA" href="index.php">Contact</a></li>
                <li class="menuLi"><a class="menuLiA" href="index.php">About</a></li>            
  	</ul>
  	</header>
<form id="log01" action="login_success.php" method="post">
  <div class="containerLog">
  	<li class="title"> LOGIN</li>
    <label class="credentialStyle"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label class="credentialStyle"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
       
    <button type="submit" name="loginButton">Log sin</button>
    <input type="checkbox" name = "cbox" value = "true"> Remember me
    <li class="forgotPsw"> <a> Forgot password?</a>
    
  	<li class="registrationLi"> Sei un nuovo utente? <a href="Registration.php">Sign up</a>
  </div>
</form>
            </ul>

    </body>