<?php 
include "db.php"; 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Li-Fix</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>
	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Make a Complaint</h2>
				<form action="index.php" method="POST">
				<input type="text" name="name" value="<?php echo htmlspecialchars($name) ?>" class="field" placeholder="Your Name" >
				<div class="error"><?php echo $errors['name']; ?></div>
				<input type="text" name="nic" value="<?php echo htmlspecialchars($nic) ?>" class="field" placeholder="Your NIC" >
				<div class="error"><?php echo $errors['nic']; ?></div>
				<input type="text" name="lampid" value="<?php echo htmlspecialchars($lampId) ?>" class="field" placeholder="Lamppost ID" >
				<div class="error"><?php echo $errors['lampid']; ?></div>

				<div class="phone-box">
					<div class="p-left">
						<input type="text" name="phone" value="<?php echo htmlspecialchars($phoneNo) ?>" class="field" placeholder="Phone" >
						<div class="error"><?php echo $errors['phone']; ?></div>
					</div>
					<div class="p-right">
						<button class="btn2">Get Code</button>
					</div>
				</div>

				<input type="text" name="otp" class="field" value="<?php echo htmlspecialchars($otpCode) ?>" placeholder="OTP Code" >
				<div class="error"><?php echo $errors['otp']; ?></div>
				<button name="submit" class="btn">SUBMIT</button>
			</form>		
			</div>
		</div>
	</div>

</body>
</html>