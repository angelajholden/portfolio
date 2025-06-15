<?php include_once dirname(__DIR__) . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php 
$title = 'Contact | Angela J Holden | Software Engineer &amp; Frontend Developer';
$description = '';
$noindex = false; // or true, if you want to block this specific page
include_once dirname(__DIR__) . '/includes/head.php';
?>

<body>
	<?php include_once dirname(__DIR__) . '/includes/header.php'; ?>
	<main id="content" class="main">
		<section class="contact animate__animated animate__fadeIn">
			<div class="wrap">
				<header class="content-header">
					<h1 class="primary-heading">Contact Me</h1>
					<p>Got a question, idea, or opportunity? Send me a message using the form below—I check my inbox regularly and respond as soon as I can. I'm always happy to set up a Zoom meeting if you'd like to connect live, especially if you're a prospective client or employer. No need to be formal—I appreciate thoughtful, direct messages.</p>
				</header>
				<form class="form" action="https://formspree.io/f/xyzyqyve" method="POST">
					<div class="form-inputs">
						<label class="access-hidden" for="name">Name</label>
						<input id="name" name="name" type="text" placeholder="Name*" required="required">
						<label class="access-hidden" for="email">Email</label>
						<input id="email" type="email" name="email" placeholder="Email*" required="required">
						<label class="access-hidden" for="phone">Phone</label>
						<input id="phone" name="phone" placeholder="Phone" type="tel">
					</div>
					<label class="access-hidden" for="message">Message</label>
					<textarea id="message" name="message" placeholder="Message*" rows="7" required="required"></textarea>
					<button class="button teal-solid" type="submit">Submit</button>
				</form>
			</div>
		</section>
	</main>
	<?php include_once dirname(__DIR__) . '/includes/footer.php'; ?>
</body>

</html>