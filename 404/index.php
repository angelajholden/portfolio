<?php
include_once dirname(__DIR__) . '/config.php';
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en">

<?php 
$title = 'Error 404 | Angela J Holden | Software Engineer &amp; Frontend Developer';
$description = '';
$noindex = false; // or true, if you want to block this specific page
include_once dirname(__DIR__) . '/includes/head.php';
?>

<body>
	<?php include_once dirname(__DIR__) . '/includes/header.php'; ?>
	<main id="content" class="main">
		<div class="full-width_hero"></div>
		<article class="full-width_content content_404 animate__animated animate__fadeIn">
			<div class="wrap">
				<header class="content-header">
					<h1 class="primary-heading">Oops! This page wandered off.</h1>
					<div class="content-meta">
						<div class="meta-item by-author">
							<figure class="meta-image">
								<img src="<?php echo BASE_URL; ?>images/angelajholden-software-engineer-frontend-developer.jpg" alt="Angela J Holden | Software Engineer &amp; Frontend Developer">
							</figure>
							<span>By Angela</span>
						</div>
						<div class="meta-dots"></div>
						<div class="meta-group">
							<div class="meta-item">
								<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M256 48C141.13 48 48 141.13 48 256s93.13 208 208 208 208-93.13 208-208S370.87 48 256 48zm96 240h-96a16 16 0 01-16-16V128a16 16 0 0132 0v128h80a16 16 0 010 32z"/></svg>
								<time datetime="2025-03-20">Apr 1, 2025</time>
							</div>
							<div class="meta-item">
								<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M400 480a16 16 0 01-10.63-4L256 357.41 122.63 476A16 16 0 0196 464V96a64.07 64.07 0 0164-64h192a64.07 64.07 0 0164 64v368a16 16 0 01-16 16z"/></svg>
								<span>Error 404</span>
							</div>
						</div>
					</div>
				</header>
				<div class="content-item">
					<div class="content">
						<p>Heidi couldn't find this page either. 🐾 If you have any questions, please reach out through the <a href="../contact/">contact form</a>.</p>
					</div>
					<figure class="image-with-background">
						<img src="<?php echo BASE_URL; ?>images/heidi-the-sheltie-looking-out-window.jpg" alt="Heidi the Sheltie looking out the window." />
					</figure>
				</div>
				<footer class="content-footer">
					<?php include_once dirname(__DIR__) . '/includes/author.php'; ?>
				</footer>
			</div>
		</article>
	</main>
	<?php include_once dirname(__DIR__) . '/includes/footer.php'; ?>
</body>

</html>