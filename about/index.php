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
		<section class="about-header">
			<header class="content-header">
				<h1 class="primary-heading">About Me</h1>
				<p>Hi, I'm Angela, a software engineer and frontend developer. I've spent over a decade writing code, mentoring devs, and solving real problems across a wide range of projects. These days, I'm focused on teaching, streaming, and creating tools and content that help others learn.</p>
			</header>
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
		<!-- <section class="current-duties">
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
		</section> -->
		<!-- <section class="youtube">
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
		</section> -->
		<section class="inspiration">
			<div class="wrap">
				<figure class="image">
					<img src="<?php echo BASE_URL; ?>images/frontend-is-from-hell.jpeg" alt="Thumbnail for YouTube Video 'Frontend is from Hell'">
				</figure>
				<div class="content_wrap">
					<article class="inspiration_content">
						<h2 class="secondary-header">An Inspirational Blog About Flower</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A fugit sequi laudantium mollitia omnis repellendus iure qui quibusdam explicabo, nobis placeat accusamus totam eos est! Optio minima repellat natus fuga!</p>
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati molestias suscipit in velit ratione nobis aut facilis, animi, facere culpa fugit unde autem dolorum dolores ipsa a? At magni labore a! Expedita placeat ipsa obcaecati adipisci dolorum et! Enim repudiandae iusto ratione praesentium adipisci quidem ipsam ipsum illum hic minus.</p>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi deserunt quaerat ad unde quod perferendis, doloremque corporis amet ducimus dolores alias eaque laborum magni iste nihil. Eligendi sapiente minima quia velit harum unde impedit laborum commodi cum error? Est accusamus nemo nobis illum a, nulla voluptate obcaecati animi architecto, ratione consequuntur debitis quia pariatur nam repellat. Itaque cupiditate dignissimos blanditiis quam debitis corporis perspiciatis! Totam doloribus, consectetur porro placeat perspiciatis et numquam ullam perferendis maxime!</p>
					</article>
					<aside class="inspiration_sidebar">
						<h3 class="tertiary-header">Frontend is from Hell 😈</h3>
						<p><time datetime="2024-12-13">December 13, 2024</time></p>
						<p>Frontend development: love it or hate it, you can't ignore it. In this stream, I'm reacting to two very different takes on the frontend world. We'll talk about the good, the bad, and the hilarious truths about working in frontend, plus dive into the never-ending drama around frameworks.</p>
						<p><a href="https://www.youtube.com/watch?v=8Di4M3GBS3I" target="_blank">Watch "Frontend is from Hell"</a></p>
					</aside>
				</div>
			</div>
		</section>
		<section class="lawtubers">
			<div class="heading-wrap">
				<h2 class="secondary-heading">The LawTubers I Love</h2>
			</div>
			<div class="wrap">
				<article class="lawtuber-item">
					<figure class="image">
						<img src="<?php echo BASE_URL; ?>images/ajh-selfie.jpg" alt="alt text goes here">
					</figure>
					<h3 class="tertiary-header"><a href="#">Emily D. Baker</a></h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus atque amet nemo modi quia consectetur quam repellendus. Sint culpa molestiae fugit similique quas eos? Laudantium quae mollitia quidem vero cupiditate.</p>
				</article>
				<article class="lawtuber-item">
					<figure class="image">
						<img src="<?php echo BASE_URL; ?>images/ajh-selfie.jpg" alt="alt text goes here">
					</figure>
					<h3 class="tertiary-header"><a href="#">Attorney Melanie Litte</a></h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus atque amet nemo modi quia consectetur quam repellendus. Sint culpa molestiae fugit similique quas eos? Laudantium quae mollitia quidem vero cupiditate.</p>
				</article>
				<article class="lawtuber-item">
					<figure class="image">
						<img src="<?php echo BASE_URL; ?>images/ajh-selfie.jpg" alt="alt text goes here">
					</figure>
					<h3 class="tertiary-header"><a href="#">Andrea Burkhart</a></h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus atque amet nemo modi quia consectetur quam repellendus. Sint culpa molestiae fugit similique quas eos? Laudantium quae mollitia quidem vero cupiditate.</p>
				</article>
			</div>
		</section>
	</main>
	<?php include_once dirname(__DIR__) . '/includes/footer.php'; ?>
</body>

</html>