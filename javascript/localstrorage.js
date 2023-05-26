const inputmodal = document.getElementById('textspace')

const valeurinput = localStorage.getItem("inputmodal") 
// On récupère la clé de l'input que l'on stocke dans une variable




// la zone de texte qui est lui meme un input écoute les changement de l'input 
inputmodal.addEventListener('input', function(){
    localStorage.setItem("inputmodal", inputmodal.value)
    // On stock l'élément de l'input sous forme de clé et de valeur
})
// si la valeur dans le localstorage est vide, donc il n'y a rien d'écrit (après un post parex)

if (valeurinput== null ) {
    document.querySelector("#textspace").setAttribute('value', ""); //alors on lui attribut une valeur null donc il n'ya pas de texte
} else {
    //si il y'a un texte alors la valeur de l'input existe, donc le message qui est stocké, s'affiche
    document.querySelector("#textspace").setAttribute('value', valeurinput);
}



console.log("valeurinput")
console.log(valeurinput)


const poster = document.querySelector('.partager')


poster.addEventListener('click', function() {
    localStorage.removeItem("inputmodal");
})




/* const tag = document.getElementById('select') */

const tag = document.getElementById('select')
console.log(tag)
function tagstorage() {
     localStorage.setItem("tag", tag.value) 
}

const tagvalue = localStorage.getItem("tag")
console.log(tagvalue)

if(tagvalue){
    for(var i = 0; i < tag.options.length; i++ ) {
        if(tag.options[i].value === tagvalue){
            tag.options[i].selected = true; 
            break;
        }
    }
}









