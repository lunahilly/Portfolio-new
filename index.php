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
							<p>Full-stack developer</p>
						</div>
						<ul class="information_socials">
							<li class="information_social">
								<a href="https://github.com/lunahilly/">
									<img src="./img/logos/github-mark.webp" alt="The github logo">
									<p>Github</p>
								</a>
							</li>
							<li class="information_social">
								<a href="https://www.linkedin.com/in/luna-hilversum-b90937277?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
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
					My name is Luna, and I am a full-stack developer. I was born on March 6, 2005, in Beinsdorp. During high school, I was first introduced to coding in physics class, which sparked my love for software development. This led me to pursue a degree in software development at Mediacollege Amsterdam, where I discovered my passion for accessibility and design.
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
