<!doctype html>
<html lang="en">
	<?php include './views/head.php'; ?>
	<body>
		<?php include './views/nav.php' ?>
		<div class="login">
			<form class="form" action="check.php" method="post">
				<label for="username" class="form_labels">username:</label>
				<input class="formItem" placeholder="username" name="username" id="username" required>
				<label for="password" class="form_labels">password:</label>
				<input class="formItem" placeholder="password" name="password" id="password" required>
				<button action="submit">submit</button>
			</form>
		</div>
	</body>
</html>
