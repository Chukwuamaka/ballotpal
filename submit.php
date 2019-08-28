<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ID=edge">
	<meta name="viewport" content="width=device-width, initial-scale=0.92">
	<title>2019 Lay Readers' Association General Elections</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		form {
			min-height: 36vh;
		}
		b {
			font-weight: normal;
		}
	</style>
<body>
	<?php

	$file = "file.html";
	$split = file_get_contents($file);
	$array = str_split($split);
	$length = count($array);

	for ($i=0; $i < $length; $i++) {
		if (!($array[$i] == 'A' || $array[$i] == 'B' || $array[$i] == 'C')) {
			unset($array[$i]);
		}
	}

	$array = array_values($array);
	$length = count($array);
	$A = 0;
	$B = 0;
	$C = 0;

	for ($i=0; $i < $length; $i++) { 
		if ($array[$i] == "A") {
			$A += 1;
		}
		elseif ($array[$i] == "B") {
			$B += 1; 
		}
		elseif ($array[$i] == "C") {
			$C += 1;
		}
	}
	$total = $A + $B + $C;
	echo "<h1>2019 Lay Readers' Association General Elections</h1>";
	echo "<p>Total number of votes: $total</p>";
	echo "<p><b class='candidates'>Candidate A:</b> $A votes<br>";
	echo "<b class='candidates'>Candidate B:</b> $B votes<br>";
	echo "<b class='candidates'>Candidate C:</b> $C votes</p>";
	// print_r(array_filter($array));
	// var_dump($filter);
	// echo $filter[1];

	?>
	<form>
		<input class="button" type="submit" name="submit" value="Continue Voting" formaction="clear.php" formmethod="POST">
		<!-- <input class="button" type="submit" name="feedback" value="Give Us Feedback" formaction="feedback.html" formmethod="POST"> -->
	</form>
	<footer>
		<p>Powered by e-Vote</p>
		<p>Designed and developed by <a id="author" href="https://www.linkedin.com/in/chukwuamakaosuji" target="_blank">Chukwuamaka Osuji</a></p>
	</footer>
</body>
</html>
