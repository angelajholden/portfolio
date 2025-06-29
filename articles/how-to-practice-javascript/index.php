<?php include_once dirname(__DIR__) . '/../config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php 
$title = 'How to Practice JavaScript | Angela J Holden';
$description = 'Could you make a video with tips on learning JavaScript? I\'m familiar with the basics and concepts, but I find JavaScript more challenging.';
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
					<h1 class="primary-heading">How to Practice JavaScript, with an Example</h1>
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
								<time datetime="2025-06-15">Jun 15, 2025</time>
							</div>
							<div class="meta-item">
								<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M400 480a16 16 0 01-10.63-4L256 357.41 122.63 476A16 16 0 0196 464V96a64.07 64.07 0 0164-64h192a64.07 64.07 0 0164 64v368a16 16 0 01-16 16z"/></svg>
								<span>Tutorials</span>
							</div>
						</div>
					</div>
				</header>
				<div class="content-item">
					<p>I love when I get questions from my subscribers, and I got this comment on a <a href="https://www.youtube.com/watch?v=AZIpWfafAEk" target="_blank">recent video</a>. It's the kind of question that deserves a deeper answer, so I wanted to share my thoughts here. Let's walk through it together, because if one person asked, chances are others are wondering the same thing.</p>

					<blockquote>
						Could you make a video with tips on learning JavaScript or getting better at it? I'm familiar with the basics and concepts, but I find JavaScript more challenging compared to HTML and CSS. (You and me both!) For example: writing code without looking at an example. Also, I'd love some advice on how to work with JavaScript—like what you do when you can't remember how to do something (which is normal, since using Google is part of the job). Where do you like to look for solutions? I personally use resources like MDN and W3Schools.
					</blockquote>

					<p>Before I dive in, I won't bury the lede. The answer is practice and repetition. JavaScript is a language, and to learn a new language you need to use it.</p>

					<p>But let's break down this question a little more. First, I also find JavaScript a lot more challenging than HTML and CSS. I mean, I use JavaScript most days and it's probably always going to be the thing I need the most help with. You are not alone there at all.</p>

					<p>Next, I don't think you should worry about needing to look at examples, although I totally understand the frustration of not remembering something. This is why I take really good notes and I version control most things I do. So I don't have to remember everything. Because even when I do something so well I can do it from memory, if I don't do it again for six months or a year, I sometimes forget and have to look it up.</p>

					<figure>
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/articles/folco-masi-erUcICg2LYE-unsplash.jpg" alt="A tennis player with pink tennis balls" />
					</figure>

					<p>&nbsp;</p>

					<p>I think MDN and W3Schools are both excellent resources. I also recommend Learn JavaScript which I'll link below. This is one of the best JavaScript tutorials I've ever worked on and it's structured in a way that makes you solve real problems over and over again.</p>

					<p>Again, the best thing you can do to build your skills is practice and repetition. Think of all the user interface elements that require JavaScript. Things like tabs, accordions, sliders, navigation… those are all things that are done with JavaScript. I promise that if you practice building these things, you'll get much more comfortable and confident with JavaScript.</p>

					<p>You know what else you can do? <a href="https://www.youtube.com/@angelajholden" target="_blank">Subscribe to my channel</a> and hit the Like button so I can keep answering your questions, and help you build confidence as developers. It helps me out and I really appreciate your support. Thanks!</p>

					<p>So let me show you how I use a JavaScript <code class="language-javascript">.forEach();</code> loop and the <code class="language-javascript">window.location;</code> property to create something called You Are Here navigation. For-loops and JavaScript API properties are two very common, and very powerful, things you can use to manipulate the DOM.</p>

					<p>Let's say we have this navigation of five links for five pages:</p>

					<pre>
						<code class="language-html">
							&lt;!--typical navigation--&gt;
							&lt;nav&gt;
							&nbsp;&nbsp;&lt;ul&gt;
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;&lt;a class=&quot;active&quot; href=&quot;&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;&lt;a href=&quot;&quot;&gt;About&lt;/a&gt;&lt;/li&gt;
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;&lt;a href=&quot;&quot;&gt;Portfolio&lt;/a&gt;&lt;/li&gt;
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;&lt;a href=&quot;&quot;&gt;Blog&lt;/a&gt;&lt;/li&gt;
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;&lt;a href=&quot;&quot;&gt;Contact&lt;/a&gt;&lt;/li&gt;
							&nbsp;&nbsp;&lt;/ul&gt;
							&lt;/nav&gt;
						</code>
					</pre>

					<p>When I hover over the links, they're styled with CSS to have an underline. I also want an “active” class added to the link that belongs to the page I'm viewing, so if I'm on the home page, the home page link also has an active class that keeps the underline on the link.</p>

					<p>Before I start, I'm going to write something called pseudo code: For each navigation link, if the link is the same link in the browser, add the active class to the link.</p>

					<p>First, we need all of those links in an array:</p>

					<pre>
						<code class="language-javascript">
							/*
							* finds everything with this class and builds a static array
							* https://developer.mozilla.org/en-US/docs/Web/API/Document/querySelectorAll
							*/
							const links = document.querySelectorAll('.nav-link');
						</code>
					</pre>

					<p><code class="language-javascript">document.querySelectorAll();</code> takes everything with the class <code class="language-css">.nav-link {}</code> and creates an array, which we need in order to use a for loop. Next we need to get the link of the page we are currently on. So in the console if I type <code class="language-javascript">window.location;</code>, I get all of this information from the JavaScript API about the page I'm on. I want everything that comes after localhost, so I'm going to use <code class="language-javascript">window.location.href;</code>.</p>

					<pre>
						<code class="language-javascript">
							/*
							* compare the nav link to the URL
							* if they match, add an 'active' class
							*/
							const links = document.querySelectorAll(".nav_item");
							const href = window.location.href;
							links.forEach((link) => {
							&nbsp;&nbsp;if (link == href) {
							&nbsp;&nbsp;&nbsp;&nbsp;link.classList.add('active');
							&nbsp;&nbsp;}
							});
						</code>
					</pre>

					<p>So let's make a list of everything we did here:</p>

					<ul>
						<li>created an array of links</li>
						<li>used the JavaScript API to get the link of the current page</li>
						<li>used a for loop to check all the links and compare them to the link of the current page</li>
						<li>added a class to the link that matches the page link</li>
					</ul>

					<p>Creating an array, using the JavaScript API, looping through an array, using a conditional <code>if</code> statement to see if something matches, then adding a class to the correct element… This is a basic example, but also a really common application of JavaScript. And when you practice regularly and apply even basic techniques, you'll start to remember what you need to do.</p>

					<p>Keep writing pseudo code. Write what you need to do with JavaScript in plain language. If you can describe the problem you're solving, you can find the JavaScript you need to solve that problem.</p>

					<p>This is why I don't think you should worry too much about remembering syntax. Those things come with experience, and if you're using something like VS Code, intellisense is pretty good at helping with that. What's most important is that you understand the problem you're solving and come up with the best approach to solve that problem.</p>

					<h2>Links:</h2>
					<ul>
						<li><a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/API/Window/location">Window: location property</a></li>
						<li><a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/API/Document/querySelectorAll">Document: querySelectorAll() method</a></li>
						<li><a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/forEach">Array.prototype.forEach()</a></li>
						<li><a target="_blank" href="https://developer.mozilla.org/en-US/docs/Learn_web_development/Core/Scripting">Dynamic scripting with JavaScript</a></li>
						<li><a target="_blank" href="https://www.w3schools.com/js/">W3 Schools JavaScript Tutorial</a></li>
						<li><a target="_blank" href="https://learnjavascript.online/">Learn JavaScript Online</a></li>
					</ul>

					<h3>Photo Credit:</h3>
					<p>Photo by <a href="https://unsplash.com/@folcomasi?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash" target="_blank">Folco Masi</a> on <a href="https://unsplash.com/photos/a-person-standing-on-a-tennis-court-with-a-racket-erUcICg2LYE?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash" target="_blank">Unsplash</a></p>

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