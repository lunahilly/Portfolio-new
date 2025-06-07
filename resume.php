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
			<div class="DownloadPrint">
				<button type="submit" onclick="window.open('CV2025_LunaH.pdf')" class="notHidden" aria-label="Download"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-download"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg></button>
				<button class="notHidden" aria-label="Print" onClick="window.print()"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-printer"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" /><path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" /><path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" /></svg></button>
			</div>
		</div>
		<?php include './views/footer.php' ?>
		<script src="https://cursor-party.lunahilly.partykit.dev/cursors.js"></script>
	</body>
</html>
