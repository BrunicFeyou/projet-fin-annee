
const sidebar= document.querySelector(".icone-navbar")
const navbar= document.querySelector(".navbar-vertical2")



/* sidebar.addEventListener("click", function(){
    navbar.style.display= "block";
    navbar.classList.add('transition')
})

body_accueil.addEventListener("click", function (){
    navbar.style.display= 'none';
    
}) */
 sidebar.addEventListener('click', function() {
    navbar.classList.toggle("hide")
 })