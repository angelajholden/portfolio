<?php include_once dirname(__DIR__) . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php 
$title = 'About Me | Angela J Holden';
$description = 'Hi, I\'m Angela, a software engineer and frontend developer. I\'ve spent over a decade writing code, mentoring devs, and solving real problems.';
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
					<h2 class="secondary-heading">Tech Stack, Tools &amp; Skills</h2>
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
		<section class="inspiration">
			<div class="wrap">
				<figure class="image">
					<img src="<?php echo BASE_URL; ?>images/frontend-is-from-hell.jpeg" alt="Thumbnail for YouTube Video 'Frontend is from Hell'">
				</figure>
				<div class="content_wrap">
					<article class="inspiration_content">
						<h2 class="secondary-header">Allow myself to introduce... myself.</h2>
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
				<h2 class="secondary-heading">The LawTubers I
					<span class="love-heart">
						<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path class="prefix__st0" d="M169.3 32c-4.1-6.3-9.8-8.9-15.9-9.2-1.4-.6-3.1-.8-4.8-.4-1.5.4-3 .9-4.5 1.5-9.4 2.5-19 8.5-25.6 13.5-7.1 5.3-13.3 11.7-18.5 18.7-3-9.2-7.5-17.9-13.5-25.7C76.8 17.9 59.7 1.5 41.7 5.6c-9.6 2.1-13.8 9.9-15 18.7-1.5 10.9-1.9 21.8-1.2 32.7 1.3 22 6.6 43.5 13.8 64.4 8.3 23.9 19 47 29.8 69.9 3.3 6.9 12.6 3 13.2-3.3 1.7.4 3.6.2 5-.8 33.1-24.8 59.5-57 75.9-94.3C171 75 181.4 50.4 169.3 32zm-50.9 38.5c5-6.9 10.3-13.7 15.9-20.2 1.1-1.3 2.2-2.5 3.3-3.8-9.6 24-25.4 45.4-37.5 68.5 0-2.5-.1-5-.2-7.5 0-2-.8-3.6-1.9-4.7 6.1-11.2 12.9-22 20.4-32.3zm-60.8-31l.2.2c1.2 1.6 2.4 3.3 3.5 5 .7 1 1.3 2 2 3-.9 1.1-1.4 2.5-1.3 4.3.4 7.2.8 14.4 1.2 21.7-.2-.8-.3-1.5-.5-2.3-2-9.3-4.1-18.8-5-28.3-.1-1.1-.1-2.3-.1-3.6zM101 156.9s.1.1 0 0v0zm8.9-25.3c7-11.6 14.7-22.7 23.1-33.3-6.9 11.4-14.9 22.5-23.1 33.3zm50.3-78.5c-2.2-.5-4.7 0-6.6 1.7-2.5 2.3-4.8 4.6-7.2 7 3.8-7.7 7-15.5 9.4-23.8 1.1.9 1.9 2.3 2.6 3.9 1.5 3.6 1.9 7.3 1.8 11.2zm-74.7 5.2C82 50.9 78 43.7 73.3 36.8c5.3 6.4 9.4 13.7 12.2 21.5zM41 26.3c.4-2.8.7-6.2 3.9-7.1 2.5-.7 5.8.2 8.3 1.2-2.2.2-4.5 1.2-6.6 3.5-6.6 6.8-3.5 19.6-2.3 27.8 3.4 23.4 9.4 46.6 14.3 69.8 1.3 6.5 2.4 13 3.6 19.5-8.1-19.7-15-39.8-19.1-60.7-3.5-17.5-4.8-36.2-2.1-54z"/></svg>
					</span>
					Love
				</h2>
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