<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<?php
		// Determine if we're on Heroku (staging)
		$isStaging = strpos($_SERVER['HTTP_HOST'], 'heroku') !== false;

		// Handle robots meta tag
		if ($isStaging || (isset($noindex) && $noindex === true)) {
			echo '<meta name="robots" content="noindex,nofollow">' . PHP_EOL;
		} else {
			echo '<meta name="robots" content="index,follow">' . PHP_EOL;
		}

		// Handle meta description
		if (isset($description)) {
			echo '<meta name="description" content="' . htmlspecialchars($description) . '">' . PHP_EOL;
		}
	?>

	<title><?php echo isset($title) ? $title : "Angela J Holden | Software Engineer &amp; Frontend Developer"; ?></title>

	<link rel="shortcut icon" href="<?php echo BASE_URL; ?>favicon.png" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&family=Lato:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>styles.css" />
</head>