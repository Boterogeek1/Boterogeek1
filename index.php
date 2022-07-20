<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
  </head>
  <body>
    <div class="bob">
      <div class="title"></div>
      <h1>Login</h1>
      <form method="post" action="live.php">
        <div class="field">
          <input type="text" required>
          <label>Username</label>
        </div>
        <div class="field">
          <input type="password" required>
          <label>Password</label>
        </div>
        <div class="content">
         
          <div class="pass-link"><a href="#">Forgot password</a></div>
        </div>
        <div class="field">
            
            <input type="submit" value="Login" onclick="this.form.target=_blank" >
        </div>
        <div class="signup-link">New member<a href="#">Signup now</a></div>
      </form>
    </div>
  </body>
</html>
