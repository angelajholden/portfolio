<?php include_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php 
$title = 'Angela J Holden | Software Engineer &amp; Frontend Developer';
include_once __DIR__ . '/includes/head.php' ?>

<body>
	<?php include_once __DIR__ . '/includes/header.php'; ?>
	<main id="content" class="main">
		<h1 class="access-hidden">Angela J Holden | Software Engineer &amp; Frontend Developer</h1>
		<section class="top-banner_hero animate__animated animate__fadeIn">
			<div class="wrap">
				<div class="text-wrap_hero">
					<h2 class="secondary-heading">
						<span>Design.</span>
						<span>Develop.</span>
						<span>Deploy.</span>
					</h2>
					<p>I'm Angela Holden. I build accessible, responsive web apps that perform across all devices and browsers.</p>
				</div>
				<figure class="image">
					<div class="image-container">
						<img src="<?php echo BASE_URL; ?>images/heidi-sheltie-dog-park-angelajholden.jpg" alt="Heidi the Sheltie at the dog park on a sunny day.">
					</div>
					<figcaption>Heidi the Sheltie at the dog park on a sunny day.</figcaption>
				</figure>
			</div>
		</section>
		<section class="featured-video_section">
			<div class="heading-wrap">
				<h2 class="secondary-heading">Featured Project</h2>
			</div>
			<div class="wrap">
				<figure class="image animate__animated" data-animation="animate__fadeInUp">
					<img src="<?php echo BASE_URL; ?>images/frontend-is-from-hell.jpeg" alt="YouTube thumbnail for Frontend is from Hell video">
				</figure>
				<div class="featured-content animate__animated animate__fast" data-animation="animate__fadeInUp">
					<h3 class="tertiary-heading">Let's Talk About Frontend 😈</h3>
					<p>Frontend development: love it or hate it, you can't ignore it. In this stream, I'm reacting to two very different takes on the frontend world. We'll talk about the good, the bad, and the hilarious truths about working in frontend, plus dive into the never-ending drama around frameworks.</p>
					<p>
						<a class="cta-link" href="https://www.youtube.com/live/8Di4M3GBS3I?si=mI6cBB0rUYTk3Md7&t=60" target="_blank">Watch the video on YouTube
							<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"/></svg>
						</a>
					</p>
				</div>
			</div>
		</section>
		<div class="dots">
			<div class="wrap">
				<div class="dot animate__animated" data-animation="animate__fadeInUp"></div>
				<div class="dot animate__animated animate__fast" data-animation="animate__fadeInUp"></div>
				<div class="dot animate__animated" data-animation="animate__fadeInUp"></div>
				<div class="dot animate__animated" data-animation="animate__fadeInUp"></div>
				<div class="dot animate__animated animate__fast" data-animation="animate__fadeInUp"></div>
				<div class="dot animate__animated" data-animation="animate__fadeInUp"></div>
				<div class="dot animate__animated animate__fast" data-animation="animate__fadeInUp"></div>
				<div class="dot animate__animated" data-animation="animate__fadeInUp"></div>
				<div class="dot animate__animated" data-animation="animate__fadeInUp"></div>
				<div class="dot animate__animated animate__fast" data-animation="animate__fadeInUp"></div>
			</div>
		</div>
		<section class="three-content_section">
			<div class="heading-wrap">
				<h2 class="secondary-heading">Frontend Philosophy</h2>
			</div>
			<div class="wrap">
				<article class="content-item animate__animated" data-animation="animate__fadeInUp">
					<h3 class="tertiary-heading">Design</h3>
					<p>My design approach begins with content, images and branding. I find the design process so much easier when I spend time on the messaging and branding before any code is written.</p>
				</article>
				<article class="content-item animate__animated animate__fast" data-animation="animate__fadeInUp">
					<h3 class="tertiary-heading">Develop</h3>
					<p>I love HTML, CSS and JavaScript. The development process is my favorite part of every project. At this point in my career, I think I can write CSS in my sleep, with both hands tied behind my back.</p>
				</article>
				<article class="content-item animate__animated" data-animation="animate__fadeInUp">
					<h3 class="tertiary-heading">Deploy</h3>
					<p>Often overlooked, DevOps is an important skill to have. Best practices must include version control and deployment, and an understanding of how to see one's own work in the broswer.</p>
				</article>
			</div>
		</section>
		<section class="three-card_hero animate__animated" data-animation="animate__fadeIn">
			<!-- <div class="dot-bg animate__animated animate__slow" data-animation="animate__fadeInLeft"></div> -->
			<div class="heading-wrap">
				<h2 class="secondary-heading dark">Latest Articles</h2>
			</div>
			<div class="wrap">
				<article class="hero-item">
					<figure class="image">
						<img src="<?php echo BASE_URL; ?>images/ajh-selfie.jpg" alt="Low Poly Geometric">
					</figure>
					<div class="item-content">
						<h3 class="tertiary-heading">
							<a href="#">Perfecting a Masonry Layout with a CSS Only Solution and No JavaScript Needed</a>
						</h3>
						<div class="item-meta">
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M332.64 64.58C313.18 43.57 286 32 256 32c-30.16 0-57.43 11.5-76.8 32.38-19.58 21.11-29.12 49.8-26.88 80.78C156.76 206.28 203.27 256 256 256s99.16-49.71 103.67-110.82c2.27-30.7-7.33-59.33-27.03-80.6zM432 480H80a31 31 0 01-24.2-11.13c-6.5-7.77-9.12-18.38-7.18-29.11C57.06 392.94 83.4 353.61 124.8 326c36.78-24.51 83.37-38 131.2-38s94.42 13.5 131.2 38c41.4 27.6 67.74 66.93 76.18 113.75 1.94 10.73-.68 21.34-7.18 29.11A31 31 0 01432 480z"/></svg>
								By Angela
							</span>
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M256 48C141.13 48 48 141.13 48 256s93.13 208 208 208 208-93.13 208-208S370.87 48 256 48zm96 240h-96a16 16 0 01-16-16V128a16 16 0 0132 0v128h80a16 16 0 010 32z"/></svg>
								<time datetime="2025-03-19">Mar 19, 2025</time>
							</span>
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M400 480a16 16 0 01-10.63-4L256 357.41 122.63 476A16 16 0 0196 464V96a64.07 64.07 0 0164-64h192a64.07 64.07 0 0164 64v368a16 16 0 01-16 16z"/></svg>
								Tutorial
							</span>
						</div>
						<p class="read-more-link">
							<a href="#">
								<span class="access-hidden">Read more about: Perfecting a Masonry Layout with CSS; JavaScript not Required</span>
								<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"/></svg>
							</a>
						</p>
					</div>
				</article>
				<article class="hero-item">
					<figure class="image">
						<img src="<?php echo BASE_URL; ?>images/downtown-mpls-hero.jpg" alt="Low Poly Geometric">
					</figure>
					<div class="item-content">
						<h3 class="tertiary-heading">
							<a href="#">Perfecting a Masonry Layout</a>
						</h3>
						<div class="item-meta">
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M332.64 64.58C313.18 43.57 286 32 256 32c-30.16 0-57.43 11.5-76.8 32.38-19.58 21.11-29.12 49.8-26.88 80.78C156.76 206.28 203.27 256 256 256s99.16-49.71 103.67-110.82c2.27-30.7-7.33-59.33-27.03-80.6zM432 480H80a31 31 0 01-24.2-11.13c-6.5-7.77-9.12-18.38-7.18-29.11C57.06 392.94 83.4 353.61 124.8 326c36.78-24.51 83.37-38 131.2-38s94.42 13.5 131.2 38c41.4 27.6 67.74 66.93 76.18 113.75 1.94 10.73-.68 21.34-7.18 29.11A31 31 0 01432 480z"/></svg>
								By Angela
							</span>
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M256 48C141.13 48 48 141.13 48 256s93.13 208 208 208 208-93.13 208-208S370.87 48 256 48zm96 240h-96a16 16 0 01-16-16V128a16 16 0 0132 0v128h80a16 16 0 010 32z"/></svg>
								<time datetime="2025-03-19">Mar 19, 2025</time>
							</span>
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M400 480a16 16 0 01-10.63-4L256 357.41 122.63 476A16 16 0 0196 464V96a64.07 64.07 0 0164-64h192a64.07 64.07 0 0164 64v368a16 16 0 01-16 16z"/></svg>
								Tutorial
							</span>
						</div>
						<p class="read-more-link">
							<a href="#">
								<span class="access-hidden">Read more about: Perfecting a Masonry Layout with CSS; JavaScript not Required</span>
								<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"/></svg>
							</a>
						</p>
					</div>
				</article>
				<article class="hero-item">
					<figure class="image">
						<img src="<?php echo BASE_URL; ?>images/ust-background.jpg" alt="Low Poly Geometric">
					</figure>
					<div class="item-content">
						<h3 class="tertiary-heading">
							<a href="#">Perfecting a Masonry Layout with CSS; JavaScript not Required</a>
						</h3>
						<div class="item-meta">
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M332.64 64.58C313.18 43.57 286 32 256 32c-30.16 0-57.43 11.5-76.8 32.38-19.58 21.11-29.12 49.8-26.88 80.78C156.76 206.28 203.27 256 256 256s99.16-49.71 103.67-110.82c2.27-30.7-7.33-59.33-27.03-80.6zM432 480H80a31 31 0 01-24.2-11.13c-6.5-7.77-9.12-18.38-7.18-29.11C57.06 392.94 83.4 353.61 124.8 326c36.78-24.51 83.37-38 131.2-38s94.42 13.5 131.2 38c41.4 27.6 67.74 66.93 76.18 113.75 1.94 10.73-.68 21.34-7.18 29.11A31 31 0 01432 480z"/></svg>
								By Angela
							</span>
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M256 48C141.13 48 48 141.13 48 256s93.13 208 208 208 208-93.13 208-208S370.87 48 256 48zm96 240h-96a16 16 0 01-16-16V128a16 16 0 0132 0v128h80a16 16 0 010 32z"/></svg>
								<time datetime="2025-03-19">Mar 19, 2025</time>
							</span>
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M400 480a16 16 0 01-10.63-4L256 357.41 122.63 476A16 16 0 0196 464V96a64.07 64.07 0 0164-64h192a64.07 64.07 0 0164 64v368a16 16 0 01-16 16z"/></svg>
								Tutorial
							</span>
						</div>
						<p class="read-more-link">
							<a href="#">
								<span class="access-hidden">Read more about: Perfecting a Masonry Layout with CSS; JavaScript not Required</span>
								<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"/></svg>
							</a>
						</p>
					</div>
				</article>
			</div>
			<a class="button white-border-green" href="<?php echo BASE_URL; ?>articles/">All Articles</a>
		</section>
	</main>
	<?php include_once __DIR__ . '/includes/footer.php'; ?>
</body>

</html>