const beige= document.getElementById('be')
const orange= document.getElementById('or')
const jaune= document.getElementById('ja')
const bleu= document.getElementById('bl')
const rouge= document.getElementById('ro')
const marron= document.getElementById('ma')
const noir= document.getElementById('bla')
const vert= document.getElementById('ve')
const violet= document.getElementById('no')
const gris= document.getElementById('gr')

const addPost= document.getElementById('forms-pub')
const navBar= document.querySelector('.navbar-vertical')
const btnNav= document.querySelectorAll('.btn-nav')
const tags= document.querySelectorAll('.btn-tags')



 const bisque= beige.addEventListener('click', function(){
    
    if (beige.style.background!= 'bisque'){
      beige.classList.add("active")
        removeBg()
        beige.style.background= 'bisque'
        navBar.style.background='bisque'
        addPost.style.background='bisque'
        
        
        
      } else {
        beige.classList.remove("active")
        beige.style.background= ''
        navBar.style.background=''
        addPost.style.background=''
        
        
       
      }
   
    })  

   const orangy=  orange.addEventListener('click', function(){
        if (orange.style.background!= 'orange'){
          orange.classList.add("active")
            removeBg()
            orange.style.background= 'orange'
            navBar.style.background='orange'
            addPost.style.background='orange'
            
           
          } else {
            orange.classList.remove("active")
            orange.style.background= ''
            navBar.style.background=''
            addPost.style.background=''
            
            
          }
       
        })  

const yellow= jaune.addEventListener('click', function(){
    if (jaune.style.background!= 'yellow'){
      jaune.classList.add("active")
        removeBg()
        jaune.style.background= 'yellow'
        navBar.style.background='yellow'
        addPost.style.background='yellow'
        
        
      } else {
        jaune.classList.remove("active")
        jaune.style.background= ''
        navBar.style.background=''
        addPost.style.background=''
        
        
        
      }
   
    })  

const bleue= bleu.addEventListener('click', function(){
    if (bleu.style.background!= 'blue'){
      bleu.classList.add("active")
        removeBg()
        bleu.style.background= 'blue'
        navBar.style.background='blue'
        addPost.style.background='blue'
        
        
      } else {
        bleu.classList.remove("active")
        bleu.style.background= ''
        navBar.style.background=''
        addPost.style.background=''
        
        
      }
   
    }) 

             
           
 const red= rouge.addEventListener('click', function(){
    if (rouge.style.background!= 'red'){
      rouge.classList.add("active")
        removeBg()
        rouge.style.background= 'red'
        navBar.style.background="red"
        addPost.style.background='red'
        
        
      } else {
        rouge.classList.remove("active")
        rouge.style.background= ''
        navBar.style.background=""
        addPost.style.background=''
        
        
      }
   
    }) 

const brown=  marron.addEventListener('click', function(){
     if (marron.style.background!= 'brown'){
      marron.classList.add("active")
        removeBg()
        
         marron.style.background= 'brown'
         navBar.style.background='brown'
         addPost.style.background='brown'
         
         
       } else {
        marron.classList.remove("active")
         marron.style.background= ''
         navBar.style.background=''
         addPost.style.background=''
        
         
       }
    
     }) 

const black=  noir.addEventListener('click', function(){
    if (noir.style.background!= 'black'){
      noir.classList.add("active")
        removeBg()
        noir.style.background= 'black'
        navBar.style.background='black'
        addPost.style.background='black'
        
        
      } else {
        noir.classList.remove("active")
        noir.style.background= ''
        navBar.style.background=''
        addPost.style.background=''
        
        
      }
   
    }) 

    const green=  vert.addEventListener('click', function(){
        if (vert.style.background!= 'green'){
          vert.classList.add("active")
            removeBg()
            vert.style.background= 'green'
            navBar.style.background='green'
            addPost.style.background='green'
            
            
          } else {
            vert.classList.remove("active")
            vert.style.background= ''
            navBar.style.background=''
            addPost.style.background=''
            
            
          }
       
        }) 

    const purple=  violet.addEventListener('click', function(){
        if (violet.style.background!= 'violet'){
          violet.classList.add("active")
            removeBg()
            
            violet.style.background= 'violet'
            navBar.style.background='violet'
            addPost.style.background='violet'
            
            
          } else {
            violet.classList.remove("active")
            violet.style.background= ''
            navBar.style.background=''
            addPost.style.background=''
            
            
          }
       
        }) 

    const gray=  gris.addEventListener('click', function(){
        if (gris.style.background!= 'gray'){
          gris.classList.add("active")
            removeBg()
            gris.style.background= 'gray'
            navBar.style.background='gray'
            addPost.style.background='gray'
            
            
          } else {
            gris.classList.remove("active")
            gris.style.background= ''
            navBar.style.background=''
            addPost.style.background=''
            
            
          }
       
        }) 


//console.log(document.querySelectorAll('.btn-tags, #forms-pub'))
function removeBg() {
    document.querySelectorAll('.btn-tags, #forms-pub, .navbar-vertical').forEach(
        function(item) {
            item.style.background = ''
        }
    )
}