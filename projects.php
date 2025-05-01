<!doctype html>
<html lang="en">
	<?php include './views/head.php'; ?>

	<body>
		<?php include './views/nav.php' ?>
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
			<h3>  $title </h3>
			<p>  $date </p>
		</div>
		<p>
			About project text Cat ipsum dolor sit amet, in but velitesse ipsum and autem. Quisquam minim.
			Esse excepteur so commodo adipisci. Fugit beatae. Minima qui so officia nisi. Nesciunt laborum odit yet architecto. Veritatis nemo anim labore nesciunt, quia and aut.
		</p>
	</div>
</article>";
				}
				?>
			</div>
		</div>
		<?php include 'views/footer.php' ?>
	</body>

</html>
