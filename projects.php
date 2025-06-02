<!doctype html>
<html lang="en">
	<?php include './views/head.php'; ?>

	<body>
		<?php include './views/nav.php' ?>
		<h1 class="myworkTitle">My work</h1>
		<div class="pagecontainer">
			<div class="projects">
				<?php
				include 'reader.php';
				foreach ($json as $item) {
					$title = $item['title'];
					$subtext = $item['subtext'];
					$img = $item['img'];
					$date = $item['date'];
					$link = $item['link'];
					echo "
						<article class='project'>
					<figure style='background-image: url(   $img  )' class='project_img'>
		<a href= $link >Go to github</a>
	</figure>
	<div class='project_about'>
		<div class='project_titleDate'>
			<h2>  $title </h2>
			<p>  $date </p>
		</div>
		<p>
			$subtext
		</p>
	</div>
</article>
						";
				}
				?>
			</div>
		</div>
		<?php include 'views/footer.php' ?>
	</body>

</html>
