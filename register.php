<?php include('connection.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>kira </title>
  <link rel="stylesheet" href="css/loginstyle.css">
  <body>
  <div class="header">
    <h2> Create New Account</h2>
  	<a href="index.php"><img src="img/logo/logo4.png" width="100px;" height="60px"style="border: 1px;text-align: center;"></a>
  </div>
  <form method="post" action="register.php">
    <!-- display varidation error-->
  	<?php include('errors.php'); ?>
    <div class="input-group">
      <label>First name</label>
      <input type="text" placeholder="Enter First Name "name="#" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Last name</label>
      <input type="text" name="#" placeholder="Enter Last Name " value="<?php echo $username; ?>">
    </div>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" placeholder="Enter UserName " name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" placeholder="Enter Email Address " name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Phone Number</label>
  	  <input type="email" placeholder="Enter Phone Number " name="phone">
  	</div>
    
    <div class="input-group">
      <hr></hr>
      <label><b>gender</b></label>
      <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="female">Female
      <input type="radio" name="gender" value="onather">Other
<hr></hr>
    </div>
    </div>
    <div class="input-group">
      <label>Birth Day</label>
      <input type="date" name="BD" value="<?php echo $email; ?>">
    </div>
  	
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" placeholder="Enter Password " name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" placeholder="Enter Confirm password " name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
      <hr></hr>
  	</p>
  </form>
</body>
</html>
