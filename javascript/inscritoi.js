const modal_inscription= document.querySelector(".fond-inscription")
const page= document.querySelector(".page")
const like= document.querySelector('.jaime')

/* let scrollCount = 0; */
page.addEventListener("scroll", function(){
    /*  scrollCount++;  */// à chaque fois que l'utilisateur scroll le compte du scroll augmente de 1 à chaque fois 
    const scrollTop = page.scrollTop; // Quantité de défilement effectuée par l'utilisateur
    const pageHeight = page.offsetHeight; // Hauteur de la page
    const screenHeight = window.innerHeight; // Hauteur de l'écran 
     if (scrollTop > (pageHeight * 0.2)) {
       console.log("je scroll");
       modal_inscription.style.display='block';
     }
     
})


