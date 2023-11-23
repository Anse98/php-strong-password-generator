<?php

function generatePassword()
{
	$number = $_GET['number'] ?? '';

	$characters = 'aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ1234567890-!?=%$/&';

	for ($i = 0; $i < $number; $i++) {

		$characters_index = rand(0, strlen($characters) - 1);

		echo $characters[$characters_index];
	}
}

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
			<input type="submit">
		</form>

		<div class="password">
			<p>La tua nuova password è: <?php generatePassword() ?></p>
		</div>
	</div>
</body>

</html>