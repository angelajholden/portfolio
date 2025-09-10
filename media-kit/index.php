<?php include_once dirname(__DIR__) . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php 
$title = 'Media Kit | Angela J Holden';
$description = 'Brand-safe, developer-first content: live builds, tutorials, compilations';
$noindex = false; // or true, if you want to block this specific page
include_once dirname(__DIR__) . '/includes/head.php';
?>

<body>
	<?php include_once dirname(__DIR__) . '/includes/header.php'; ?>
	<main id="content" class="main">
		<div class="full-width_hero"></div>
		<article class="full-width_content animate__animated animate__fadeIn">
			<div class="wrap">
				<header class="content-header">
					<h1 class="primary-heading">Media Kit</h1>
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
								<time datetime="2025-09-08">Sep 8, 2025</time>
							</div>
							<div class="meta-item">
								<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M400 480a16 16 0 01-10.63-4L256 357.41 122.63 476A16 16 0 0196 464V96a64.07 64.07 0 0164-64h192a64.07 64.07 0 0164 64v368a16 16 0 01-16 16z"/></svg>
								<span>Information</span>
							</div>
						</div>
					</div>
				</header>
				<div class="content-item">
					<h2>Angela J. Holden | Software Engineer & Frontend Developer</h2>
					<p>Brand-safe, developer-first content: live builds, tutorials, compilations.</p>
					<p>&nbsp;</p>
					<hr>
					<h3>Channel Overview</h3>
					<ul>
						<li><strong>Focus:</strong> Frontend Development (HTML, CSS, Vanilla JS)</li>
						<li><strong>Formats:</strong> Live coding streams, project compilations, tutorials, vlogs</li>
						<li><strong>Audience:</strong> Aspiring devs, junior engineers, self-taught coders</li>
						<li><strong>Tone:</strong> Authentic, educational, approachable — “real dev work, in real time.”</li>
					</ul>
					<h3>Current Analytics (as of September 2025)</h3>
					<ul>
						<li>Subscribers: 1,120 (growing ~100+ per week)</li>
						<li>Avg Views per Video: 300&mdash;600 streams, 1000+ compilations</li>
						<li>Watch Time (28 days): 400+ hours</li>
						<li>Total Watch Hours: 2,838 (toward monetization threshold of 4,000)</li>
						<li>Top Countries: US, Pakistan and India</li>
						<li>Audience Age Range: 18&mdash;24 (56%) and 25&mdash;34 (38%)</li>
					</ul>
					<h3>Partnership Opportunities</h3>
					<ul>
						<li>Sponsored project videos or tutorials</li>
						<li>Tool/product integration into real-time builds</li>
						<li>Coaching/webinar collaborations (QA, dev workflow)</li>
						<li>Affiliate partnerships</li>
					</ul>
					<h3>Why Partner with Me?</h3>
					<ul>
						<li>Unique long&ndash;form engagement: viewers watch 1&mdash;12 hours of content, not just snippets</li>
						<li>Growing, loyal audience: live chat regulars, strong community culture</li>
						<li>Developer with 12+ years self-taught experience, bringing real&ndash;world workflows to aspiring coders</li>
						<li>Content is evergreen &mdash; projects + tutorials keep gaining views long after publishing</li>
					</ul>
					<h3>Contact</h3>
					<ul>
						<li><a href="mailto:info@angelajholden.com">info@angelajholden.com</a></li>
					</ul>
				</div>
				<footer class="content-footer">
					<?php include_once dirname(__DIR__) . '/includes/author.php'; ?>
				</footer>
			</div>
		</article>
	</main>
	<?php include_once dirname(__DIR__) . '/includes/footer.php'; ?>
</body>

</html>