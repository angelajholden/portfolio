<?php include_once dirname(__DIR__) . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php 
$title = 'Contact Me | Angela J Holden | Software Engineer &amp; Frontend Developer';
include_once dirname(__DIR__) . '/includes/head.php' ?>

<body>
	<?php include_once dirname(__DIR__) . '/includes/header.php'; ?>
	<main id="content" class="main">
		<section class="contact animate__animated animate__fadeIn">
			<div class="wrap">
				<header class="content-header">
					<h1 class="primary-heading">Contact Me</h1>
				</header>
				<!-- modify this form HTML and place wherever you want your form -->
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
					<!-- your other form fields go here -->
					<button class="button teal-solid" type="submit">Submit</button>
				</form>
			</div>
		</section>
	</main>
	<?php include_once dirname(__DIR__) . '/includes/footer.php'; ?>
</body>
<script src="<?php echo BASE_URL; ?>js/main.js"></script>

</html>