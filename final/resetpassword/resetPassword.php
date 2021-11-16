<?php
	require_once "functions.php";

	if (isset($_GET['email']) && isset($_GET['token'])) {
		include '../php/config.php';

		$email = $connect->real_escape_string($_GET['email']);
		$token = $connect->real_escape_string($_GET['token']);

		$sql = $connect->query("SELECT id FROM users WHERE
			email='$email' AND token='$token' AND token<>'' AND tokenExpire > NOW()
		");

		if ($sql->num_rows > 0) {
			$newPassword = generateNewString();
			$newPasswordEncrypted = password_hash($newPassword, PASSWORD_BCRYPT);
			$connect->query("UPDATE users SET token='', password = '$newPasswordEncrypted'
				WHERE email='$email'
			");

			echo "Your new password is: <b>$newPassword</b> please copy it and use to log in<br><a href='../php/login.php'>Click here to log in</a>";
		} else
			redirectToLoginPage();
	} else {
		redirectToLoginPage();
	}
?>
