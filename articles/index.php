<?php include_once dirname(__DIR__) . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php 
$title = 'Articles &amp; Resources | Angela J Holden';
$description = 'From coding tutorials and tech tips to lifestyle posts and free PDF handouts — this archive is a mix of everything I create and share.';
$noindex = false; // or true, if you want to block this specific page
include_once dirname(__DIR__) . '/includes/head.php';
?>

<body>
	<?php include_once dirname(__DIR__) . '/includes/header.php'; ?>
	<main id="content" class="main">
		<section class="masonry-articles">
			<header class="content-header">
				<h1 class="primary-heading">Articles</h1>
				<p>This is the full archive of everything I've written, including tutorials, advice, lifestyle content, and the occasional free PDF handout. Filter by category to find exactly what you need.</p>
				<div class="article-buttons">
					<button class="button blue-hollow active" data-category="all">All Articles</button>
					<button class="button blue-hollow" data-category="pdfs">Free PDFs</button>
					<button class="button blue-hollow" data-category="lifestyle">Lifestyle</button>
					<button class="button blue-hollow" data-category="tips">Tips &amp; Advice</button>
					<button class="button blue-hollow" data-category="tutorials">Tutorials</button>
				</div>
			</header>
			<div class="masonry-wrap">
				<article class="article-item animate__animated" data-category="tips" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/articles/angelajholden-trader-joes-cart.jpg" alt="A glass of wine" />
					</figure>
					<div class="article-wrap">
						<div class="article-category">Tips &amp; Advice</div>
						<h2 class="secondary-heading"><a href="answering-your-freelancing-questions/">Freelancing Q&amp;A: Boundaries, Burnout, Niching Down, and Lessons Learned</a></h2>
						<p>I got some really thoughtful questions from Lina after my last freelancing video, so I'm answering them here in blog form for anyone who prefers to read.</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="tips" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/articles/angelajholden-tips-for-freelancers.jpg" alt="A piece of carrot cake" />
					</figure>
					<div class="article-wrap">
						<div class="article-category">Tips &amp; Advice</div>
						<h2 class="secondary-heading"><a href="how-to-start-freelancing/">How to Start Freelancing as a Frontend Developer</a></h2>
						<p>As soon as I started to learn HTML and CSS, I started freelancing. Thank god I was naive—because if I'd known what I was getting into, I probably wouldn't have tried at all.</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="tutorials" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/articles/angelajholden-how-to-practice-javascript.jpg" alt="Screenshot of VS Code with JavaScript file." />
					</figure>
					<div class="article-wrap">
						<div class="article-category">Tutorials</div>
						<h2 class="secondary-heading"><a href="how-to-practice-javascript/">How to Practice JavaScript, with an Example</a></h2>
						<p>I love when I get questions from my subscribers, and I got this comment on a recent video. It's the kind of question that deserves a deeper answer, so I wanted to share my thoughts here.</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="tips" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/articles/angelajholden-github-contributions.jpg" alt="The interior of a coffee shop" />
					</figure>
					<div class="article-wrap">
						<div class="article-category">Tips &amp; Advice</div>
						<h2 class="secondary-heading"><a href="five-tips-for-junior-developers/">Five Tips for Junior Developers</a></h2>
						<p>I've been a frontend developer for 12 years, several of those as a hiring manager, and these are all things that helped me to get a job.</p>
					</div>
				</article>
			</div>
		</section>
	</main>
	<?php include_once dirname(__DIR__) . '/includes/footer.php'; ?>
</body>

</html>