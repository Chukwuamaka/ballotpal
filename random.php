<!DOCTYPE html>
<!-- This is used to print out random numbers within a set range. -->
<html>
<head>
	<title></title>
	<style type="text/css">
		body {
			background-color: rgb(100, 101, 254);
		}
		div {
			color: white;
			text-align: center;
			font-size:300px;
			padding-top: 11vw;
			padding-bottom: 11vw;
			font-weight: 500;
		}
	</style>
</head>
<body>
	<div>
		<?php
			$random = rand(1, 250);
			echo $random;
		?>
	</div>
</body>
</html>