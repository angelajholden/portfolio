<?php include_once dirname(__DIR__) . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php 
$title = 'Consulting | Angela J Holden';
$description = 'I help developers and small teams improve their frontend projects through structured, actionable feedback. My focus is on semantic HTML, efficient CSS, accessibility, and organic SEO.';
$noindex = false; // or true, if you want to block this specific page
include_once dirname(__DIR__) . '/includes/head.php';
?>

<body>
	<?php include_once dirname(__DIR__) . '/includes/header.php'; ?>
	<main id="content" class="main">
		<section class="about-header animate__animated animate__fadeIn">
			<header class="content-header">
				<h1 class="primary-heading">Consulting</h1>
				<p>Hello! I'm Angela, a software engineer and frontend developer in Saint Paul, MN. I've spent over a decade writing code, mentoring devs, and solving real problems across a wide range of projects. These days, I'm focused on teaching, streaming, and creating tools and content that help others learn.</p>
			</header>
		</section>
		<section>
			<h2 class="secondary-heading">Consulting</h2>
			<div class="wrap">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet distinctio quas at libero. Molestias et laudantium, natus nobis omnis repudiandae incidunt neque quisquam, maxime doloremque voluptatem distinctio quibusdam, porro cum at vitae. Ab nostrum iste beatae eveniet sunt dolore culpa mollitia magnam et, doloribus quis enim repellat nulla sequi aliquid molestias nobis libero natus? Vero, aliquid labore. Eum consequuntur omnis iusto maxime libero eligendi, veniam, saepe quas officiis eaque ullam eius perspiciatis! Iure mollitia expedita modi dignissimos et totam error atque fuga quae corrupti omnis consectetur est ea sint eveniet tempore at molestiae eos id vel, eaque, necessitatibus velit sapiente. Quae iure ea explicabo, alias excepturi deleniti eius, asperiores fuga voluptatum ex quos sint repudiandae? Quibusdam illum cumque ipsam pariatur asperiores voluptas magnam in minus!</p>
			</div>
		</section>
	</main>
	<?php include_once dirname(__DIR__) . '/includes/footer.php'; ?>
</body>

</html>