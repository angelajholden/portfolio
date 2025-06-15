<?php include_once dirname(__DIR__) . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php 
$title = 'About Me | Angela J Holden | Software Engineer &amp; Frontend Developer';
$description = '';
$noindex = false; // or true, if you want to block this specific page
include_once dirname(__DIR__) . '/includes/head.php';
?>

<body>
	<?php include_once dirname(__DIR__) . '/includes/header.php'; ?>
	<main id="content" class="main">
		<section class="contact">
			<div class="wrap">
				<h2 class="secondary-heading">About Me</h2>
			</div>
		</section>
		<section class="skills-experience">
			<div class="wrap">
				<figure class="image-with-background animate__animated animate__slow" data-animation="animate__fadeInLeft">
					<img src="<?php echo BASE_URL; ?>images/ajh-selfie.jpg" alt="Selfie of Angela J Holden from a video still frame." />
				</figure>
				<div class="text-container animate__animated animate__slow" data-animation="animate__fadeInRight">
					<h2 class="secondary-heading">Experience &amp; Skills</h2>
					<ul class="list">
						<li>
							<strong>Frontend Development:</strong>
							HTML, CSS, SCSS, PostCSS, Vanilla JavaScript, jQuery, Vue JS, Angular, Astro, Twig (this project!), responsive design, accessibility (a11y), search engine optimization (SEO).
						</li>
						<li>
							<strong>Backend Development:</strong>
							Node.js, Express.js, LAMP stack, Velocity, PHP, MySQL, NoSQL.
						</li>
						<li>
							<strong>APIs and Data:</strong>
							REST APIs, Relational Databases, Python (web scraping and data extraction).
						</li>
						<li>
							<strong>Tools and Workflows:</strong>
							Git, GitHub Actions, Grunt, Bash/Zsh Terminal, CI/CD pipelines.
						</li>
						<li>
							<strong>Leadership and Collaboration:</strong>
							Mentoring junior developers, leading frontend projects, writing documentation, conducting code reviews, establishing frontend development best practices, promoting accessibility (a11y) and DevOps knowledge among frontend teams.
						</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="current-duties">
			<figure class="image-half-screen animate__animated animate__slow" data-animation="animate__fadeInBottomLeft">
				<img src="<?php echo BASE_URL; ?>images/ust-background.jpg" alt="University of St. Thomas and Anderson Student Center with red flowering bushes." />
			</figure>
			<div class="text-container animate__animated animate__slow" data-animation="animate__fadeInBottomRight">
				<h2 class="secondary-heading">Professional Experience</h2>
				<h3 class="tertiary-heading">Manager of Frontend Development</h3>
				<p>University of St. Thomas, Minnesota</p>
				<p>Saint Paul, MN</p>
				<p>February 2018 - March 2025</p>
				<p><a class="button white-hollow-blue" href="https://www.dropbox.com" target="_blank">View My Resume</a></p>
			</div>
		</section>
		<section class="youtube">
			<div class="wrap animate__animated" data-animation="animate__fadeInUp">
				<h2 class="secondary-heading">Find me on YouTube <a href="https://www.youtube.com/@angelajholden" target="_blank">@angelajholden</a></h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia numquam rerum quo! Obcaecati laudantium omnis dolorum aliquid nam quos vero quas deserunt, facilis, quod vitae quia eaque ullam aperiam ducimus?</p>
				<figure class="video">
					<iframe class="embed-video" width="560" height="315" src="https://www.youtube.com/embed/8Di4M3GBS3I?si=6zSUgVLoNwu40IuP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</figure>
				<article class="video-content">
					<h3 class="secondary-heading">Let's Talk About Frontend Development</h3>
					<p>Frontend development: love it or hate it, you can't ignore it. In this stream, I'm reacting to two very different takes on the frontend world.</p>
				</article>
			</div>
		</section>
	</main>
	<?php include_once dirname(__DIR__) . '/includes/footer.php'; ?>
</body>

</html>