document.addEventListener("DOMContentLoaded", () => {
	const supportsVideo = !!document.createElement("video").canPlayType;
	if (supportsVideo) {
		const video = document.getElementById("video");
		const playPause = document.getElementById("play-pause");
		// Hide the default controls
		video.controls = false;

		const play = document.querySelector(".play-button");
		const pause = document.querySelector(".pause-button");

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
});
