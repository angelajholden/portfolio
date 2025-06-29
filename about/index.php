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
					<h2 class="secondary-heading">Tech Stack &amp; Tools</h2>
					<ul class="list">
						<li>
							<strong>Languages &amp; Frontend:</strong>
							HTML, CSS, SCSS, Vanilla JavaScript, Velocity, PHP, Twig, Velocity, PHP, responsive design, accessibility (a11y), search engine optimization (SEO)
						</li>
						<li>
							<strong>Frameworks &amp; Libraries:</strong>
							jQuery, Vue JS, Angular, Node.js, Express.js
						</li>
						<li>
							<strong>Backend &amp; Databases:</strong>
							REST APIs, MongoDB, NoSQL, MySQL, Python, Java
						</li>
						<li>
							<strong>DevOps &amp; Workflows:</strong>
							Git, GitHub, GitHub Actions, Apache, Ubuntu, Linux, Heroku, DigitalOcean, NPM, NVM, Composer, Homebrew
						</li>
						<li>
							<strong>Extras:</strong>
							Markdown, VS Code, Terminal, OBS Studio
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
						<h2 class="secondary-heading">Allow myself to introduce... myself.</h2>
						<p>I build UIs with HTML, CSS, SCSS, and JavaScript live on YouTube. No frameworks and no libraries. Real projects built in real-time, from a frontend developer who's been doing this work for years.</p>
						<p>I came to tech from a completely different career, corporate law, and I've learned how powerful it is to take ownership of my time, my work, and my standards. That's what I try to model here.</p>
						<p>This is a space for people who take the work seriously. That doesn't mean you have to know everything; it means you're here to grow, ask better questions, and learn with an open mind.</p>
						<p>I built this channel to have fun and practice my own frontend skills. I'm not a character, this isn't a gimmick, and I'm not performing. It's me, doing the work the way I actually do it. If you're into that, you're in the right place.</p>
						<p>We also talk about devops, design inspiration, freelancing, and honestly, anything I feel like talking about. Because as much as I love being a developer, I'm also a real human.</p>
						<svg class="signatureSVG" aria-hidden="true" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="145px" height="94.469px" viewBox="0 0 145 94.469" enable-background="new 0 0 145 94.469" xml:space="preserve"><path d="M36.6,25.984c-0.084-7.937-0.898-20.638-9.965-23.872C20.648-0.023,13.98,1.422,9.348,5.71c-6.203,5.742-7.453,15.776-7.948,23.724c-0.62,9.946,0.248,20.474,4.435,29.608c2.728,5.953,8.422,12.167,15.522,9.121c7.511-3.222,11.028-11.226,13.722-18.437c2.592-6.937,5.823-17.759,1.023-24.436c-2.231-3.104-5.597-2.396-7.443,0.595c-3.494,5.66-3.977,14.827-3.805,21.33c0.142,5.339,2.768,16.454,10.101,15.857c5.945-0.483,10.264-5.366,13.243-10.113c3.057-4.869,6.384-13.218,2.097-18.321c-0.294-0.35-1.559,0.12-1.786,0.397c-2.597,3.163-1.958,8.792-1.579,12.528c0.339,3.335,1.271,10.401,5.398,11.41c8.736,2.134,13.233-10.014,14.939-16.425c0.137-0.515-1.689-0.024-1.908,0.332c-4.222,6.86,0.029,20.396,9.782,15.921c3.687-1.692,6.692-4.711,8.727-8.191c1.659-2.839,1.004-5.81-2.716-5.605c-2.978,0.164-8.471,0.785-10.131,3.855c-2.206,4.08,1.771,8.627,4.241,11.626c3.751,4.557,7.646,8.472,9.928,14.056c3.216,7.868,1.254,16.308-8.122,18.01c-0.78,0.142-1.704,0.992-0.35,0.746c6.691-1.215,11.717-4.785,11.898-12.063c0.208-8.328-5.8-14.838-10.891-20.656c-2.437-2.786-5.918-6.719-5.353-10.754c0.477-3.403,8.971-6.012,10.444-2.551c0.577,1.356-0.632,3.279-1.281,4.391c-2.798,4.787-8.732,9.404-13.69,4.657c-3.645-3.49-2.965-9.896-0.579-13.773c-0.636,0.11-1.272,0.222-1.908,0.332c-1.245,4.678-8.966,22.703-14.442,12.219c-2.44-4.671-4.297-15.757-0.654-20.193c-0.596,0.133-1.19,0.266-1.786,0.397c4.252,5.063,0.682,13.148-2.187,17.987c-1.78,3.004-4.154,5.758-7.063,7.713c-4.377,2.942-7.89-0.044-9.862-3.963c-3.381-6.717-2.781-14.363-1.675-21.518c0.496-3.207,1.2-6.465,2.582-9.416c2.27-4.853,5.283,1.62,5.873,4.247c2.036,9.076-2.557,20.268-6.737,28.136c-2.678,5.041-7.831,11.925-14.534,8.672c-4.829-2.344-7.365-8.656-9.015-13.396C1.226,40.462-0.283-4.063,24.145,2.554c9.579,2.594,10.439,16.003,10.523,23.948C34.672,26.849,36.605,26.554,36.6,25.984L36.6,25.984z"/><path d="M86.852,58.607c5.507-0.78,10.146-4.369,10.641-10.173c0.029-0.349-0.315-0.447-0.602-0.468c-6.907-0.484-12.04,7.337-9.349,13.584c2.53,5.877,9.522,5.229,14.217,3.013c12.082-5.707,19.728-18.113,21.533-30.889c0.716-5.068,1.648-12.387-1.498-16.865c-2.78-3.959-8.366,0.339-10.689,2.409c-5.988,5.339-8.373,14.526-9.662,22.101c-1.321,7.77-1.486,17.331,3.294,24.018c0.406,0.568,2.273-0.098,1.789-0.775c-7.407-10.361-3.718-27.581,1.326-38.183c1.448-3.046,8.194-13.309,12.154-8.794c2.815,3.21,1.977,9.796,1.655,13.608c-0.823,9.785-3.839,17.023-10.477,24.272c-3.937,4.298-10.245,10.514-16.625,9.543c-3.847-0.585-6.037-4.734-5.843-8.264c0.121-2.215,1.433-4.251,2.867-5.841c3.811-2.012,4.826-1.507,3.046,1.516c-1.262,2.898-4.562,4.628-7.532,5.049C86.142,57.604,85.52,58.796,86.852,58.607L86.852,58.607z"/><path d="M134.201,51.717c3.652-6.345-4.3-5.973-8.275-4.631c-6.271,2.115-12.847,7.855-10.071,15.041c0.198,0.513,0.975,0.498,1.383,0.271c2.466-1.37,3.577-1.936,4.014-4.861c-0.65,0.057-1.301,0.113-1.951,0.17c-0.962,11.115,15.236,14.77,23.621,12.943c1.207-0.264,0.856-1.501-0.332-1.242c-7.548,1.644-22.194-1.975-21.338-11.871c0.083-0.964-1.831-0.635-1.951,0.17c-0.268,1.791-1.348,2.771-2.896,3.633c0.461,0.09,0.922,0.181,1.383,0.271c-2.189-5.668,1.782-10.01,6.611-12.481c2.818-1.442,11.38-3.519,7.968,2.409C131.841,52.449,133.804,52.407,134.201,51.717L134.201,51.717z"/></svg>
					</article>
					<aside class="inspiration_sidebar">
						<h3 class="tertiary-header">Frontend is from Hell 😈</h3>
						<p><time datetime="2024-12-13">December 13, 2024</time></p>
						<p>Frontend development; love it or hate it, you can't ignore it. In this stream, I'm reacting to two very different takes on the frontend world. We'll talk about the good, the bad, and the never-ending drama around frameworks.</p>
						<p><a class="cta-link blue-solid" href="https://www.youtube.com/watch?v=DSoZbY6c3_8" target="_blank">Watch on YouTube</a></p>
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
					<h3 class="tertiary-header"><a href="#">Attorney Melanie Little</a></h3>
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