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
  	
  
  	<div>
<form id="log01" action="login_success.php" method="post">
  <div class="containerLog">
  	<li class="title"> LOGIN</li>
    <label class="credentialStyle"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="lname" required>

    <label class="credentialStyle"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="lpsw" required>
       
    <button class = "buttonLog" type="submit" name="loginButton">Log in</button>
    <input type="checkbox" name = "cbox" value = "true"> Remember me
    <li class="forgotPsw"> <a> Forgot password?</a>
  </div>
</form>
<form id="form01" action="newRegistration.php" method="post" >
		<div class="containerReg">
			<li class="title">REGISTRATION</li> 
			<label class="credentialStyle"><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="uname" required>

			<label class="credentialStyle"><b>Email</b></label> <input id="email" type="email"
				placeholder="email@example.com" name="email" required> 
				
			<label class="credentialStyle"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="psw" required> 
				
			<label class="credentialStyle"><b>Confirm Password</b></label>
			<input id="secondPsw" type="password" placeholder="Confirm Password" name="secondPsw" required>

			<button class = "buttonLog"type="submit" name="registerButton">Sign up</button>
			
		</div>
	</form>
	</div>
</header>
</body>