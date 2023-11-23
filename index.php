<?php

require __DIR__ . '/functions.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Password Generator</title>
</head>

<body>
	<div class="password-generator">
		<div class="title">
			<h1>Password Generator</h1>
		</div>

		<form action="" method="GET">
			<p><b>Inserisci il numero di caratteri da generare</b></p>
			<input type="number" name="number">
			<input type="submit" value="Genera password">
		</form>

		<div class="password">
			<p>La tua nuova password è: <?php generatePassword() ?></p>
		</div>
	</div>
</body>

</html>