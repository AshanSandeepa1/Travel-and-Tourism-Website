let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

menu.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new Swiper('.home-slider', {
    slidesPerView: 1, 
    spaceBetween: 30, 
    centeredSlides: true, 
    autoplay: {
        
        disableOnInteraction: false, 
    },
    
});






document.querySelector('.btnlogin').addEventListener('click', function() {
    // Redirect to the new page
    window.location.href = 'login.php';
});

// todo list js

const inputBox = document.getElementById("input-box")
const listContainer = document.getElementById("list-container")

function addTask(){
    if(inputBox.value === ''){
        alert("You must write something!");
    }
    else{
        let li = document.createElement("li");
        li.innerHTML = inputBox.value;
        listContainer.appendChild(li);
        let span = document.createElement("span");
        span.innerHTML = "\u00d7";
        li.appendChild(span);

    }
    inputBox.value = "";
    saveData();

}

listContainer.addEventListener("click", function(e){
    if(e.target.tagName === "LI"){
        e.target.classList.toggle("checked");
        saveData();
        }
    else if(e.target.tagName === "SPAN"){
        e.target.parentElement.remove();
        saveData();
    }
}, false);

function saveData(){
    localStorage.setItem("data", listContainer.innerHTML);

}

function showTask(){
    listContainer.innerHTML = localStorage.getItem("data");
}

showTask();

// todo list js

function validateForm() {
    var fullName = document.getElementById('fullname').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirm-password').value;

    // Full Name validation
    if (fullName == "") {
        alert("Please enter your full name.");
        return false;
    }

    // Password strength validation
    var passwordStrength = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$/;
    if (!password.match(passwordStrength)) {
        alert("Password must contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character. It must be at least 8 characters long.");
        return false;
    }

    // Confirm Password validation
    if (password != confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }

    return true;
}