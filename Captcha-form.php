<html>

<head>
	<title>Contact Us Form</title>
	<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
	<?php include("Compare_Captcha.php"); ?>
	<form name="frmContact" method="post" action="">
		<div style="width:400px;margin:100px auto;">
		<h1>	<P>Example Capcha : </P></h1>
			<br>
			<img src="Generate_Captcha.php" /><br><br>
			Type the captcha here :
			<br /><input name="captcha_code" type="text"><br>

			<div style="color:red;" class="message">
			<?php
				if (isset($_POST['captcha_code'])) {

					if ($message == "You have entered correct captcha") {
						echo "<div style ='color:green;' class='message'>$message</div><br>";
						}
							if ($message == "Please enter Correct Captcha Code") {
									echo "<div style ='color:red;' class='message'>$message</div><br>";
										}
										}
										?></div><br>
			<input type="submit" name="submit" value="Submit">
		</div>
	</form>
</body>
</html>