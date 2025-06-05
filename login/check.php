<?php
$diff = rand(1, 2);

$number = strval($diff);

$str1 = "./loginWay";
$str2 = ".php";

$projectlink = $str1 . $number . $str2;
?>

<!doctype html>
<html lang="en">
	<?php include '../views/head.php' ?>
	<body>
		<?php include '../views/nav.php' ?>
		<div>
			<h2>Login was not succesfull, try a <a href=<?php echo $projectlink ?>> different way</a></h2>
		</div>
	</body>
</html>
