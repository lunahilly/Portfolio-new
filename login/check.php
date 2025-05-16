<?php
$diff = rand(1, 2);

$number = strval($diff);

$str1 = "./different";
$str2 = ".php";

$projectlink = $str1 . $number . $str2;
?>

<!doctype html>
<html lang="en">
	<?php include './views/head.php' ?>
	<body>
		<div>
			<h2>Login was not succesfull, try a different way</h2>
			<ul>
				<li><a href="./different1.php">Pinky promise this is your account</a></li>
				<li><a href="./different2.php">Let the gods decide</a></li>
				<li><a href="./different3.php">Password reminder</a></li>
			</ul>
		</div>
	</body>
</html>
