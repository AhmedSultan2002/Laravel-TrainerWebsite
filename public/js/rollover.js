document.addEventListener("DOMContentLoaded", function () {
    const trainerImage = document.getElementById("trainerImage");
    let hoverTimeout;

    // Image sources
    const defaultImage = "images/Imama.jpeg";
    const hoverImage1 = asset("images/Ahmed.jpeg");
    const hoverImage2 = "images/Tehreem.jpeg";
    const hoverImage3 = "images/Eman.jpeg"; // Fourth image

    // Function to switch to the first hover image on mouseover
    trainerImage.onmouseover = function () {
        // Fade out the image
        trainerImage.classList.add("fade");

        // Change image source after fade-out and fade back in
        setTimeout(() => {
            trainerImage.src = hoverImage1;
            trainerImage.classList.remove("fade");
        }, 1000); // 1-second delay for the transition

        // Switch to the second hover image after 3 seconds
        hoverTimeout = setTimeout(function () {
            trainerImage.classList.add("fade");
            setTimeout(() => {
                trainerImage.src = hoverImage2;
                trainerImage.classList.remove("fade");
            }, 1000); // Fade transition
        }, 3000);

        // Switch to the third hover image after 6 seconds
        hoverTimeout = setTimeout(function () {
            trainerImage.classList.add("fade");
            setTimeout(() => {
                trainerImage.src = hoverImage3;
                trainerImage.classList.remove("fade");
            }, 1000); // Fade transition
        }, 6000);
    };

    // Revert to the default image on mouseout
    trainerImage.onmouseout = function () {
        clearTimeout(hoverTimeout); // Cancel any pending hover timeout
        trainerImage.classList.add("fade");
        setTimeout(() => {
            trainerImage.src = defaultImage;
            trainerImage.classList.remove("fade");
        }, 1000); // Fade back to default image
    };
});
