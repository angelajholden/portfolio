<?php include_once dirname(__DIR__) . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php 
$title = 'HTML, CSS &amp; JavaScript Live Streams | Angela J. Holden';
$description = 'Browse Angela J. Holden’s YouTube live-stream archive featuring real-time HTML, CSS, and JavaScript projects, frontend practice, and developer workflows.';
$noindex = false; // or true, if you want to block this specific page
$canonicalPath = 'videos/';
include_once dirname(__DIR__) . '/includes/head.php';
?>

<body>
	<?php include_once dirname(__DIR__) . '/includes/header.php'; ?>
	<main id="content" class="main">
		<section class="video-articles">
			<header class="content-header">
				<h1 class="primary-heading">Videos</h1>
				<p>This is the full archive of everything I've streamed on <a href="https://www.youtube.com/@angelajholden/streams" target="_blank">YouTube</a> starting in August 2024. I go live every Saturday and Sunday to practice HTML, CSS and JavaScript. The only way to do this is by practicing.</p>
			</header>
			<form class="filter_form">
				<label for="filter_input">Search Videos</label>
				<div class="input_container">
					<input id="filter_input" class="video_filter" type="search" placeholder="Type a keyword...">
					<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="ionicon"><path d="M221.09 64a157.09 157.09 0 1 0 157.09 157.09A157.1 157.1 0 0 0 221.09 64Z" fill="none" stroke="" stroke-miterlimit="10" stroke-width="32px"/><path d="M338.29 338.29 448 448" fill="none" stroke="" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32px"/></svg>
				</div>
				<p class="video-status" aria-live="polite" aria-atomic="true"></p>
			</form>
			<div class="video-wrap"></div>
		</section>
	</main>
	<?php include_once dirname(__DIR__) . '/includes/footer.php'; ?>
</body>

</html>