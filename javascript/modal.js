/* document.querySelector(btn-partager).style.display= none;
document.querySelector(btn-partager).style.display= block; */

const modal= document.querySelector(".fond")
const popup= document.querySelector("#forms-pub")
const body= document.querySelector('.body-accueil')
const fermer= document.querySelector('.close')
const navbar_verticale= document.querySelector('.la-nav-bar')
const navbar_horizontal= document.querySelector('.navbar-horizontal')
const taglist= document.querySelector('.tags-list-deroulante')
const btntag= document.querySelector('.le-btn-tags li')
//const lst= document.querySelectorAll('.tags-list-deroulante').textContent;

 //const lst1 = document.getElementById("hidden-tag").setAttribute('lst', lst)

// console.log(lst1)

/* if (!isConnected) {
    popup.style.display= 'none' ;
}  */
   
popup.addEventListener('click', function (){
    modal.style.display= 'block' ; 
    
})

fermer.addEventListener('click', function (){
    modal.style.display= 'none' ; 
    
})





/* suppression.addEventListener('ckick', function(){
    confirm('Etes vous sûr de vouloir supprimer ce poste ?')
})
 */
/* function myFunction(){
    confirm('Voulez-vous vraiment supprimer ce poste ?')
}
 */
/* if(modal.style.display= 'block'){
    navbar_verticale.classList.add("z-index")
}


else{
    navbar_verticale.classList.remove("z-index")
}



if(modal.style.display= 'block'){
    navbar_horizontal.classList.add("z-index")
}
else{
    
        navbar_horizontal.classList.remove("z-index")
    
} */

// Lorsque j'appui sur un tag dans la page tags les posts correspondant aux tags s'affichent
   // il y'a un système de filtre qui tri les postes
   // si 