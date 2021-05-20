

//************** menu click *******************/

let burger = document.querySelector('#burger')
let ul = document.querySelector('ul')

    burger.addEventListener('click',() => {
        ul.classList.toggle('switch') 
    })


/*************** slider *********************/ 

let firstSlide = document.querySelector('#slider').firstElementChild
let slider = document.querySelectorAll('#slider li')
let index = 0

firstSlide.setAttribute('id', 'is-visible') /* attribution de l id rendant l image visible */

function nextSlide(){ /* enleve l' id et le remet sur la slide suivante  et met àjour l'index */
 slider[index].removeAttribute('id', 'is-visible')
  if(index != slider.length-1){
      index++
  }else{
      index = 0
  }
  slider[index].setAttribute('id','is-visible')
}

setInterval(() => { /* gestion de l'interval */
    nextSlide();
},20000);

/*******************confirm mail **************/


let validation = document.getElementById("inscription");
    validation.addEventListener('submit', function () {
    window.alert("votre message a bienété envoyé");
    })


