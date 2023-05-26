
/*
const suppression= document.querySelector('.lien-delete')
const modal_suppression= document.querySelector('.fond-suppression')
const annuler= document.querySelector('.annuler')

suppression.addEventListener('click', function(){
    modal_suppression.style.display= "block";
})

annuler.addEventListener('click', function(){
    modal_suppression.style.display= "none";
})
*/


function popupdel(id) {
    let modal_suppression = document.querySelector('#supp'+id)
    let annuler = document.querySelector('#supp'+id+ ' .annuler ')

    modal_suppression.style.display = "block"
    
    annuler.addEventListener('click', function(){
        modal_suppression.style.display= "none"
    })
}