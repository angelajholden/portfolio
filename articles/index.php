<?php include_once dirname(__DIR__) . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php 
$title = 'Articles | Angela J Holden | Software Engineer &amp; Frontend Developer';
include_once dirname(__DIR__) . '/includes/head.php' ?>

<body>
	<?php include_once dirname(__DIR__) . '/includes/header.php'; ?>
	<main id="content" class="main">
		<section class="masonry-articles">
			<header class="content-header">
				<h1 class="primary-heading">Articles</h1>
			</header>
			<div class="masonry-wrap">
				<article class="article-item">
					<figure class="image">
						<img src="<?php echo BASE_URL; ?>images/alexander-schimmeck-2zJhA9RSkys-unsplash.jpg" alt="Crates of fruit at an open market">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Tutorial</div>
						<h2 class="secondary-heading"><a href="#">Title One: Crates of fruit at an open market</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item">
					<figure class="image">
						<img src="<?php echo BASE_URL; ?>images/aliona-gumeniuk-jeAjT87nbjM-unsplash.jpg" alt="Cheese and red pomegranate seeds">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Tutorial</div>
						<h2 class="secondary-heading"><a href="#">Title Two: Cheese and red pomegranate seeds</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item">
					<figure class="image">
						<img src="<?php echo BASE_URL; ?>images/anna-bratiychuk-IeNoBmJ011g-unsplash.jpg" alt="Rosé wine in glasses">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Tutorial</div>
						<h2 class="secondary-heading"><a href="#">Title Three: Rosé wine in glasses</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item">
					<figure class="image">
						<img src="<?php echo BASE_URL; ?>images/annie-spratt-e92dhXE8PUg-unsplash.jpg" alt="Soft yellow tulips">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Tutorial</div>
						<h2 class="secondary-heading"><a href="#">Title Four: Soft yellow tulips</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item">
					<figure class="image">
						<img src="<?php echo BASE_URL; ?>images/annie-spratt-eZk9w9RBHRo-unsplash.jpg" alt="A single stem of rich, green eucalyptus">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Tutorial</div>
						<h2 class="secondary-heading"><a href="#">Title Five: A single stem of rich, green eucalyptus</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item">
					<figure class="image">
						<img src="<?php echo BASE_URL; ?>images/boys-in-bristol-photography-uOeXhx5JV04-unsplash.jpg" alt="Fuzzy bumblebee sitting on a purple flower bulb">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Tutorial</div>
						<h2 class="secondary-heading"><a href="#">Title Six: Fuzzy bumblebee sitting on a purple flower bulb</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item">
					<figure class="image">
						<img src="<?php echo BASE_URL; ?>images/brooke-lark-qdyBKWSzpSI-unsplash.jpg" alt="Fruit smoothie with mint and ginger">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Tutorial</div>
						<h2 class="secondary-heading"><a href="#">Title Seven: Fruit smoothie with mint and ginger</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
			</div>
		</section>
	</main>
	<?php include_once dirname(__DIR__) . '/includes/footer.php'; ?>
</body>
<script src="<?php echo BASE_URL; ?>js/main.js"></script>

</html>