var button = document.querySelectorAll("button");
button.disabled = true;


function validateEmail(mail) {
    if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(form.email.value)) {
        button.disabled = false;

    } else {
        alert("Please enter a valid email address. Thank you!");
    }
}

function download(str) {
    if (button.disabled == 0) {
        window.open(str);
    }
}