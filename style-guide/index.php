<?php include_once dirname(__DIR__) . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php 
$title = 'Style Guide | Angela J Holden | Software Engineer &amp; Frontend Developer';
include_once dirname(__DIR__) . '/includes/head.php' ?>

<body>
	<?php include_once dirname(__DIR__) . '/includes/header.php'; ?>
	<main id="content" class="main">
		<div class="full-width_hero"></div>
		<article class="full-width_content animate__animated animate__fadeIn">
			<div class="wrap">
				<header class="content-header">
					<h1 class="primary-heading">Style Guide</h1>
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
								<span>Information</span>
							</div>
						</div>
					</div>
				</header>
				<div class="content-item">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit earum alias possimus rerum beatae quo ullam velit accusantium placeat ad molestias distinctio at nisi ex enim vero fugiat, suscipit ut. Repellendus distinctio blanditiis impedit repudiandae laborum molestias dolorum, ab magnam deleniti, accusantium, nihil libero nisi quaerat amet nobis! Excepturi, maxime voluptatum incidunt voluptates repellat ad labore architecto fugit, atque doloribus rem cumque dolore maiores nostrum rerum nemo quis reprehenderit. Aliquid non unde amet facere iure excepturi numquam sunt? Nobis ullam ex rem incidunt unde provident, totam sapiente minima, omnis hic asperiores praesentium architecto repellat cumque vero iusto aliquid tenetur?</p>
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