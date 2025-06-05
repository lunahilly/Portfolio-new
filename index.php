<?php include 'reader.php' ?>

<!doctype html>
<html lang="en">
	<?php include './views/head.php'; ?>
	<body>

		<?php include './views/nav.php' ?>
		<div class="pageContainer">

			<?php
			include './views/header.php';
			$project = $json[$number]; ?>
			<div class="highlighted">
				<h2>Highlighted project</h2>
				<article class="project highlight">
					<figure style="background-image: url('<?= $project['img'] ?>')" class="project_img">
						<a href='<?= $project['link'] ?>'>Go to project</a>
					</figure>
					<div class="project_about">
						<div class="project_titleDate">
							<h3> <?php echo $project['title'] ?> </h3>
							<p><?php echo $project['date'] ?></p>
						</div>
						<p>
							<?php echo $project['subtext'] ?>
						</p>
					</div>
				</article>
			</div>
		</div>
		<?php include './views/footer.php' ?>
		<script src="https://cursor-party.lunahilly.partykit.dev/cursors.js"></script>
	</body>

</html>
