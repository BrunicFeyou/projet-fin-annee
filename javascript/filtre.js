const btnfiltre= document.querySelectorAll('.btn-tags')
const post= document.querySelectorAll(".carte-publication-texte")

/* console.log(post);
console.log( typeof post)

const postBoucle = post.forEach(function(post){
    const postClass= post.classList.item(1);
    console.log(typeof postClass); 
    console.log(postClass.length);
    postClass.forEach(function(postClass){
        Object.values(postClass).filter(function(element){
            return element== 'digital';
            
      })
    })
  
    
}) */

/* const postBoucle = post.forEach(function(element){
   return element= element.classList[1];
   
    
})
console.log(postBoucle); */

const postEssai= [];
post.forEach(function(post){
    postEssai.push(post.classList[1]);
})
/* console.log(postEssai)
console.log(typeof postEssai) */


/* console.log(postBoucle) */


btnfiltre.forEach(function(tag){
    tag.addEventListener('click', function(){
        console.log(tag)
        /* console.log(tag) */
       const data_tag=  tag.getAttribute("data-tag")  
               post.forEach(function(tweet){ 
                console.log(tweet);
                tweet.classList.add("hidden")
                if ( !tag.classList.contains("active")){
                    tweet.classList.remove("hidden")
            }
               /* const egalite= data_tag !== key */
                    if (data_tag == tweet.classList[1]){
                        tweet.classList.remove("hidden")
                    }  
            
               }) 
    })
})

const filtre= Object.values(post).filter(function(element){
      return element=== 'digital';
      
})


/* console.log(post.length) */
/* console.log(postClass) */

/* console.log(filtre) */

// à chaque fois qu'on  click sur un tag les tags correspondant s'affiche
//un tags à une couleur 
//pour ça j'ai besoin de clicker sur un tag
// Je déclare les tags -> dans un querySelectorAll 
// vu qu'il y'a plusieurs boutons je vais utiliser une boucle 
// cette boucle sélectionnera bouton par bouton 
// chaque fois qu'on click sur un tags 
// chque tague est cliqué et fais appariatre la classe tu tag
// apparaitre en display block


// dans le post je dois faire en sorte que le data tag soit égale à la classlist de l'article
//si la classlist est égale alors on fait apparitre le poste correspondant 
//mais avant le post est un oject je dois el transformer en tableau avec le Object.values(post)
//ensuite je filtre les postes dans la boucle forEach 
// je fait un getAttribut de classList au post 
//je déclare le comme une variable pour que ce soit plus facile
//
//pour chaque post je veux que chaque classlist 2 soit égale à au data_tag
// pour cela dans chaque poste je d'abord retrouvé chaque deuxième nom 
// si le deuxième nom est égale au à la data du bouton alors 
//le site filtre les postes et fait apparaitre ceux demander
//Le post est constitué de deux classes moin je veux la première classes
// pour chaque postes avec les deux classes si sa classlist est égale à l'une des claslist du tableau donc à chaque classlist du tableau 
// alors pour cha