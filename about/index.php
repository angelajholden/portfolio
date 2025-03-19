<?php
include_once dirname(__DIR__) . '/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>About Me | Angela J Holden</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/styles.css" />
</head>

<body>
	<?php include_once dirname(__DIR__) . '/includes/header.php'; ?>
	<main id="content" class="main">
		<section class="contact">
			<div class="wrap">
				<h2 class="secondary-heading">About Me</h2>
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit voluptatum harum aspernatur architecto ratione suscipit sit eius at saepe provident quae veniam repudiandae optio vero totam aliquid hic dolorem inventore dolorum, eveniet tenetur ut aperiam? Sint cumque debitis earum veritatis harum, rem esse molestias dolorum laboriosam quae aperiam eveniet ea a iste officiis. Itaque molestias saepe animi optio perspiciatis, ab fugiat doloremque fugit deleniti tempore quod labore consequatur delectus. Accusamus voluptas velit ea sed aut commodi odio provident non id, beatae sunt nam esse! Dolore, dolor incidunt repudiandae illum nulla quibusdam amet laudantium esse tempora vitae quae sed accusamus.</p>
			</div>
		</section>
		<?php //include_once dirname(__DIR__) . '/includes/social.php'; ?>
	</main>
	<?php include_once dirname(__DIR__) . '/includes/footer.php'; ?>
</body>

</html>