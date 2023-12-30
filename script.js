document.addEventListener("DOMContentLoaded", function() {
	// Get references to the elements
	const menuBtn = document.querySelector(".menu-btn");
	const closeMenuBtn = document.querySelector(".close-menu-btn");
	const mainMenu = document.querySelector(".main-menu");
	const menuOverlay = document.querySelector(".menu-overlay");
	const centerTitle = document.querySelector(".center-title");
	const seriesInfo = document.querySelector(".series-info");
	const closeInfo = document.querySelector(".close-info");
	// Add a click event listener to the menu button
	menuBtn.addEventListener("click", function() {
		// Add the 'show-menu' class to the main menu element
		mainMenu.classList.add("show-menu");
		// Show the menu-overlay element by adding the 'show' class
		menuOverlay.classList.add("show");
	});

	// Add a click event listener to the close menu button
	closeMenuBtn.addEventListener("click", function() {
		// Remove the 'show-menu' class from the main menu element
		mainMenu.classList.remove("show-menu");
		// Hide the menu-overlay element by removing the 'show' class
		menuOverlay.classList.remove("show");
	});
	// Show/Hide series info
	centerTitle.addEventListener("click", function() {
		seriesInfo.classList.add("show-info");
	});
	closeInfo.addEventListener("click", function() {
		seriesInfo.classList.remove("show-info");
	});
});