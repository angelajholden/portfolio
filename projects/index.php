<?php include_once dirname(__DIR__) . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php 
$title = 'Projects | Angela J Holden';
$description = 'These are frontend projects I built during live streams, with links to full access to source code, working demos, and YouTube playlists.';
$noindex = false; // or true, if you want to block this specific page
include_once dirname(__DIR__) . '/includes/head.php';
?>

<body>
	<?php include_once dirname(__DIR__) . '/includes/header.php'; ?>
	<main id="content" class="main">
		<section class="grid-projects animate__animated animate__fadeIn">
			<header class="content-header">
				<h1 class="primary-heading">Projects</h1>
				<p>These are frontend projects I built during live streams, with links to full access to source code, working demos, and YouTube playlists. Every project is made with HTML, CSS/SCSS, and JavaScript. No frameworks, just clean, accessible code.</p>
			</header>
			<div class="wrap">
				<article class="project-item animate__animated" data-animation="animate__fadeInUp">
					<figure class="image">
						<img src="<?php echo BASE_URL; ?>images/projects/angelajholden-portfolio-website.jpg" alt="Screenshot of project portfolio website">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">Personal Portfolio Website: PHP, HTML, SCSS & JavaScript</h2>
						<p>Follow along as I build my new website from the ground up using PHP, semantic HTML, SCSS, and vanilla JavaScript. There's plenty of project planning, QA, and real-time problem solving along the way—just like a real dev workflow.</p>
						<div class="project-links">
							<span class="link-item"><a href="https://www.youtube.com/playlist?list=PLiEcEGGtRVunuR44h5ey8rmOsldfRQhLO" target="_blank">YouTube</a></span>
							<span class="link-item"><a href="https://github.com/angelajholden/portfolio" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://ajh-portfolio-f3ffe192dce2.herokuapp.com/" target="_blank">Demo Site</a></span>
						</div>
					</div>
				</article>
				<article class="project-item animate__animated animate__fast" data-animation="animate__fadeInUp">
					<figure class="image">
						<img src="<?php echo BASE_URL; ?>images/projects/angelajholden-ocean-blog-static-website.jpg" alt="Screenshot of The Ocean static website">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">The Ocean: Blog website with HTML, SCSS & JavaScript</h2>
						<p>This is a simple, clean blog site built with HTML, SCSS, and vanilla JavaScript. It's based on a Photoshop mockup called Ocean - Personal Blog Template for Travelers and Dreamers, purchased from Envato/ThemeForest.</p>
						<div class="project-links">
							<span class="link-item"><a href="https://www.youtube.com/playlist?list=PLiEcEGGtRVumb3GPMVk2JYG687ysA3vN9" target="_blank">YouTube</a></span>
							<span class="link-item"><a href="https://github.com/angelajholden/blog" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://blog-website-3dcdb76fe42e.herokuapp.com/home/" target="_blank">Demo Site</a></span>

						</div>
					</div>
				</article>
				<article class="project-item animate__animated" data-animation="animate__fadeInUp">
					<figure class="image">
						<img src="<?php echo BASE_URL; ?>images/projects/angelajholden-style-guide.jpg" alt="Screenshot of style guide for project planning">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">Style Guide & Project Planning</h2>
						<p>In this project, we dive into the early stages of front-end project planning. Watch as we write user stories to define project goals and build a custom style guide using Affinity Photo. These videos lay the groundwork for strong, focused UI development.</p>
						<div class="project-links">
							<span class="link-item"><a href="https://www.youtube.com/playlist?list=PLiEcEGGtRVukAKceS2BLcQa11-zHuXbg4" target="_blank">YouTube</a></span>
							<span class="link-item"><a href="https://github.com/angelajholden/style-guide" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://style-guide-2be1404dfe00.herokuapp.com/" target="_blank">Demo Site</a></span>
						</div>
					</div>
				</article>
				<article class="project-item animate__animated" data-animation="animate__fadeInUp">
					<figure class="image">
						<img src="<?php echo BASE_URL; ?>images/projects/angelajholden-frontend-mentor-product-cart-with-list.jpg" alt="Screenshot of Frontend Mentor with Product Cart demo site">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">Frontend Mentor: Product List with Cart</h2>
						<p>Join me as I tackle a fun Frontend Mentor challenge where I'll build a product list with an interactive shopping cart from scratch! We'll dive into HTML, CSS, and JavaScript to create a clean, responsive layout, and I'll walk you through adding key features like item quantities, total pricing, and cart updates.</p>
						<div class="project-links">
							<span class="link-item"><a href="https://www.youtube.com/playlist?list=PLiEcEGGtRVul29O86zSMm1sN2JlEItpp7" target="_blank">YouTube</a></span>
							<span class="link-item"><a href="https://github.com/angelajholden/product-list-with-cart" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://product-list-with-cart-cbacd611a250.herokuapp.com/" target="_blank">Demo Site</a></span>
						</div>
					</div>
				</article>
				<article class="project-item animate__animated animate__fast" data-animation="animate__fadeInUp">
					<figure class="image">
						<img src="<?php echo BASE_URL; ?>images/projects/angelajholden-blog-layout-with-category-filter.jpg" alt="Screenshot of blog layout with a category filter">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">Blog Layout with Category Filter | Photoshop to Finish</h2>
						<p>Follow along as I build a responsive blog-style layout from a Photoshop mockup using HTML, SCSS, and JavaScript. In this series, I cover key steps from design setup to clean, accessible code, perfect for anyone looking to sharpen their front-end skills.</p>
						<div class="project-links">
							<span class="link-item"><a href="https://www.youtube.com/playlist?list=PLiEcEGGtRVunx37nAsnwD4k8TM_MmUcWN" target="_blank">YouTube</a></span>
							<span class="link-item"><a href="https://github.com/angelajholden/delta-layout" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://delta-layout-69096c0ff255.herokuapp.com/" target="_blank">Demo Site</a></span>
						</div>
					</div>
				</article>
				<article class="project-item animate__animated" data-animation="animate__fadeInUp">
					<figure class="image">
						<img src="<?php echo BASE_URL; ?>images/projects/angelajholden-masonry-layout.jpg" alt="Screenshot of a masonry layout">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">Build a Pinterest Masonry Layout</h2>
						<p>In this 2-part live stream series, watch as I walk through the step-by-step process of building a responsive masonry layout using HTML, SCSS, and JavaScript. From setting up the structure to creating a dynamic, Pinterest-style grid, you'll learn how to create a beautiful and functional layout that adapts to different screen sizes.</p>
						<div class="project-links">
							<span class="link-item"><a href="https://www.youtube.com/playlist?list=PLiEcEGGtRVumRhxEce2kz82XR-aa9FIGD" target="_blank">YouTube</a></span>
							<span class="link-item"><a href="https://github.com/angelajholden/masonry" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://masonry-454c1d7e5728.herokuapp.com/" target="_blank">Demo Site</a></span>
						</div>
					</div>
				</article>
				<article class="project-item animate__animated" data-animation="animate__fadeInUp">
					<figure class="image">
						<img src="<?php echo BASE_URL; ?>images/projects/angelajholden-modal-window-project.jpg" alt="Screenshot of modal window demo site">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">Build a Modal Window with HTML, SCSS &amp; JavaScript</h2>
						<p>In this live stream series, we'll break down building a modal window step by step using HTML, SCSS, and JavaScript. From the basic structure to styling and adding interactive features, you'll have everything you need to create your own custom modals.</p>
						<div class="project-links">
							<span class="link-item"><a href="https://www.youtube.com/playlist?list=PLiEcEGGtRVumXKmJ96pB18ytpBHQtyAcr" target="_blank">YouTube</a></span>
							<span class="link-item"><a href="https://github.com/angelajholden/modal-window" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://modal-window-f0e67a700e40.herokuapp.com/" target="_blank">Demo Site</a></span>
						</div>
					</div>
				</article>
				<article class="project-item animate__animated animate__fast" data-animation="animate__fadeInUp">
					<figure class="image">
						<img src="<?php echo BASE_URL; ?>images/projects/angelajholden-landing-page-html-css.jpg" alt="Screenshot of a landing page website">
					</figure>
					<div class="project-content">
						<h2 class="secondary-heading">Building a Landing Page | HTML, CSS & JavaScript</h2>
						<p>In this project, we're turning a Photoshop mockup into a fully functional landing page called Soho using HTML, vanilla CSS, and JavaScript. Over the course of eight live streams, we dive deep into creating a page that's responsive, accessible, and packed with smooth navigation and submenus (we spent 4 videos perfecting them).</p>
						<div class="project-links">
							<span class="link-item"><a href="https://www.youtube.com/playlist?list=PLiEcEGGtRVumTx-jL21z8rgjdQ-JKQNs7" target="_blank">YouTube</a></span>
							<span class="link-item"><a href="https://github.com/angelajholden/soho-layout" target="_blank">GitHub</a></span>
							<span class="link-item"><a href="https://soho-layout-9cc211b0fd69.herokuapp.com/" target="_blank">Demo Site</a></span>
						</div>
					</div>
				</article>
			</div>
		</section>
		<div class="dot-bg"></div>
	</main>
	<?php include_once dirname(__DIR__) . '/includes/footer.php'; ?>
</body>

</html>