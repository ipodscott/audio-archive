

// Get the element with the id 'content'
var contentElement = document.getElementById('content');

// Delay before starting the fade-in
setTimeout(function() {
  var opacity = 0;
  var intervalId = setInterval(function() {
	if (opacity >= 1) {
	  clearInterval(intervalId); // Stop the interval when opacity reaches 1
	} else {
	  opacity += 0.1; // Increase opacity by 0.1 (adjust for smoother or faster fade)
	  contentElement.style.opacity = opacity;
	}
  }, 50); // Adjust the interval timing for smoother or faster fade
}, 300); // 500ms


document.addEventListener("DOMContentLoaded", function() {
	// Get references to the elements
	const menuBtn = document.querySelector(".menu-btn");
	const closeMenuBtn = document.querySelector(".close-menu-btn");
	const body = document.querySelector("body");
	const mainMenu = document.querySelector(".main-menu");
	const menuOverlay = document.querySelector(".menu-overlay");
	const centerTitle = document.querySelector(".center-title");
	const seriesInfo = document.querySelector(".series-info");
	const closeInfo = document.querySelector(".close-info");
	
	menuBtn.addEventListener("click", function() {
		mainMenu.classList.add("show-menu");
		body.classList.add("stop-scroll");
	});
	
	closeMenuBtn.addEventListener("click", function() {
		mainMenu.classList.remove("show-menu");
		body.classList.remove("stop-scroll");
	});
	// Show/Hide series info
	centerTitle.addEventListener("click", function() {
		seriesInfo.classList.add("show-info");
		body.classList.add("stop-scroll");
	});
	closeInfo.addEventListener("click", function() {
		seriesInfo.classList.remove("show-info");
		body.classList.remove("stop-scroll");
	});
});

