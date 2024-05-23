let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .nav');
let header = document.querySelector('.header');
let contactForm = document.querySelector('#contact-form');
let nameInput = document.querySelector('#name');
let emailInput = document.querySelector('#email');

menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
}

window.onscroll = () =>{
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');

  if(window.scrollY > 0){
     header.classList.add('active');
  }else{
     header.classList.remove('active');
  }

}

menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
}

window.onscroll = () =>{
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');

  if(window.scrollY > 0){
     header.classList.add('active');
  }else{
     header.classList.remove('active');
  }

}

// Autofill name and email fields if available in browser storage
if (localStorage.getItem('name')) {
  nameInput.value = localStorage.getItem('name');
}
if (localStorage.getItem('email')) {
  emailInput.value = localStorage.getItem('email');
}

// Save name and email to browser storage when form is submitted
contactForm.addEventListener('submit', function(event) {
  event.preventDefault();
  localStorage.setItem('name', nameInput.value);
  localStorage.setItem('email', emailInput.value);
  // submit form data to server here
});


 
