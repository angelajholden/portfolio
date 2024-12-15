<?php
include_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Angela J Holden</title>
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>styles.css" />
</head>

<body>
	<?php include_once __DIR__ . '/includes/header.php'; ?>
	<main class="main">
		<!-- full width image in a container with a defined height, goes beneath the header which is fixed -->
		<section class="hero">
			<figure class="hero-image">
				<img src="<?php echo BASE_URL; ?>images/downtown-mpls-hero.jpg" alt="Photo of downtown Minneapolis from the 3rd Street Bridge." />
			</figure>
		</section>
		<section class="skills-experience">
			<div class="wrap">
				<figure class="image-with-background">
					<img src="<?php echo BASE_URL; ?>images/ajh-selfie.jpg" alt="Selfie of Angela J Holden from a video still frame." />
				</figure>
				<div class="text-container">
					<h2 class="secondary-heading">Experience &amp; Skills</h2>
					<ul class="list">
						<li>
							<strong>Frontend Development:</strong>
							HTML, CSS, SCSS, Vanilla JavaScript, Vue.js (primary framework), Angular (used occasionally), responsive design, accessibility (a11y).
						</li>
						<li>
							<strong>Backend Development:</strong>
							Node.js, Express.js, LAMP stack, Velocity, PHP.
						</li>
						<li>
							<strong>APIs and Data:</strong>
							REST APIs, Python (web scraping, data extraction).
						</li>
						<li>
							<strong>Tools and Workflows:</strong>
							Git, GitHub Actions, Grunt, Bash/Zsh Terminal, CI/CD pipelines.
						</li>
						<li>
							<strong>Leadership and Collaboration:</strong>
							Mentoring junior developers, leading frontend projects, fostering team collaboration, conducting code reviews, establishing frontend development best practices, and promoting accessibility (a11y) and DevOps knowledge among frontend teams.
						</li>
						<li>
							<strong>Other Skills:</strong>
							Experience live streaming frontend development on YouTube and creating custom OBS scenes.
						</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="current-duties">
			<figure class="image-half-screen">
				<img src="<?php echo BASE_URL; ?>images/ust-background.jpg" alt="University of St. Thomas and Anderson Student Center with red flowering bushes." />
			</figure>
			<div class="text-container">
				<h2 class="secondary-heading">Current Position</h2>
				<h3 class="tertiary-heading">Manager of Frontend Development</h3>
				<p>University of St. Thomas, Minnesota</p>
				<p>February 2018 - Present</p>
				<p><a class="button white-hollow-blue" href="https://www.stthomas.edu" target="_blank">St. Thomas Website</a></p>
			</div>
		</section>
		<section class="youtube">
			<div class="wrap">
				<figure class="video">
					<iframe class="embed-video" width="560" height="315" src="https://www.youtube.com/embed/8Di4M3GBS3I?si=6zSUgVLoNwu40IuP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</figure>
				<article class="video-content">
					<h2 class="secondary-heading">Let's Talk About Frontend Development</h2>
					<p>Frontend development: love it or hate it, you can't ignore it. In this stream, I'm reacting to two very different takes on the frontend world.</p>
				</article>
			</div>
		</section>
		<section class="responsibilities">
			<h2 class="secondary-heading">Key Responsibilities</h2>
			<div class="wrap">
				<article class="item">
					<p>Spend significant time hands-on coding, implementing new features, optimizing existing ones, and ensuring we stick to frontend best practices.</p>
				</article>
				<article class="item">
					<p>Lead and manage a junior frontend developer, oversee the development calendar, delegate tasks using a Scrumban methodology.</p>
				</article>
				<article class="item">
					<p>Mentor a junior developer, provide guidance on coding standards, project workflows, and career development.</p>
				</article>
				<article class="item">
					<p>Responsible for hiring and mentoring, foster a positive and growth-oriented culture.</p>
				</article>
				<article class="item">
					<p>Create and maintain documentation for code base and development processes, for clarity and knowledge sharing across teams.</p>
				</article>
				<article class="item">
					<p>Develop and implement frontend best practices for QA, testing, and production deployment, including pull requests.</p>
				</article>
			</div>
		</section>
		<?php include_once __DIR__ . '/includes/social.php'; ?>
	</main>
	<?php include_once __DIR__ . '/includes/footer.php'; ?>
</body>

</html>