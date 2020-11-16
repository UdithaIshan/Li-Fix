<?php 
	$page = 'english.php';
	include "DbAccess.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Li - Fix</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>
	<div class="container">
		<section>
			<a id="lan" class="floating-btn">En</a>
		</section>
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Make a Complaint</h2>
				<form action="english.php" method="POST">
					<input type="text" name="name" value="<?php echo htmlspecialchars($name) ?>" class="field" placeholder="<?php if($errors['name']) echo $errors['name']; else echo 'Your Name'; ?>" id="f1">
					<input type="text" name="nic" value="<?php echo htmlspecialchars($nic) ?>" class="field" placeholder="<?php if($errors['nic']) echo $errors['nic']; else echo 'Your NIC'; ?>" id="f2">
					<!-- <input type="text" name="lampid" value="<?php echo htmlspecialchars($lampId) ?>" class="field" placeholder="<?php if($errors['lampid']) echo $errors['lampid']; else echo 'Lamppost ID'; ?>" id="f3"> -->
					<div class="box">
						<div class="p-left">
							<input type="text" name="lampid" value="<?php echo htmlspecialchars($lampId) ?>" class="field" placeholder="<?php if($errors['lampid']) echo 'පහන් කණු අත්‍යාවශ්‍ය වේ'; else echo 'පහන් කණු අංකය'; ?>" >					
						</div>
						<div class="bulb">
							<span><label for="bulb">Is bulb available? </label><input class="checkmark" type="checkbox" name="bulb" id="bulb" value="yes" required></span>
						</div>
					</div>
					<input type="text" name="note" value="<?php echo htmlspecialchars($note) ?>" class="field note" placeholder="Notes about the problem" id="f4">
					<div class="box">
						<div class="p-left">
							<input type="text" name="phone" value="<?php echo htmlspecialchars($phoneNo) ?>" class="field" placeholder="<?php if($errors['phone']) echo $errors['phone']; else echo 'Phone'; ?>" id="f5">
						</div>
						<div class="p-right">
							<button class="btn2">Get Code</button>
						</div>
					</div>
					<input type="text" name="otp" class="field" value="<?php echo htmlspecialchars($otpCode) ?>" placeholder="<?php if($errors['otp']) echo $errors['otp']; else echo 'OTP Code'; ?>" id="f6">
					<button name="submit" class="btn">SUBMIT</button>
				</form>		
			</div>
		</div>	
	</div>
	<script src="index.js"></script>
</body>
</html>