<?php
$data = file_get_contents('resume.json');
$arrays = json_decode($data, true);
echo $arrays[0];
foreach ($arrays as $cv) {
	$educations = $cv['education'];
	$experiences = $cv['experience'];
}
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
						<h3 class="cvListItemH3"> ' . $title . '</h3>
						<p class="cvListItemDate">' . $date . '</p>
					</div>
					<p class="cvListItemPlace">' . $place . '</p>
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
