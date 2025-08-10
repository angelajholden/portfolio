<?php include_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php 
$title = 'Angela J Holden | Frontend Developer &amp; Software Engineer';
$description = 'Hi, I\'m Angela Holden. I build accessible, responsive websites and share the process through live streams, tutorials and developer mentorship.';
$noindex = false; // or true, if you want to block this specific page
include_once (__DIR__) . '/includes/head.php';
?>

<body>
	<h1 class="access-hidden">Angela J Holden | Frontend Developer &amp; Software Engineer</h1>
	<?php include_once __DIR__ . '/includes/header.php'; ?>
	<main id="content" class="main">
		<section class="top-banner_hero animate__animated animate__fadeIn">
			<div class="wrap">
				<div class="text-wrap_hero">
					<h2 class="secondary-heading">
						<span>Design.</span>
						<span>Develop.</span>
						<span>Deploy.</span>
					</h2>
					<p>I'm Angela Holden. I build accessible, responsive web apps, and share the process through live streaming and tutorials.</p>
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
					<img src="<?php echo BASE_URL; ?>images/angelajholden-resume-website.jpg" alt="YouTube thumbnail for Build a Printable Resume Website, HTML, CSS + JS Tutorial">
				</figure>
				<div class="featured-content animate__animated animate__fast" data-animation="animate__fadeInUp">
					<h3 class="tertiary-heading">Build a Printable Resume Website</h3>
					<p>In this real-time project build, we'll create a one-page resume site that's printable, accessible, and powered by vanilla HTML, CSS and JavaScript. You'll learn how to:</p>
					<ul>
						<li>Use @media print to create a printable layout</li>
						<li>Trigger the print dialog with JavaScript</li>
						<li>Structure a semantic one-page resume</li>
						<li>Style the layout using CSS Grid</li>
					</ul>
					<p>
						<a class="cta-link blue-solid" href="https://youtu.be/QoT0m1zvROM" target="_blank">Watch on YouTube
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
			<div class="dot-bg"></div>
			<div class="heading-wrap">
				<h2 class="secondary-heading dark">Latest Articles</h2>
			</div>
			<div class="wrap">
				<article class="hero-item">
					<figure class="image">
						<img src="<?php echo BASE_URL; ?>images/articles/angelajholden-trader-joes-cart.jpg" alt="A glass of wine">
					</figure>
					<div class="item-content">
						<h3 class="tertiary-heading">
							<a href="articles/answering-your-freelancing-questions/">Freelancing Q&A: Boundaries, Burnout, Niching Down, and Lessons Learned</a>
						</h3>
						<div class="item-meta">
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M332.64 64.58C313.18 43.57 286 32 256 32c-30.16 0-57.43 11.5-76.8 32.38-19.58 21.11-29.12 49.8-26.88 80.78C156.76 206.28 203.27 256 256 256s99.16-49.71 103.67-110.82c2.27-30.7-7.33-59.33-27.03-80.6zM432 480H80a31 31 0 01-24.2-11.13c-6.5-7.77-9.12-18.38-7.18-29.11C57.06 392.94 83.4 353.61 124.8 326c36.78-24.51 83.37-38 131.2-38s94.42 13.5 131.2 38c41.4 27.6 67.74 66.93 76.18 113.75 1.94 10.73-.68 21.34-7.18 29.11A31 31 0 01432 480z"/></svg>
								Angela
							</span>
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M256 48C141.13 48 48 141.13 48 256s93.13 208 208 208 208-93.13 208-208S370.87 48 256 48zm96 240h-96a16 16 0 01-16-16V128a16 16 0 0132 0v128h80a16 16 0 010 32z"/></svg>
								<time datetime="2025-06-15">Jun 15, 2025</time>
							</span>
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M400 480a16 16 0 01-10.63-4L256 357.41 122.63 476A16 16 0 0196 464V96a64.07 64.07 0 0164-64h192a64.07 64.07 0 0164 64v368a16 16 0 01-16 16z"/></svg>
								Tips &amp; Advice
							</span>
						</div>
						<p class="read-more-link">
							<a href="articles/answering-your-freelancing-questions/">
								<span class="access-hidden">Read more about: Freelancing Q&A: Boundaries, Burnout, Niching Down, and Lessons Learned</span>
								<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"/></svg>
							</a>
						</p>
					</div>
				</article>
				<article class="hero-item">
					<figure class="image">
						<img src="<?php echo BASE_URL; ?>images/articles/angelajholden-tips-for-freelancers.jpg" alt="A piece of carrot cake">
					</figure>
					<div class="item-content">
						<h3 class="tertiary-heading">
							<a href="articles/how-to-start-freelancing/">How to Start Freelancing as a Frontend Developer</a>
						</h3>
						<div class="item-meta">
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M332.64 64.58C313.18 43.57 286 32 256 32c-30.16 0-57.43 11.5-76.8 32.38-19.58 21.11-29.12 49.8-26.88 80.78C156.76 206.28 203.27 256 256 256s99.16-49.71 103.67-110.82c2.27-30.7-7.33-59.33-27.03-80.6zM432 480H80a31 31 0 01-24.2-11.13c-6.5-7.77-9.12-18.38-7.18-29.11C57.06 392.94 83.4 353.61 124.8 326c36.78-24.51 83.37-38 131.2-38s94.42 13.5 131.2 38c41.4 27.6 67.74 66.93 76.18 113.75 1.94 10.73-.68 21.34-7.18 29.11A31 31 0 01432 480z"/></svg>
								Angela
							</span>
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M256 48C141.13 48 48 141.13 48 256s93.13 208 208 208 208-93.13 208-208S370.87 48 256 48zm96 240h-96a16 16 0 01-16-16V128a16 16 0 0132 0v128h80a16 16 0 010 32z"/></svg>
								<time datetime="2025-06-15">Jun 15, 2025</time>
							</span>
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M400 480a16 16 0 01-10.63-4L256 357.41 122.63 476A16 16 0 0196 464V96a64.07 64.07 0 0164-64h192a64.07 64.07 0 0164 64v368a16 16 0 01-16 16z"/></svg>
								Tips &amp; Advice
							</span>
						</div>
						<p class="read-more-link">
							<a href="articles/how-to-start-freelancing/">
								<span class="access-hidden">Read more about: How to Start Freelancing as a Frontend Developer</span>
								<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"/></svg>
							</a>
						</p>
					</div>
				</article>
				<article class="hero-item">
					<figure class="image">
						<img src="<?php echo BASE_URL; ?>images/articles/angelajholden-how-to-practice-javascript.jpg" alt="Tennis player practing with pink tennis balls">
					</figure>
					<div class="item-content">
						<h3 class="tertiary-heading">
							<a href="articles/how-to-practice-javascript/">How to Practice JavaScript, with an Example</a>
						</h3>
						<div class="item-meta">
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M332.64 64.58C313.18 43.57 286 32 256 32c-30.16 0-57.43 11.5-76.8 32.38-19.58 21.11-29.12 49.8-26.88 80.78C156.76 206.28 203.27 256 256 256s99.16-49.71 103.67-110.82c2.27-30.7-7.33-59.33-27.03-80.6zM432 480H80a31 31 0 01-24.2-11.13c-6.5-7.77-9.12-18.38-7.18-29.11C57.06 392.94 83.4 353.61 124.8 326c36.78-24.51 83.37-38 131.2-38s94.42 13.5 131.2 38c41.4 27.6 67.74 66.93 76.18 113.75 1.94 10.73-.68 21.34-7.18 29.11A31 31 0 01432 480z"/></svg>
								Angela
							</span>
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M256 48C141.13 48 48 141.13 48 256s93.13 208 208 208 208-93.13 208-208S370.87 48 256 48zm96 240h-96a16 16 0 01-16-16V128a16 16 0 0132 0v128h80a16 16 0 010 32z"/></svg>
								<time datetime="2025-06-15">Jun 15, 2025</time>
							</span>
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M400 480a16 16 0 01-10.63-4L256 357.41 122.63 476A16 16 0 0196 464V96a64.07 64.07 0 0164-64h192a64.07 64.07 0 0164 64v368a16 16 0 01-16 16z"/></svg>
								Tutorials
							</span>
						</div>
						<p class="read-more-link">
							<a href="articles/how-to-practice-javascript/">
								<span class="access-hidden">Read more about: How to Practice JavaScript, with an Example</span>
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