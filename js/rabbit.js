if (document.readyState === "complete") {
    //Already loaded!
} else {
    //Add onload or DOMContentLoaded event listeners here: for example,
    /* window.addEventListener("onload", function () {
        // accordions now contains an array of all Accordion instances
        var accordions = bulmaAccordion.attach();
    }, false); */
    //or
    document.addEventListener("DOMContentLoaded", function () {
        // accordions now contains an array of all Accordion instances
        var accordions = bulmaAccordion.attach();

        // Get all "navbar-burger" elements
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any navbar burgers
        if ($navbarBurgers.length > 0) {

            // Add a click event on each of them
            $navbarBurgers.forEach(el => {
                el.addEventListener('click', () => {

                    // Get the target from the "data-target" attribute
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);

                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });
            });
        }
    }, false);
}

function inputChange(inputValue, inputId) {
    var inputlabel = document.getElementById(inputId + "-label");
    if (inputValue != "") {
        inputlabel.classList.remove("form-hide");
    } else {
        inputlabel.classList.add("form-hide");
    }

    if (inputId == "email-input") {
        var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var emailValid = re.test(inputValue.toLowerCase());

        var inputBox = document.getElementById(inputId);
        var emailInvalidLabel = document.getElementById("email-input-label-invalid");

        if (emailValid) {
            emailInvalidLabel.classList.add("form-hide");
            inputBox.classList.add("is-success");
            inputBox.classList.remove("is-danger");
        } else {
            emailInvalidLabel.classList.remove("form-hide");
            inputBox.classList.add("is-danger");
            inputBox.classList.remove("is-success");
        }
    }
};

function submitForm() {
    if (document.getElementById("name-input").value != "" &&
        document.getElementById("email-input").classList.contains("is-success") &&
        document.getElementById("phone-input").value != "" &&
        document.getElementById("message-input").value != "") {

        var xmlhttp = window.XMLHttpRequest ?
            new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");

        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                alert(xmlhttp.responseText); // Here is the response
        }

        var name = document.getElementById('name-input').value;
        var email = document.getElementById('email-input').value;
        var phone = document.getElementById('phone-input').value;
        var message = document.getElementById('message-input').value;

        xmlhttp.open("POST", "contact_me.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("name=" + name + "&email=" + email + "&phone=" + phone + "&message=" + message);
    }
}