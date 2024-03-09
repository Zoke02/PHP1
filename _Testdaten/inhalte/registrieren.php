<div class='wrapper'>
	<div class='row'>
		<div class='col-xs-12'>
			<h1>Registrierung</h1>
		</div>
	</div>
</div>

<?php

$success = false;
$text_errors = array();
$agb = false;

if (!empty($_POST)) {


	if (empty($_POST["benutzername"])) {
		$text_errors[] = "Please enter a Username.";
	} elseif (strlen($_POST["benutzername"]) < 4) {
		$text_errors[] = "Username must be at least 4 characters long.";
	} elseif (preg_match("/_\W/", $_POST["benutzername"])) {
		$text_errors[] = "Username cannon contain Special characters.";
	}


	if (empty($_POST["passwort"])) {
		$text_errors[] = "Please enter a Password.";
	} elseif (strlen($_POST["passwort"]) < 6) {
		$text_errors[] = "Password must be at least 6 characters long.";
	} elseif (!preg_match("/[\Aa-zA-Z\z]/", $_POST["passwort"])) {
		$text_errors[] = "Password must contain one Upper and one Lower character from 'a' to 'z'.";
	} elseif (!preg_match("/[\A\W\z]/", $_POST["passwort"])) {
		$text_errors[] = "Password must contain at least one Special Character.";
	} elseif (!preg_match("/[\A0-9\z]/", $_POST["passwort"])) {
		$text_errors[] = "Password must contain at least Number.";
	}


	if (empty($_POST["email"])) {
		$text_errors[] = "Please enter a E-Mail adress.";
	} elseif (!preg_match("/^[a-z0-9]+@[a-z0-9]+\.[a-z]{2,15}$/", $_POST["email"])) {
		$text_errors[] = "E-Mail adress may be False.";
	}

	// The only way i figuered out how to check if checkbox is checked:
	// I noticed $_POST only sends a "agb" in array only if its checked otherwise it does not inser anything.
	// So by logic if all 4 fields must be checked that means the 4-th insert in array will only be inserted if checkbox is checked.
	if (count($_POST) <= 3) {
		$text_errors[] = "Please accept the Terms & Conditions";
	} else $agb = true;
	if (empty($text_errors)) {
		$success = true;
	}
}

//  echo "<pre>";
//  print_r($_POST);
//  echo "</pre>";

if (!empty($text_errors)) {
	echo "<h2>Followering errors</h2>";
	foreach ($text_errors as $key => $value) {
		echo "<ul>";
		echo "<li>$value</li>";
		echo "</ul>";
	};
	echo "<br>";
};

if ($success && $agb) {
	echo "<h2>Thank you!</h2>";
	if($agb) $agb_true = "Agreed";
	$date = date("d.m.Y - H:i:s");
	$mail_content ="
-----USER REGISTERED-----
Date: {$date}
Username: {$_POST["benutzername"]}
Password: {$_POST["passwort"]}
E-Mail: {$_POST["email"]}
Terms & Conditions: {$agb_true}

";
	// Write user into a .txt file as backup (Variant 1)
	file_put_contents("registrierungen/backupmail.txt", $mail_content, FILE_APPEND | LOCK_EX);
	// // Write user into a .txt file as backup (Variant 2)
	// $date_and_name = "user_" . $_POST["benutzername"] . "_date_" . date("d.m.Y_H-i-s");
	// file_put_contents("registrierungen/{$date_and_name}.txt", $mail_content);
} else {
?>

<form id='register-form' method="post" action="index.php?seite=registrieren">
	<div class="wrapper">
		<div class='row'>
			<div class='col-xs-12 col-sm-12'>
				<label for='username'>Benutzername</label>
				<input type='text' id='username' name='benutzername' value="<?php if (!empty($_POST["benutzername"])) {
                            echo htmlspecialchars($_POST["benutzername"]);
                        } ?>" />
			</div>
			<div class='col-xs-12 col-sm-12'>
				<label for='password'>Passwort</label>
				<input type='password' id='password' name='passwort' value="<?php if (!empty($_POST["passwort"])) {
                            echo htmlspecialchars($_POST["passwort"]);
                        } ?>" />
			</div>
			<div class='col-xs-12 col-sm-12'>
				<label for='email'>E-Mail</label>
				<input type='text' id='email' name='email' value="<?php if (!empty($_POST["email"])) {
                            echo htmlspecialchars($_POST["email"]);
                        } ?>" />
			</div>
			<div class='col-xs-12 col-sm-12'>
				<input type='checkbox' id='toc' name='agb' <?php if ($agb) echo "checked" ?> />
				<label for='toc'>Ich akzeptiere die AGB.</label>
			</div>
			<div class='col-xs-12'>
				<input type='submit' value='Registrieren' />
			</div>
		</div>
	</div>
</form>
<?php } ?>
