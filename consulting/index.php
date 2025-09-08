<?php include_once dirname(__DIR__) . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php 
$title = 'Consulting | Angela J Holden';
$description = 'I help developers and small teams improve their frontend projects through structured, actionable feedback. My focus is on semantic HTML, efficient CSS, accessibility, and organic SEO.';
$noindex = false; // or true, if you want to block this specific page
include_once dirname(__DIR__) . '/includes/head.php';
?>

<body class="consulting">
	<?php include_once dirname(__DIR__) . '/includes/header.php'; ?>
	<main id="content" class="main">
		<section class="consulting_hero animate__animated animate__fadeIn">
			<div class="wrap">
				<header class="content-header">
					<h1 class="primary-heading">Frontend Code Reviews &amp; Consulting</h1>
					<p><strong>Stream-Style Sessions:</strong> Practical, no-nonsense guidance for developers who want cleaner, faster, more accessible websites.</p>
					<p><a class="button white-border-green" href="https://calendly.com/angelajholden" target="_blank">Book Your Session</a></p>
				</header>
				<figure class="image">
					<img src="<?php echo BASE_URL; ?>images/angelajholden_consulting-headshot.jpg" alt="Angela J Holden stillshot from a live stream video.">
				</figure>
			</div>
		</section>
		<section class="consulting_three-across">
			<h2 class="secondary-heading">How I Help</h2>
			<div class="wrap">
				<aside class="consulting_item">
					<p>I help developers and small teams improve their frontend projects through structured, actionable, empathetic feedback.</p>
				</aside>
				<aside class="consulting_item">
					<p>My focus is on semantic HTML, CSS, accessibility and organic SEO — so your site works for everyone, and holds up over time.</p>
				</aside>
				<aside class="consulting_item">
					<p>This isn't a design critique; it's frontend guidance, grounded in 12+ years of real-world experience building, testing and launching websites.</p>
				</aside>
			</div>
		</section>
		<section class="consulting_list-items">
			<h2 class="secondary-heading">What I Review &amp; Advise On</h2>
			<div class="wrap">
				<p>You get more than a checklist — this is a hands-on, collaborative audit. We'll work through your site or app together, fixing issues in real time, and I'll show you how to troubleshoot like a pro so you leave with lasting skills, not just a patched project.</p>
				<ul>
					<li><strong>Semantic HTML: </strong> Correct element usage and logical structure, with guidance on reading and applying MDN documentation.</li>
					<li><strong>CSS Efficiency: </strong> Maintainable styles, reduced duplication, and real-time problem solving to sharpen your instincts.</li>
					<li><strong>Accessibility: </strong> Keyboard navigation, ARIA accuracy, and inclusive markup, tested both manually and with AI tools.</li>
					<li><strong>Performance & SEO: </strong> Load times, mobile responsiveness, and spotting which PageSpeed Insights fixes are worth doing.</li>
					<li><strong>JavaScript Review: </strong> Refactoring messy, legacy code (including jQuery) into modern vanilla JS, plus AI-assisted debugging.</li>
					<li><strong>Error Spotting: </strong> Diagnosing console errors, broken links, and cross-browser quirks, with steps to prevent repeat issues.</li>
					<li><strong>How to QA: </strong> My proven “top to bottom, left to right” process: click every link, read every word, take breaks, and return with fresh eyes to spot what others miss.</li>
					<li><strong>Deployment Help: </strong> Untangling Git issues, setting up GitHub Actions, managing LAMP stacks, and using rsync or FTP for smooth, reliable launches.</li>
				</ul>
			</div>
		</section>
		<section class="consulting_who-for">
			<h2 class="secondary-heading">Who This Is For</h2>
			<div class="wrap">
				<ul class="list">
					<li>Junior Devs who want professional feedback to accelerate their growth.</li>
					<li>Freelancers & Small Teams who need a second set of eyes before launch.</li>
					<li>Self-Taught Devs who want to level up their process and code quality.</li>
					<li>Project Owners who just need one-off advice or help troubleshooting.</li>
				</ul>
			</div>
		</section>
		<section class="consulting_price-table">
			<h2 class="secondary-heading">Pricing</h2>
			<p><strong>From my live streams to your code.</strong> If you've seen me on YouTube, you already know how I review code — clear, detailed, and practical. Now you can book that same process 1:1 for your own project.</p>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Service</th>
						<th scope="col">What You Get</th>
						<th scope="col">Rate (USD)</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th data-label="Service" scope="row">Live 1:1 (50 min)</th>
						<td data-label="What You Get">
							<p>Real-time problem solving over Zoom. Bring your site, repo, or specific questions — we'll review, debug, and prioritize fixes together.</p>
						</td>
						<td data-label="Rate (USD)">$200</td>
					</tr>
					<tr>
						<th data-label="Service" scope="row">Asynchronous Review</th>
						<td data-label="What You Get">
							<p>Send your project and get a detailed Loom walkthrough + prioritized action list you can implement at your own pace.</p>
						</td>
						<td data-label="Rate (USD)">$175</td>
					</tr>
					<tr>
						<th data-label="Service" scope="row">Follow-Up Session</th>
						<td data-label="What You Get">
							<p>Optional add-on within 30 days of your first session. Live or asynchronous.</p>
						</td>
						<td data-label="Rate (USD)">$150</td>
					</tr>
				</tbody>
			</table>
			<p><a class="button teal-solid" href="https://calendly.com/angelajholden" target="_blank">Let's Get Started!</a></p>
		</section>
		<section class="project_link-guidelines">
			<h2 class="secondary-heading">Project Link Guidelines</h2>
			<p>When you book, you'll provide a link to your project and answer some questions to help me prepare for our meeting. All sessions are handled through a secure, vetted process to protect both you and your project.</p>
			<div class="wrap">
				<article class="guideline_item">
					<p>To keep things safe and simple, please share your project via a trusted host. I accept links from these domains.</p>
					<ul class="list">
						<li>GitHub repositories or GitHub Pages links</li>
						<li>Netlify, Vercel, or similar static hosting</li>
						<li>Heroku or other reputable app hosting</li>
					</ul>
				</article>
				<article class="guideline_item">
					<p>For security, I can't open the following items. If you're unsure, just ask before our session — I'm happy to confirm.</p>
					<ul class="list">
						<li>ZIP files or other file downloads</li>
						<li>Unfamiliar file-sharing sites</li>
						<li>Anything that requires installing software to view</li>
					</ul>
				</article>
			</div>
		</section>
	</main>
	<?php include_once dirname(__DIR__) . '/includes/footer.php'; ?>
</body>

</html>