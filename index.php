<?php include_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php 
$title = 'Angela J. Holden | Frontend Developer &amp; Software Engineer';
$description = 'Angela J. Holden is a frontend developer and software engineer in Saint Paul, MN, available for freelance web development and frontend consulting.';
$noindex = false; // or true, if you want to block this specific page
$canonicalPath = '';
include_once (__DIR__) . '/includes/head.php';
?>

<body>
	<h1 class="access-hidden">Angela J. Holden | Frontend Developer &amp; Software Engineer</h1>
	<?php include_once __DIR__ . '/includes/header.php'; ?>
	<main id="content" class="main">
		<section class="top-banner_hero animate__animated animate__fadeIn">
			<div class="wrap">
				<div class="text-wrap_hero">
					<h2 class="secondary-heading">Need help with your website?</h2>
					<p>I'm Angela Holden, a frontend developer and software engineer in Saint Paul, MN. I'm available for freelancing and consulting. <a href="<?php echo BASE_URL; ?>contact/">Contact me</a> if you'd like help with your project.</p>
				</div>
				<figure class="figure">
					<div class="image-container">
						<img src="<?php echo BASE_URL; ?>images/heidi-sheltie-dog-park-angelajholden.jpg" alt="Heidi the Sheltie at the dog park on a sunny day.">
					</div>
					<figcaption>Heidi the Sheltie at the dog park on a sunny day.</figcaption>
				</figure>
			</div>
		</section>
		<section class="three-content_section">
			<div class="heading-wrap">
				<h2 class="secondary-heading">Development Philosophy</h2>
				<p><strong>Need a Website?</strong> I'm available for select freelance web development projects. I build fast, accessible, and responsive sites using HTML, CSS and JavaScript.</p>
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
			<p class="animate__animated" data-animation="animate__fadeInUp">
				<a class="cta-link blue-solid" href="<?php echo BASE_URL; ?>contact/">Get in Touch!</a>
			</p>
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
		<section class="featured-video_section">
			<div class="heading-wrap">
				<h2 class="secondary-heading">Recent Video</h2>
			</div>
			<div class="wrap">
				<figure class="figure yt_video animate__animated" data-animation="animate__fadeInUp" data-video-id="AXScDDHe7Yc">
					<div class="yt_video-wrap">
						<button type="button" class="play_button" aria-label="Play Video">
							<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M133 440a35.37 35.37 0 01-17.5-4.67c-12-6.8-19.46-20-19.46-34.33V111c0-14.37 7.46-27.53 19.46-34.33a35.13 35.13 0 0135.77.45l247.85 148.36a36 36 0 010 61l-247.89 148.4A35.5 35.5 0 01133 440z"/></svg>
						</button>
						<img class="yt_thumb" src="https://img.youtube.com/vi/AXScDDHe7Yc/maxresdefault.jpg" alt="My Codex Workflow for Website Content and Accessibility Updates">
					</div>
					<figcaption class="access-hidden">I Used Codex to Audit a Real Website for SEO</figcaption>
				</figure>
				<div class="featured-content animate__animated animate__fast" data-animation="animate__fadeInUp">
					<h3 class="tertiary-heading">Use AI to Audit a Real Website for SEO</h3>
					<p>In this video, I walk through a real technical SEO audit of my Responsive Video Gallery project using Codex. We start with a read-only discovery audit, narrow the scope, implement foundational SEO improvements, explore structured data, deploy the changes, and review the final result.</p>
					<p><a class="cta-link blue-solid" href="https://github.com/angelajholden/frontend-audit" target="_blank">Github: Frontend Audit</a></p>
				</div>
			</div>
		</section>
	</main>
	<?php include_once __DIR__ . '/includes/footer.php'; ?>
</body>

</html>