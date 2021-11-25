<!DOCTYPE html>
<html>
<head>
	<title>kira</title>
	<link rel="shortcut icon"type="image/png"href="img/logo/logo4.png"class="img-responsive" alt="">
	<link rel="stylesheet" type="text/css" href="css/stylecontact.css">
</head>
<body>
<div class="wrapper">
	<h2>Contact Us</h2>
	<div id="error_message"></div>

	<form id="myform" onsubmit="return validation()">
		<div class="input_field">
			<input type="text" placeholder="Name" id="name">
		</div>
		<div class="input_field">
			<input type="text" placeholder="Email" id="email">
			</div>
		
				<div class="input_field">
			<input type="text" placeholder="Phone" id="phone">
		</div>
			<div class="input_field">
			<input type="text" placeholder="Subject" id="subject">
		</div>
					<div class="input_field">
			<textarea placeholder="message" id="Message"></textarea>
			</div>
					<div class="btn">
			<input type="submit"name="submit" value="send">
		</div>
	</form> 
		
	</div>
</div>
</body>
</html>
 <script src="js/script.js"></script>