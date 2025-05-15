<!doctype html>
<html lang="en">
	<?php include './views/head.php'; ?>
	<body>
		<?php include './views/nav.php' ?>
		<div class="login">
			<form class="form" action="check.php" method="post">
				<label for="username" class="form_labels">username:</label>
				<input class="formItem" placeholder="username" name="username" id="username">
				<label for="password" class="form_labels">password:</label>
				<input class="formItem" placeholder="password" name="password" id="password">
				<p class="hint">HINT : its username && password</p>
			</form>
		</div>
	</body>
</html>
