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
				<div class="article-buttons">
					<button class="button blue-hollow active" data-category="all">All Articles</button>
					<button class="button blue-hollow" data-category="pdfs">Free PDFs</button>
					<button class="button blue-hollow" data-category="lifestyle">Lifestyle</button>
					<button class="button blue-hollow" data-category="tips">Tips &amp; Advice</button>
					<button class="button blue-hollow" data-category="tutorials">Tutorials</button>
				</div>
			</header>
			<div class="masonry-wrap">
				<article class="article-item animate__animated" data-category="tutorials" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/naveed-pervaiz-IlnF2g_3tpY-unsplash.jpg" alt="Sliced fruit arranged on a beautiful wood tray">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Tutorial</div>
						<h2 class="secondary-heading"><a href="#">Title Twenty-Nine: Sliced fruit arranged on a beautiful wood tray</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="tips" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/nature-uninterrupted-photography-v-3NQ3pmWkY-unsplash.jpg" alt="Wild flowers in the garden">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Tips &amp; Advice</div>
						<h2 class="secondary-heading"><a href="#">Title Twenty-Eight: Wild flowers in the garden</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="pdfs" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/nathan-dumlao-nBJHO6wmRWw-unsplash.jpg" alt="A nice cup of coffee">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Free PDF</div>
						<h2 class="secondary-heading"><a href="#">Title Twenty-Seven: A nice cup of coffee</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="lifestyle" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/monika-grabkowska-EbRBhZ-I_p8-unsplash.jpg" alt="Blueberry cheesecake with graham cracker crust">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Lifestyle</div>
						<h2 class="secondary-heading"><a href="#">Title Twenty-Six: Blueberry cheesecake with graham cracker crust</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="lifestyle" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/mike-kenneally-TD4DBagg2wE-unsplash.jpg" alt="Coffee beans roasting">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Lifestyle</div>
						<h2 class="secondary-heading"><a href="#">Title Twenty-Five: Coffee beans roasting</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="tutorials" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/michelle-atkinson-aYgTkQRVUAk-unsplash.jpg" alt="Bumblebee on a peach flower">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Tutorial</div>
						<h2 class="secondary-heading"><a href="#">Title Twenty-Four: Bumblebee on a peach flower</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="tutorials" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/mgg-vitchakorn-E6s3kbC1mo0-unsplash.jpg" alt="A cheese board with grapes, crackers, toast and nuts">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Tutorial</div>
						<h2 class="secondary-heading"><a href="#">Title Twenty-Three: A cheese board with grapes, crackers, toast and nuts</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="tips" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/luann-hunt-O3TlS547j7k-unsplash.jpg" alt="Peaches in a crate in the sunshine">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Tips &amp; Advice</div>
						<h2 class="secondary-heading"><a href="#">Title Twenty-Two: Peaches in a crate in the sunshine</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="pdfs" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/kobby-mendez-WXJ33HOrzvE-unsplash.jpg" alt="Stack of donuts with sprinkles">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Free PDF</div>
						<h2 class="secondary-heading"><a href="#">Title Twenty-One: Stack of donuts with sprinkles</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="lifestyle" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/jeremy-yap-jn-HaGWe4yw-unsplash.jpg" alt="A wee cup of espresso">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Lifestyle</div>
						<h2 class="secondary-heading"><a href="#">Title Twenty: A wee cup of espresso</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="pdfs" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/IMG_1153.jpg" alt="Heidi at the dog park">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Free PDF</div>
						<h2 class="secondary-heading"><a href="#">Title Nineteen: Heidi at the dog park</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="lifestyle" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/ibrahim-ozdemir-rRDHlkSyoxY-unsplash.jpg" alt="Bumblebee on a daisy in the golden hour">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Lifestyle</div>
						<h2 class="secondary-heading"><a href="#">Title Eighteen: Bumblebee on a daisy in the golden hour</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="tutorials" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/iain-robertson-G46PxOQSdnA-unsplash.jpg" alt="A bunch of eucalyptus">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Tutorial</div>
						<h2 class="secondary-heading"><a href="#">Title Seventeen: A bunch of eucalyptus</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="tutorials" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/heather-barnes-CNDiESvWfrk-unsplash.jpg" alt="Honey dipper in a jar with a slice of lemon">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Tutorial</div>
						<h2 class="secondary-heading"><a href="#">Title Seventeen: Honey dipper in a jar with a slice of lemon</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="lifestyle" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/giuse-ff2-ap3CRY8-unsplash.jpg" alt="Lemon tree on a sunny day">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Lifestyle</div>
						<h2 class="secondary-heading"><a href="#">Title Sixteen: Lemon tree on a sunny day</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="pdfs" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/floh-keitgen-aFUHu9WNO3Q-unsplash.jpg" alt="Sliced watermelon triangle wedges">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Free PDF</div>
						<h2 class="secondary-heading"><a href="#">Title Fifteen: Sliced watermelon triangle wedges</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="tutorials" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/emre-NZMeJsrMC8U-unsplash.jpg" alt="Black cup of coffee in the morning">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Tutorial</div>
						<h2 class="secondary-heading"><a href="#">Title Fourteen: Black cup of coffee in the morning</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="pdfs" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/diliara-garifullina-I48gnI1Qs5o-unsplash.jpg" alt="Berry jam layer cake">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Free PDF</div>
						<h2 class="secondary-heading"><a href="#">Title Thirteen: Berry jam layer cake</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="lifestyle" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/deborah-rainford-lk63vqjc1nA-unsplash.jpg" alt="Blueberry quickbread with icing">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Lifestyle</div>
						<h2 class="secondary-heading"><a href="#">Title Twelve: Blueberry quickbread with icing</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="pdfs" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/daniel-Tw2cU6VvTZo-unsplash.jpg" alt="Charcuterie board with bread and olives">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Free PDF</div>
						<h2 class="secondary-heading"><a href="#">Title Eleven: Charcuterie board with bread and olives</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="pdfs" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/cristina-anne-costello-4jsmBl30x_A-unsplash.jpg" alt="Lemons in the sunlight">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Free PDF</div>
						<h2 class="secondary-heading"><a href="#">Title Ten: Lemons in the sunlight</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="tips" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/corina-rainer-sScNrKruEPs-unsplash.jpg" alt="A glass of white wine">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Tips &amp; Advice</div>
						<h2 class="secondary-heading"><a href="#">Title Nine: A glass of white wine</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="tips" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/christiann-koepke-AigxB1zfRVo-unsplash.jpg" alt="Raspberry cake with rosemary and powdered sugar">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Tips &amp; Advice</div>
						<h2 class="secondary-heading"><a href="#">Title Eight: Raspberry cake with rosemary and powdered sugar</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="lifestyle" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/brooke-lark-qdyBKWSzpSI-unsplash.jpg" alt="Fruit smoothie with mint and ginger">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Lifestyle</div>
						<h2 class="secondary-heading"><a href="#">Title Seven: Fruit smoothie with mint and ginger</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="lifestyle" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/boys-in-bristol-photography-uOeXhx5JV04-unsplash.jpg" alt="Fuzzy bumblebee sitting on a purple flower bulb">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Lifestyle</div>
						<h2 class="secondary-heading"><a href="#">Title Six: Fuzzy bumblebee sitting on a purple flower bulb</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="pdfs" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/annie-spratt-eZk9w9RBHRo-unsplash.jpg" alt="A single stem of rich, green eucalyptus">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Free PDF</div>
						<h2 class="secondary-heading"><a href="#">Title Five: A single stem of rich, green eucalyptus</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="tutorials" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/annie-spratt-e92dhXE8PUg-unsplash.jpg" alt="Soft yellow tulips">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Tutorial</div>
						<h2 class="secondary-heading"><a href="#">Title Four: Soft yellow tulips</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="pdfs" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/anna-bratiychuk-IeNoBmJ011g-unsplash.jpg" alt="Rosé wine in glasses">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Free PDF</div>
						<h2 class="secondary-heading"><a href="#">Title Three: Rosé wine in glasses</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="tips" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/aliona-gumeniuk-jeAjT87nbjM-unsplash.jpg" alt="Cheese and red pomegranate seeds">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Tips &amp; Advice</div>
						<h2 class="secondary-heading"><a href="#">Title Two: Cheese and red pomegranate seeds</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
				<article class="article-item animate__animated" data-category="tutorials" data-animation="animate__fadeInUp">
					<figure class="image">
						<img loading="lazy" src="<?php echo BASE_URL; ?>images/alexander-schimmeck-2zJhA9RSkys-unsplash.jpg" alt="Crates of fruit at an open market">
					</figure>
					<div class="article-wrap">
						<div class="article-category">Tutorial</div>
						<h2 class="secondary-heading"><a href="#">Title One: Crates of fruit at an open market</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ut saepe beatae placeat consectetur provident ipsa laboriosam quae exercitationem?</p>
					</div>
				</article>
			</div>
			<?php include_once dirname(__DIR__) . '/includes/author.php'; ?>
		</section>
	</main>
	<?php include_once dirname(__DIR__) . '/includes/footer.php'; ?>
</body>
<script src="<?php echo BASE_URL; ?>js/main.js"></script>

</html>