<?php include_once dirname(__DIR__) . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php 
$title = 'Terms &amp; Conditions | Angela J Holden | Software Engineer &amp; Frontend Developer';
$description = '';
$noindex = false; // or true, if you want to block this specific page
include_once dirname(__DIR__) . '/includes/head.php';
?>

<body>
	<?php include_once dirname(__DIR__) . '/includes/header.php'; ?>
	<main id="content" class="main">
		<div class="full-width_hero"></div>
		<article class="full-width_content animate__animated animate__fadeIn">
			<div class="wrap">
				<header class="content-header">
					<h1 class="primary-heading">Terms &amp; Conditions</h1>
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
					<p>Everything I share here—including tutorials, articles, PDFs, and code snippets—is offered freely and in good faith. You're welcome to use and adapt what you find, but I can't make guarantees about results or fitness for a particular purpose. Please use your best judgment when applying anything to your own projects.</p>
					<p>All content on this site is my original work unless otherwise noted. Please don't republish it without permission. Sharing links is always appreciated! If you have any questions, please reach out through the <a href="../contact/">contact form</a>.</p>
					<h2>Affiliate Disclosure</h2>
					<p>Some links on this site are affiliate links — <em>like the one for <a href="https://m.do.co/c/510e633915b2" target="_blank" rel="nofollow noopener">DigitalOcean</a>.</em> If you sign up through them, I may earn a small commission at no cost to you. I only recommend what I use and love.</p>
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