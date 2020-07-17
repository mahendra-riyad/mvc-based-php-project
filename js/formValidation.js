console.log("welcome to pubg mobile");

document.querySelector("#email").addEventListener('input', (e) => {
    let email = e.target.value;
    const message = document.querySelector('#email_message');
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(e.target.value)) {
        message.textContent = '';
        
    } else {
        message.textContent = "Incorrect email";
    }  
});

document.querySelector("#password").addEventListener('input', (e) => {
    let password = e.target.value;
    const message = document.querySelector('#password_checker');
    var paswd = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
    if (password.match(paswd)) {
        message.textContent = "Correct";
    } else {
        message.textContent = "To check a password between 8 to 15 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character"
    }
});

document.querySelector("#tenth").addEventListener('input', (e) => {
    const message = document.querySelector('#tenth_check');
    const tenth = e.target.value;
    if(isNaN(tenth)) {
        message.textContent = "please enter number";
    } else if(tenth <0 || tenth > 100 ) {
        message.textContent = "plase enter number b/w 0 and 100."
    } else {
        message.textContent = '';
    }
})

document.querySelector("#twelve").addEventListener('input', (e) => {
    const message = document.querySelector('#twelve_check');
    const tenth = e.target.value;
    if(isNaN(tenth)) {
        message.textContent = "please enter number";
    } else if(tenth <0 || tenth > 100 ) {
        message.textContent = "plase enter number b/w 0 and 100."
    } else {
        message.textContent = '';
    }
})

document.querySelector("#btech").addEventListener('input', (e) => {
    const message = document.querySelector('#btech_check');
    const tenth = e.target.value;
    if(isNaN(tenth)) {
        message.textContent = "please enter number";
    } else if(tenth <0 || tenth > 100 ) {
        message.textContent = "plase enter number b/w 0 and 100."
    } else {
        message.textContent = '';
    }
});


function CheckTerms() {
    var email = document.getElementById("email").value;
    var e_check = false;

    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
       e_check = true;
    }

    var password = document.getElementById("password").value;
    var p_check = false;

    var paswd = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
    if (password.match(paswd)) {
        p_check = true;
    }

    var tenth = document.getElementById("tenth").value;
    var tenth_check = true;

    if(isNaN(tenth)) {
        tenth_check = false;
    } else if(tenth <0 || tenth > 100 ) {
        tenth_check = false;
    }

    var twelve = document.getElementById("twelve").value;
    var twelve_check = true;

    if(isNaN(twelve)) {
        twelve_check = false;
    } else if(twelve <0 || twelve > 100 ) {
        twelve_check = false;
    } 

    var btech = document.getElementById("btech").value;
    var btech_check = true;

    if(isNaN(btech)) {
        btech_check = false;
    } else if(btech <0 || btech > 100 ) {
        btech_check = false;
    } 

    if(e_check && p_check && tenth_check && twelve_check && btech_check) {
        return true;
    } else {
        return false;
    }
}