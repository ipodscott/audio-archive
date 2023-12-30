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
	});
	closeInfo.addEventListener("click", function() {
		seriesInfo.classList.remove("show-info");
	});
});