<?php
include_once dirname(__DIR__) . '/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Angela J Holden</title>
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="../styles.css" />
</head>

<body>
	<?php include_once dirname(__DIR__) . '/includes/header.php'; ?>
	<main class="main">
		<section class="contact">
			<!-- modify this form HTML and place wherever you want your form -->
			<form action="https://formspree.io/f/xyzyqyve" method="POST">
				<label>
					Your email:
					<input type="email" name="email">
				</label>
				<label>
					Your message:
					<textarea name="message"></textarea>
				</label>
				<!-- your other form fields go here -->
				<button type="submit">Send</button>
			</form>
		</section>
		<?php include_once dirname(__DIR__) . '/includes/social.php'; ?>
	</main>
	<?php include_once dirname(__DIR__) . '/includes/footer.php'; ?>
</body>

</html>