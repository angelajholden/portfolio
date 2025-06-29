<?php include_once dirname(__DIR__) . '/../config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php 
$title = 'Five Tips for Junior Developers | Angela J Holden';
$description = 'I\'ve been a frontend developer for 12 years, many of those as a hiring manager, and these are all things that helped me to get a job.';
$noindex = false; // or true, if you want to block this specific page
include_once dirname(__DIR__) . '/../includes/head.php';
?>

<body>
	<?php include_once dirname(__DIR__) . '/../includes/header.php'; ?>
	<main id="content" class="main">
		<div class="full-width_hero"></div>
		<article class="full-width_content animate__animated animate__fadeIn">
			<div class="wrap">
				<header class="content-header">
					<h1 class="primary-heading">Five Tips for Junior Developers</h1>
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
								<time datetime="2025-04-05">Apr 5, 2025</time>
							</div>
							<div class="meta-item">
								<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M400 480a16 16 0 01-10.63-4L256 357.41 122.63 476A16 16 0 0196 464V96a64.07 64.07 0 0164-64h192a64.07 64.07 0 0164 64v368a16 16 0 01-16 16z"/></svg>
								<span>Tips &amp; Advice</span>
							</div>
						</div>
					</div>
				</header>
				<div class="content-item">
					<p>I've been a frontend developer for 12 years, many of those as a hiring manager, and these are all things that helped me to get a job.</p>
					<p><em>Note: This post contains affiliate links. If you use these links to sign up, I may earn a commission at no extra cost to you. I only recommend tools I personally use and love.</em></p>

					<h2>One: Make a personal website</h2>
					<p>The feedback I got more than anything else was that I had an eye for design. Prospective clients said my aesthetic matched their aesthetic and and I was hired for several projects because the client liked my style which was clearly demonstrated in my website.</p>
					<p>I don't think an <em>eye for design</em> is the same as being <em>a designer</em>, which I have never considered myself to be. But it did convey a sense to prospective clients and employers I had a design aesthetic that matched what they were trying to achieve, which gave me credibility. And frankly, it's not something I see very often from new developers.</p>
					<p>Frontend code is the thing that everyone sees regardless of the tech stack it's built on. As users of the internet, frontend developers tend to notice the things that work, or don't work, and should be inspired to write frontend code on their own and to develop their own aesthetic.</p>
					<p>Trust me, once you do get a job and experience the hellscape of code reviews, you'll need something of your own where no one call tell you what to do.</p>
					<p>Don't overthink creating a portfolio. Find a photoshop mockup, or find something online that you think looks interesting, Build it and deploy it. If you want to practice following a design brief you could try a website like Frontend Mentors which has a lot of free projects. The point is, websites are in a constant state of improvements and maintenance. Don't let analysis paralysis stop you from creating something that represents your skills and style. Embrace that you're not sure what you're doing, and allow the creative process to guide you.</p>
					<p>This is a skill you'll lean heavily on in your career, because it is exceedingly rare that you will be handed clear instructions on every project you work on.</p>
					<p>A personal website is your chance to make anything you want! It's your chance to experiment with your own sense of design and practice building things no one else will ask you to build. And It will give prospective employers a good idea of what you're capable of.</p>

					<figure>
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/articles/clifford-VobvKmG-StA-unsplash.jpg" alt="The interior of a coffee shop" />
					</figure>

					<h2>Two: Create a portfolio of projects</h2>
					<p>This one piggy backs off of building your own website. It's never been easier to show off your skills as a frontend developer. It's totally fine if you don't freelance or do client work. But you should still be practicing building user interfaces or UI elements and putting those in your portfolio of projects.</p>
					<p>When you work on small projects that include a Github repository and then deploy it to a server or even something like Heroku, that will stand out to prospective employers. When you have a Github with a readme to explain the project, and a URL to see the project deployed, those things are part of your portfolio, in addition to being great practice for keeping your skills fresh.</p>
					<p>After more than a decade, I still practice building things I think look interesting. All of those things have a Github repository and are deployed to a demo site with a URL. I consider everything I work on to be open source and a part of my portfolio.</p>

					<h2>Three: Don't try to learn every framework</h2>
					<p>Regardless of what kind of developer you are, make sure you have a deep understanding of core foundational concepts. As a frontend developer, it doesn't matter if you know PostCSS or Tailwind if you can't tell the difference between <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/display" target="_blank" rel="noopener">display: block, display: inline-block and display: inline</a>.</p>
					<pre>
						<code class="language-scss">
							/* MDN Web Docs display propery
							https://developer.mozilla.org/en-US/docs/Web/CSS/display
							*/

							/* The element generates a block box, generating line breaks
							both before and after the element when in the normal flow.
							*/
							div {display: block;}

							/* The element generates a block box that will be flowed
							with surrounding content as if it were a single inline box
							(behaving much like a replaced element would).
							*/
							div {display: inline-block;}

							/* The element generates one or more inline boxes that do not
							generate line breaks before or after themselves. In normal flow,
							the next element will be on the same line if there is space.
							*/
							div {display: inline;}
						</code>
					</pre>

					<p>Know the the difference between a <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/div" target="_blank" rel="noopener">div</a> and a <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/span" target="_blank" rel="noopener">span</a>, and why you use one over the other.</p>
					<p>You never know what you'll be asked in a job interview. In my first interview I was asked to define what the letters CSS stand for, and explain <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/z-index" target="_blank" rel="noopener">z-index</a>. I've been asked the difference between forEach and map in JavaScript. I've been asked if I can use the terminal or if I rely on a GUI for git.</p>
					<p>I interviewed for a React position once when I was very clear that I had never used React. They wanted to talk to me because I had a lot of experience, but I was still very new to JavaScript at that time. I couldn't answer a lot of the vanilla JavaScript questions they asked (which was really embarrassing). But I learned a lot from that interview about the core JavaScript skills I should be working on.</p>
					<p>In my last position I was given a coding challenge that included writing an SQL query. I was in that position for seven years and never once had to write an SQL query to do my job. They were checking to see what kind of a problem solver I was. My point here is, you don't know what they're going to ask you, but each of these examples stands out to me as being foundational. They're not questions about a specific framework, they're questions to see if you have a basic understanding and can solve problems.</p>

					<h2>Four: Adopt an agile mindset</h2>
					<p>Having an agile mindset is not the same as embracing an Agile or Scrum methodology.</p>
					<p>Side note, I watched <a href="https://www.youtube.com/watch?v=Nd7wrC62LEk" target="_blank" rel="noopener">a podcast with Emmanuel Maggiori</a>, a computer scientist and author, and he talked about his experience working on agile teams for big tech companies. Hearing him describe Agile methodologies confirmed what I've suspected for a while; that Agile has become rigid and inflexible in many organizations.</p>
					<p>The point of this tip is this, it doesn't matter if you work on a team that is still using a waterfall methodology, or a team like mine that's more like <a href="https://www.atlassian.com/agile/project-management/scrumban" target="_blank" rel="noopener">Scrumban</a>. I want you to be flexible, and be willing to jump from task to task, and project to project. Get into the habit of being willing to learn new things quickly. Learn to be amazing at problem solving whether that's being great at Googling, or writing really good AI prompts.</p>
					<p>It's worth noting; AI is amazing, but there are organizations who don't allow their developers to use things like ChatGPT because they don't want proprietary data or code being shared with those apps. So even though these solutions exist, Googling, YouTube and reading documentation may continue to be your best options for problem solving.</p>
					<p>I firmly believe the thing that will elevate you from Junior Developer is your ability to remain flexible and be a great problem solver.</p>

					<h2>Five: Embrace DevOps</h2>
					<p>We all share responsibility for DevOps. If you write any code that is deployed, you influence DevOps. And if you push to Github and deploy to a server, you're way ahead of a lot of junior frontend developers that I've met. Bonus points if you have a domain name and have configured the DNS settings.</p>
					<p>This <a href="https://www.youtube.com/watch?v=ViNnV2W0pec" target="_blank" rel="noopener">video from Tech and Beyond with Moss</a> is a great lesson on the history of DevOps. He goes into a lot of detail about why DevOps isn't just the role or responsibility of one type of engineer, but rather why it's the responsibility of all developers. He also includes a lot of historical context on how the role of DevOps in software engineering emerged.</p>
					<p>Here's how this relates to you: How your code is deployed and maintained is as important as the code you write. Especially when you're part of a team. Version control, a process for deployment, and an understanding of the underlying infrastructure of your server will put you miles ahead of a lot of junior developers.</p>
					<p>The way I started to learn about DevOps is when I started to use a cloud server on <a href="https://m.do.co/c/510e633915b2" target="_blank" rel="nofollow noopener">DigitalOcean</a>. I was introduced to cloud servers by a client who didn't want their site on shared hosting-which is all I had ever used, and it opened up a whole new world for me.</p>
					<p>Set up a LAMP stack which stands for Linux, Apache, MySQL and PHP, one of the most common types of servers, and a great choice for hosting frontend projects that are static HTML, CSS and JavaScript web pages. Follow a tutorial on <a href="https://www.digitalocean.com/community/tutorials/how-to-set-up-an-ubuntu-server-on-a-digitalocean-droplet" target="_blank" rel="noopener">how to set up an Ubuntu server</a>, learn about creating a <a href="https://www.digitalocean.com/community/tutorials/how-to-set-up-apache-virtual-hosts-on-ubuntu-20-04" target="_blank" rel="noopener">virtual host</a>, point your domain to a server and deploy your files. I promise you this skill will take you places in your career.</p>
					<p>Junior developers that understand version control, can deploy their code, and who have a basic understanding of the difference between a local environment, a staging environment and a production environment will have a clear advantage. And those are all things you can do now with your personal projects. Embrace DevOps so you can influence how your code is deployed and maintained.</p>
					<h2>Conclusion</h2>
					<p>Think of these things as an organic process for how you work. Start with building a personal website with a header, body and a footer. As you continue to practice your frontend skills, add the projects you're working on to your website as a portfolio. If you have a framework you love using, that's great! But it's okay to practice being really good at HTML, CSS and JavaScript. Those three things are literally the backbone of the internet. Have a flexible attitude and try building different things, from entire web pages and layouts to specific types of UI elements. Then deploy it in a way that you can easily show it off in a portfolio, and give prospective employers a chance to see your work in the browser.</p>
					<p>If you need inspiration, it's all around you. Pick a site you like and build the homepage layout. Pick another site and use it as inspiration for a header. Observe how it behaves on desktop vs mobile, and try to build it. I mean, this is what you're trying to convince a prospective employer that you can do for them, right? So go do it!</p>
					<h3>Photo Credit:</h3>
					<p>Photo by <a href="https://unsplash.com/@cyzx?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash" target="_blank">Clifford</a> on <a href="https://unsplash.com/photos/person-taking-picture-inside-of-restaurant-VobvKmG-StA?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash" target="_blank">Unsplash</a></p>

				</div>
				<footer class="content-footer">
					<?php include_once dirname(__DIR__) . '/../includes/author.php'; ?>
					<?php include_once dirname(__DIR__) . '/../includes/comment-form.php'; ?>
				</footer>
			</div>
		</article>
	</main>
	<?php include_once dirname(__DIR__) . '/../includes/footer.php'; ?>
</body>

</html>