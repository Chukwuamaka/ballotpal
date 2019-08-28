<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery3.1.js"></script>
</head>
<body>
	<form>
		<p>
			Contestants: <br>
			<input type="radio" name="candidate" value="A" id="radio">A <br>
			<input type="radio" name="candidate" value="B">B <br>
			<input type="radio" name="candidate" value="C">C
		</p>
		<!-- <input type="submit" name="vote" value="Vote"> -->

		<button type="reset" id="vote">Vote</button>
		<input type="submit" name="submit" value="Submit Results">
	</form>
<script type="text/javascript">

	var A = 0, B = 0, C = 0;

	$("#vote").click(function() {
		var candidate = $("input[name='candidate']:checked").val();
		if (candidate === 'A') {
			A += 1;
			alert(A);
		}
		else if (candidate === 'B') {
			B += 1;
			alert(B);
		}
		else if (candidate === 'C') {
			C += 1;
			alert(C);
		}
		// if ((A+B+C) === 5) {
		// 	alert("Voting is complete");
		//}
	} );

	$("input[name='submit']").click(function() {
		document.write("A: " + A + " votes <br>");
		document.write("B: " + B + " votes <br>");
		document.write("C: " + C + " votes");
		// alert(A);
		// alert(B);
		// alert(C);
	});

</script>
</body>
</html>
