<!DOCTYPE html>
<meta charset="utf-8">
<head>
<title>Login first hunny</title>
<link rel="stylesheet" href="css/loginstyle.css">
</head>
<form action="lover.php" onsubmit="return authenticate()">
    <div class="container">
        <p>Hi,Babe &#128144;</p>
        <label for="uname"><b>Username</b></label>
        <input id=uname type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input id=psw type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
    </div>
</form>
<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
    <strong>Warning! </strong>This website only for my girlfriend! - her lover -
  </div>
<body>
    <div>
       <div class="wave"></div>
       <div class="wave"></div>
       <div class="wave"></div>
    </div>
  </body>
  <script src="<?= BASEURL ?>assets/js/her.login.js"> </script>
  </html>