// Show the details section
function showDetails() {
    const detailsSection = document.getElementById("details-section");
    detailsSection.style.display = "block";
}

// Hide the details section
function hideDetails() {
    const detailsSection = document.getElementById("details-section");
    detailsSection.style.display = "none";
}

// Change background color of the main content area
/*function changeBackgroundColor() {
    const mainContent = document.querySelector("body");
    mainContent.style.backgroundColor = mainContent.style.backgroundColor === "hsla(202, 73%, 91%, 0.745)" ? "#183c51be" : "hsla(202, 73%, 91%, 0.745)";
} */

function changeBackgroundColor() {
    const mainContent = document.querySelector("body");
    const currentColor = window.getComputedStyle(mainContent).backgroundColor;
    if (currentColor === "rgba(24, 60, 81, 0.745)") {
        mainContent.style.backgroundColor = "hsla(202, 73%, 91%, 0.745)";
    } else {
        mainContent.style.backgroundColor = "#183c51be";
    }
}

