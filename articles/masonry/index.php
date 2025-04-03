<?php include_once dirname(__DIR__) . '/../config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php 
$title = 'Perfecting a Masonry Layout with CSS; JavaScript not Required | Angela J Holden | Software Engineer &amp; Frontend Developer';
include_once dirname(__DIR__) . '/../includes/head.php' ?>

<body>
	<?php include_once dirname(__DIR__) . '/../includes/header.php'; ?>
	<main id="content" class="main">
		<div class="full-width_hero"></div>
		<article class="full-width_content animate__animated animate__fadeIn">
			<div class="wrap">
				<header class="content-header">
					<h1 class="primary-heading">Perfecting a Masonry Layout with CSS; JavaScript not Required</h1>
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
								<time datetime="2025-03-20">Dec 30, 2025</time>
							</div>
							<div class="meta-item">
								<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M400 480a16 16 0 01-10.63-4L256 357.41 122.63 476A16 16 0 0196 464V96a64.07 64.07 0 0164-64h192a64.07 64.07 0 0164 64v368a16 16 0 01-16 16z"/></svg>
								<span>Tutorial</span>
							</div>
						</div>
					</div>
				</header>
				<div class="content-item">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique unde officia fugit voluptates consequuntur aliquid ab, quis nulla magni quod tenetur odio magnam eius quo commodi? Ipsa, praesentium? Porro, reiciendis. Alias nesciunt, hic atque laudantium nam distinctio sunt neque tempora? Animi provident impedit, in magni, quia ab ea nulla minus, eum perspiciatis amet nihil dolore rerum. Reiciendis id qui eaque? Blanditiis iste, quam cum nihil eius, delectus commodi, cumque modi quae laudantium repellendus dolores maxime at beatae sed ipsum! Voluptatem rerum aliquid fugit ducimus beatae sapiente iusto quas porro unde, ipsa dolores temporibus ut pariatur quos modi dolore itaque?</p>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo rerum et eveniet neque, laborum quae sequi tenetur unde nam. Rerum corrupti nemo dolor ad nostrum necessitatibus aliquam provident. Eligendi iusto, sequi mollitia, dignissimos dolores corporis sapiente cum neque odio tenetur id eaque rem alias est ipsam esse, exercitationem totam ullam ducimus temporibus officia! Et quos quis porro vero sint nostrum tempora vitae, nemo, odit autem iusto possimus rerum debitis sunt! Voluptatem minima corrupti ab consequuntur unde officia modi, molestias excepturi assumenda similique libero dolorem, totam autem sapiente? Quia eos qui molestias similique dolor perspiciatis eveniet id aliquam consequatur iusto eaque, excepturi quos totam sit sapiente at natus necessitatibus minus quidem autem quasi! Delectus dignissimos mollitia minus, corporis adipisci qui aperiam amet, illo saepe vitae eaque!</p>
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