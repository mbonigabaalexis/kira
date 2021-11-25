<?php include('connection.php') ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css1/loginstyle.css">
<body>
  
  <div class="header">
  	<img src="img/login.gif" width="100px;" height="60px"style="border: 1px;text-align: center;"><a href="index.php"><img src="img/logo/logo4.png" width="100px;" height="60px"style="border: 1px;text-align: center;"></a>

  </div>

  <form method="post" action="login.php">
    <!-- display varidation error-->
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text"placeholder="Enter username "name="username" >
  	</div>
    
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password"placeholder="Enter Password " name="password">
  	</div>
    <div class="input-group">
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
    Don'nt have an Account? <a href="register.php"><b>Sign up</b></a>
      <hr></hr>
      <!-- <a href="index.php"> -->
  	</p>
  </form>
</body>
</html>
