<!DOCTYPE html>
<html lang="en">
	<?php include '../views/head.php'; ?>
	<body>

		<?php include '../views/nav.php' ?>

		<h2 class="pinkyh2">Pinky promise this is your account</h2>
		<div id="intersecting" class="pinkies">
			<img id="pinkyleft" class="pinkyimg left" src="../img/pinkyleft.png" alt="">
			<img id="pinkyright" class="pinkyimg flip" src="../img/pinkyleft.png" alt="">
			<script>
				var right = document.getElementById('pinkyright');
				var intersectarea = document.getElementById('intersecting');
				var moving = false;
				var intersecting = false;

				right.addEventListener('mousedown', initialClick, false);

				function move(e) {
					var newX = e.clientX - 10;
					var newY = e.clientY - 10;

					image.style.left = newX + 'px';
					image.style.right = newY + 'px';
				}

				function initialClick(e) {
					if (moving) {
						document.removeEventListener('mousemove', move);
						moving = !moving;
						return;
					}

					moving = !moving;
					image = this;

					document.addEventListener('mousemove', move, false);
				}

				const handleIntersect = (entries) => {
					entries.forEach((entry) => {
						if (entry.intersectionRatio >= 0.25) {
							intersecting = true;
							console.log(intersecting);
						}
					});
				};

				let options = {
					root: intersectarea,
					rootMargin: '0px',
					threshold: 0.25,
				};

				let observer = new IntersectionObserver(handleIntersect, options);
				observer.observe(right);
			</script>
		</div>
		<script src="https://cursor-party.lunahilly.partykit.dev/cursors.js"></script>
	</body>
</html>
