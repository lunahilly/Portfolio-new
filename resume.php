<?php
$data = file_get_contents('resume.json');
$arrays = json_decode($data, true);
$educations = $arrays['education'];
$experiences = $arrays['experience'];
?>


<!doctype html>
<html lang="en">
	<?php include './views/head.php'; ?>

	<body>
		<?php
		include './views/nav.php'; ?>
		<div class="pageContainer">
			<?php
			include './views/header.php'; ?>
			<section class="cvList">
				<h2 class="cvH2">Education</h2>
				<?php
				foreach ($educations as $education) {
					$title = $education['title'];
					$place = $education['place'];
					$date = $education['date'];
					$text = $education['text'];
					echo '
															<div class="cvListItem">
									<div class="cvListItemTop">
										<h3> ' . $title . '</h3>
										<p>' . $date . '</p>
									</div>
									<p>' . $place . '</p>
									<p class="cvListItemText">' . $text . '</p>
								</div>
										';
				}
				?>
			</section>
			<section class="cvList">
				<h2 class="cvH2">Experience</h2>
				<?php
				foreach ($experiences as $experience) {
					$title = $experience['title'];
					$place = $experience['place'];
					$date = $experience['date'];
					$text = $experience['text'];
					echo '
															<div class="cvListItem">
									<div class="cvListItemTop">
										<h3> ' . $title . '</h3>
										<p>' . $date . '</p>
									</div>
									<p>' . $place . '</p>
									<p class="cvListItemText">' . $text . '</p>
								</div>
										';
				}
				?>
			</section>
		</div>
		<?php include './views/footer.php' ?>
		<script src="https://cursor-party.lunahilly.partykit.dev/cursors.js"></script>
	</body>
</html>
