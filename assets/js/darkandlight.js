document.addEventListener("DOMContentLoaded", function() {
    const modeToggleContainer = document.getElementById("modeToggleContainer");
    const modeToggle = document.getElementById("modeToggle");

    modeToggle.addEventListener("click", function(e) {
        e.preventDefault(); // Prevent the default behavior of the anchor tag
        // Toggle the "light-mode" class on the parent container
        modeToggleContainer.classList.toggle("light-mode");
    });
});
