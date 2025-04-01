function videoBanner() {
	const supportsVideo = !!document.createElement("video").canPlayType;
	if (supportsVideo) {
		const video = document.getElementById("video");
		const playPause = document.getElementById("play-pause");
		const play = document.querySelector(".play-button");
		const pause = document.querySelector(".pause-button");

		if (video) {
			// Hide the default controls
			video.controls = false;

			// Set the initial button state for autoplay
			play.classList.remove("active");
			pause.classList.add("active");

			playPause.addEventListener("click", (e) => {
				if (video.paused || video.ended) {
					video.play();
					// add paused button svg
					play.classList.remove("active");
					pause.classList.add("active");
				} else {
					video.pause();
					// add the play button svg
					play.classList.add("active");
					pause.classList.remove("active");
				}
			});
		}
	}
}

function animateOnScroll() {
	const observerOptions = {
		root: null, // Use the viewport as the container
		rootMargin: "0px",
		threshold: 0.25, // Trigger when 20% of the element is visible
	};

	const animateOnScroll = (entries, observer) => {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				const target = entry.target;
				const animation = target.getAttribute("data-animation");
				target.classList.add(animation);

				// Optional: Remove the observer after the animation is triggered
				observer.unobserve(target);
			}
		});
	};

	const observer = new IntersectionObserver(animateOnScroll, observerOptions);

	// Attach observer to each element
	const elements = document.querySelectorAll(".animate__animated");
	elements.forEach((el) => observer.observe(el));
}

function articleFilter() {
	const buttons = document.querySelectorAll(".article-buttons button");
	const articles = document.querySelectorAll(".article-item");

	buttons.forEach((button) => {
		button.addEventListener("click", () => {
			const category = button.getAttribute("data-category");

			// Update active button
			buttons.forEach((btn) => btn.classList.remove("active"));
			button.classList.add("active");

			// Filter articles
			articles.forEach((article) => {
				const articleCategory = article.getAttribute("data-category");

				if (category === "all" || category === articleCategory) {
					article.style.display = "";
				} else {
					article.style.display = "none";
				}
			});
		});
	});
}

function copyright() {
	const date = document.getElementById("date");
	const year = new Date().getFullYear();
	if (date) {
		date.innerHTML = year;
	}
}

document.addEventListener("DOMContentLoaded", () => {
	videoBanner();
	animateOnScroll();
	articleFilter();
	copyright();
});
