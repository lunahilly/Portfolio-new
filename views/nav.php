<nav class="nav">
	<ul class="nav_list">
		<li>
			<a href="../index.php">Home</a></li>
		<li>
			<a
				<?php
				if (strpos($_SERVER['REQUEST_URI'], "projects") !== false) {
					echo "class='active'";
				}
				?>
					href="../projects.php">Projects</a></li>
		<li>
			<a
				<?php
				if (strpos($_SERVER['REQUEST_URI'], "resume") !== false) {
					echo "class='active'";
				}
				?>
					href="../resume.php">Resume</a></li>
	</ul>
</nav>
