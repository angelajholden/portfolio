<?php include_once dirname(__DIR__) . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php 
$title = 'Contact Me | Angela J Holden | Software Engineer &amp; Frontend Developer';
include_once dirname(__DIR__) . '/includes/head.php' ?>

<body>
	<?php include_once dirname(__DIR__) . '/includes/header.php'; ?>
	<main id="content" class="main">
		<section class="contact">
			<div class="wrap">
				<h2 class="secondary-heading">Contact Me</h2>
				<!-- modify this form HTML and place wherever you want your form -->
				<form class="form" action="https://formspree.io/f/xyzyqyve" method="POST">
					<div class="form-inputs">
						<label class="access-hidden" for="first_name">First Name (required)</label>
						<input id="first_name" name="first_name" type="text" placeholder="First Name (required)" required="required">
						<label class="access-hidden" for="last_name">Last Name (required)</label>
						<input id="last_name" name="last_name" type="text" placeholder="Last Name (required)" required="required">
						<label class="access-hidden" for="email">Email (required)</label>
						<input id="email" type="email" name="email" placeholder="Email (required)" required="required">
						<label class="access-hidden" for="phone">Phone (optional)</label>
						<input id="phone" name="phone" placeholder="Phone (optional)" type="tel">
					</div>
					<label class="access-hidden" for="message">Message (required)</label>
					<textarea id="message" name="message" placeholder="Message (required)" rows="7" required="required"></textarea>
					<!-- your other form fields go here -->
					<button class="button teal-solid" type="submit">Submit</button>
				</form>
			</div>
		</section>
	</main>
	<?php include_once dirname(__DIR__) . '/includes/footer.php'; ?>
</body>

</html>