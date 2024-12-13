function validateForm(event) {
    event.preventDefault(); // Prevent form submission

    // Get form values
    const firstName = document.getElementById('first-name').value.trim();
    const lastName = document.getElementById('last-name').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const services = document.getElementById('services').value;
    const message = document.getElementById('message').value.trim();
    let form = document.getElementById('contactForm');

    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    const phonePattern = /^\+1\s\(\d{3}\)\s\d{3}-\d{4}$/;
    
    
    let isValid = true;

    // Clear previous error messages
    document.getElementById('firstNameError').innerText = "";
    document.getElementById('lastNameError').innerText = "";
    document.getElementById('emailError').innerText = "";
    document.getElementById('phoneError').innerText = "";
    document.getElementById('servicesError').innerText = "";
    document.getElementById('messageError').innerText = "";
    document.getElementById('successMessage').style.display = "none";

    // Validate first name
    if (firstName === "") {
        document.getElementById('firstNameError').innerText = "First name is required.";
        isValid = false;
    }

    // Validate last name
    if (lastName === "") {
        document.getElementById('lastNameError').innerText = "Last name is required.";
        isValid = false;
    }

    // Validate email
    if (email === "" || !emailPattern.test(email)) {
        document.getElementById('emailError').innerText = "Please enter a valid email address.";
        isValid = false;
    }

    // Validate phone number
    if (phone === "" || !phonePattern.test(phone)) {
        document.getElementById('phoneError').innerText = "Phone number must be in the format +1 (XXX) XXX-XXXX.";
        isValid = false;
    }

    // Validate service selection
    if (services === "") {
        document.getElementById('servicesError').innerText = "Please select a service.";
        isValid = false;
    }

    // Validate message
    if (message === "") {
        document.getElementById('messageError').innerText = "Message is required.";
        isValid = false;
    }

    // If form is valid, show success message
    if (isValid) {
        showSuccessMessage();

        setTimeout(() => {
            form.submit();
        }, 1500);
        
    }
}


function showSuccessMessage() {
    let success = document.getElementById('successMessage');
    success.style.display = 'block';
}