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
						<div class="meta-item">
							<figure class="meta-image">
								<img src="<?php echo BASE_URL; ?>images/angelajholden-software-engineer-frontend-developer.jpg" alt="Angela J Holden | Software Engineer &amp; Frontend Developer">
							</figure>
							<span>By Angela</span>
						</div>
						<div class="meta-item">
							<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M256 48C141.13 48 48 141.13 48 256s93.13 208 208 208 208-93.13 208-208S370.87 48 256 48zm96 240h-96a16 16 0 01-16-16V128a16 16 0 0132 0v128h80a16 16 0 010 32z"/></svg>
							<time datetime="2025-03-20">March 20, 2025</time>
						</div>
						<div class="meta-item">
							<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M400 480a16 16 0 01-10.63-4L256 357.41 122.63 476A16 16 0 0196 464V96a64.07 64.07 0 0164-64h192a64.07 64.07 0 0164 64v368a16 16 0 01-16 16z"/></svg>
							<span>Tutorial</span>
						</div>
					</div>
				</header>
				<div class="content-item">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique unde officia fugit voluptates consequuntur aliquid ab, quis nulla magni quod tenetur odio magnam eius quo commodi? Ipsa, praesentium? Porro, reiciendis. Alias nesciunt, hic atque laudantium nam distinctio sunt neque tempora? Animi provident impedit, in magni, quia ab ea nulla minus, eum perspiciatis amet nihil dolore rerum. Reiciendis id qui eaque? Blanditiis iste, quam cum nihil eius, delectus commodi, cumque modi quae laudantium repellendus dolores maxime at beatae sed ipsum! Voluptatem rerum aliquid fugit ducimus beatae sapiente iusto quas porro unde, ipsa dolores temporibus ut pariatur quos modi dolore itaque?</p>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo rerum et eveniet neque, laborum quae sequi tenetur unde nam. Rerum corrupti nemo dolor ad nostrum necessitatibus aliquam provident. Eligendi iusto, sequi mollitia, dignissimos dolores corporis sapiente cum neque odio tenetur id eaque rem alias est ipsam esse, exercitationem totam ullam ducimus temporibus officia! Et quos quis porro vero sint nostrum tempora vitae, nemo, odit autem iusto possimus rerum debitis sunt! Voluptatem minima corrupti ab consequuntur unde officia modi, molestias excepturi assumenda similique libero dolorem, totam autem sapiente? Quia eos qui molestias similique dolor perspiciatis eveniet id aliquam consequatur iusto eaque, excepturi quos totam sit sapiente at natus necessitatibus minus quidem autem quasi! Delectus dignissimos mollitia minus, corporis adipisci qui aperiam amet, illo saepe vitae eaque!</p>
				</div>
			</div>
		</article>
		<aside class="comments">
			<div class="wrap">
				<div class="comment-count">
					<p>3 Comments</p>
					<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="-5.0 -10.0 110.0 135.0"><path d="m83.375 42.062c-0.59375-0.59375-1.25-1.125-1.9375-1.5938 0.375-1.4375 0.59375-2.9688 0.59375-4.5312 0-9.7812-7.9688-17.75-17.75-17.75h-36.281c-9.7812 0-17.75 7.9688-17.75 17.75 0 6.8125 3.875 12.75 9.5312 15.688-0.09375 0.59375-0.125 1.2188-0.125 1.8125 0 4.4375 1.7812 8.4375 4.7188 11.375 2.875 2.875 6.9062 4.6875 11.344 4.6875v10.625l16-10.625h20.281c8.875 0 16.062-7.1875 16.062-16.062 0-4.4375-1.8125-8.4375-4.6875-11.375zm-4.9688-3.375c-1.2812 6.625-7.125 11.625-14.125 11.625h-1.6875v9.1562l-13.812-9.1562h-20.781c-2.75 0-5.3125-0.78125-7.4688-2.125-4.1562-2.5-6.9062-7.0625-6.9062-12.25 0-7.9062 6.4375-14.375 14.375-14.375h36.281c7.9375 0 14.375 6.4688 14.375 14.375 0 0.9375-0.09375 1.8438-0.25 2.75z"/></svg>
				</div>
				<ul>
					<li class="comment-item">
						<div class="comment-icon">
							<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M332.64 64.58C313.18 43.57 286 32 256 32c-30.16 0-57.43 11.5-76.8 32.38-19.58 21.11-29.12 49.8-26.88 80.78C156.76 206.28 203.27 256 256 256s99.16-49.71 103.67-110.82c2.27-30.7-7.33-59.33-27.03-80.6zM432 480H80a31 31 0 01-24.2-11.13c-6.5-7.77-9.12-18.38-7.18-29.11C57.06 392.94 83.4 353.61 124.8 326c36.78-24.51 83.37-38 131.2-38s94.42 13.5 131.2 38c41.4 27.6 67.74 66.93 76.18 113.75 1.94 10.73-.68 21.34-7.18 29.11A31 31 0 01432 480z"/></svg>
						</div>
						<div class="comment-content">
							<div class="user-name">Heidi Holden</div>
							<time datetime="2025-03-20">March 20, 2025</time>
							<div class="user-comment">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos libero incidunt accusamus, perspiciatis asperiores modi natus harum expedita doloremque neque ratione inventore minus ducimus, quidem exercitationem et officia illum est?</p>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia laudantium soluta ea nemo numquam amet aperiam facilis maxime asperiores repudiandae in, expedita alias, dolorum corporis iusto. Mollitia officia repellat aspernatur!</p>
							</div>
						</div>
					</li>
					<li class="comment-item">
						<div class="comment-icon">
							<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M332.64 64.58C313.18 43.57 286 32 256 32c-30.16 0-57.43 11.5-76.8 32.38-19.58 21.11-29.12 49.8-26.88 80.78C156.76 206.28 203.27 256 256 256s99.16-49.71 103.67-110.82c2.27-30.7-7.33-59.33-27.03-80.6zM432 480H80a31 31 0 01-24.2-11.13c-6.5-7.77-9.12-18.38-7.18-29.11C57.06 392.94 83.4 353.61 124.8 326c36.78-24.51 83.37-38 131.2-38s94.42 13.5 131.2 38c41.4 27.6 67.74 66.93 76.18 113.75 1.94 10.73-.68 21.34-7.18 29.11A31 31 0 01432 480z"/></svg>
						</div>
						<div class="comment-content">
							<div class="user-name">Heidi Holden</div>
							<time datetime="2025-03-20">March 20, 2025</time>
							<div class="user-comment">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos libero incidunt accusamus, perspiciatis asperiores modi natus harum expedita doloremque neque ratione inventore minus ducimus, quidem exercitationem et officia illum est?</p>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia laudantium soluta ea nemo numquam amet aperiam facilis maxime asperiores repudiandae in, expedita alias, dolorum corporis iusto. Mollitia officia repellat aspernatur!</p>
							</div>
						</div>
					</li>
					<li class="comment-item">
						<div class="comment-icon">
							<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M332.64 64.58C313.18 43.57 286 32 256 32c-30.16 0-57.43 11.5-76.8 32.38-19.58 21.11-29.12 49.8-26.88 80.78C156.76 206.28 203.27 256 256 256s99.16-49.71 103.67-110.82c2.27-30.7-7.33-59.33-27.03-80.6zM432 480H80a31 31 0 01-24.2-11.13c-6.5-7.77-9.12-18.38-7.18-29.11C57.06 392.94 83.4 353.61 124.8 326c36.78-24.51 83.37-38 131.2-38s94.42 13.5 131.2 38c41.4 27.6 67.74 66.93 76.18 113.75 1.94 10.73-.68 21.34-7.18 29.11A31 31 0 01432 480z"/></svg>
						</div>
						<div class="comment-content">
							<div class="user-name">Heidi Holden</div>
							<time datetime="2025-03-20">March 20, 2025</time>
							<div class="user-comment">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos libero incidunt accusamus, perspiciatis asperiores modi natus harum expedita doloremque neque ratione inventore minus ducimus, quidem exercitationem et officia illum est?</p>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia laudantium soluta ea nemo numquam amet aperiam facilis maxime asperiores repudiandae in, expedita alias, dolorum corporis iusto. Mollitia officia repellat aspernatur!</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>
	</main>
	<?php include_once dirname(__DIR__) . '/../includes/footer.php'; ?>
</body>
<script src="<?php echo BASE_URL; ?>js/main.js"></script>

</html>