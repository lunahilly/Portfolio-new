<?php include 'reader.php' ?>

<!doctype html>
<html lang="en">
	<?php include './views/head.php'; ?>
	<body>

		<?php include './views/nav.php' ?>
		<div class="pagecontainer">
			<header class="header">
				<div class="information">
					<img class="information_img" src="./img/me.webp"
							alt="A girl leaning against a yellow beetle in a yellow dress">
					<div>
						<div class="information_text">
							<h1>Luna Hilversum</h1>
							<p>Front-end developer</p>
						</div>
						<ul class="information_socials">
							<li class="information_social">
								<a href="">
									<img src="./img/logos/github-mark.webp" alt="The github logo">
									<p>Github</p>
								</a>
							</li>
							<li class="information_social">
								<a href="">
									<img src="./img/logos/LI-In-Bug.webp" alt="The linkedin logo">
									<p>Linkedin</p>
								</a>
							</li>
							<li class="information_social">
								<a href="mailto:luna.software.development@gmail.com">
									<img src="img/logos/email.webp" alt="The email logo">
									<p>Email</p>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<p class="aboutme">
					Cat ipsum dolor sit amet, velitesse but quisquam do, but lorem. Architecto exercitation and consequat sunt. Suscipit qui so illum, or dicta duis natus for cupidatat.
					Qui ipsa but eaque and nequeporro. Ipsum aliqua or laboriosam, or velitesse or sit ipsam.
				</p>
			</header>

			<?php $project = $json[$number]; ?>
			<div class="highlighted">
				<h2>Highlighted project</h2>
				<article class="project highlight">
					<figure style="background-image: url('<?= $project['img'] ?>')" class="project_img">
						<a href='<?= $project['link'] ?>'>Go to project</a>
					</figure>
					<div class="project_about">
						<div class="project_titleDate">
							<h3> <?php echo $project['title'] ?> </h3>
							<p><?php $project['date'] ?></p>
						</div>
						<p>
							About project text Cat ipsum dolor sit amet, in but velitesse ipsum and autem. Quisquam minim.
							Esse excepteur so commodo adipisci. Fugit beatae. Minima qui so officia nisi. Nesciunt laborum odit yet architecto. Veritatis nemo anim labore nesciunt, quia and aut.
						</p>
					</div>
				</article>
			</div>
		</div>
		<?php include './views/footer.php' ?>
	</body>

</html>
