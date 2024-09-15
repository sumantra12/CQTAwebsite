//change navbar styles on scrool


window.addEventListener('scroll', () => {

    document.querySelector('nav').classList.toggle
    ('window-scroll', window.scrollY > 0)
})

// show/hide nav menu
document.addEventListener("DOMContentLoaded", function () {
    const menu = document.querySelector(".nav__menu");
    const menuBtn = document.querySelector("#open-menu-btn");
    const closeBtn = document.querySelector("#close-menu-btn");

    function handleResize() {
        if (window.innerWidth > 1024) {
            // On larger screens, hide both buttons and ensure the menu is displayed
            menuBtn.style.display = "none";
            closeBtn.style.display = "none";
            menu.style.display = "flex";
        } else {
            // On smaller screens, show the open button and hide the menu initially
            menu.style.display = "none";  // Ensure the menu is hidden initially
            menuBtn.style.display = "inline-block";
            closeBtn.style.display = "none";
        }
    }

    // Initial check
    handleResize();

    // Event listener for clicking the open button
    menuBtn.addEventListener('click', () => {
        menu.style.display = "flex";
        menuBtn.style.display = "none";  // Hide the open button
        closeBtn.style.display = "inline-block";  // Show the close button
    });

    // Event listener for clicking the close button
    closeBtn.addEventListener('click', () => {
        menu.style.display = "none";
        menuBtn.style.display = "inline-block";  // Show the open button
        closeBtn.style.display = "none";  // Hide the close button
    });

    // Listen for window resize to ensure the buttons are displayed correctly
    window.addEventListener('resize', handleResize);
});

