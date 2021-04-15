//************** menu click *******************/

var burger = document.querySelector('#burger')
var ul = document.querySelector('ul')

    burger.addEventListener('click',() => {
        ul.classList.toggle('switch')
    })

/*************** slider *********************/ 

var firstSlide = document.querySelector('#slider').firstElementChild
var slider = document.querySelectorAll('#slider li')
var index = 0

firstSlide.setAttribute('id', 'is-visible')

function nextSlide(){
 slider[index].removeAttribute('id', 'is-visible')
  if(index != slider.length-1){
      index++
  }else{
      index = 0
  }
  slider[index].setAttribute('id','is-visible')
}

setInterval(() => {
    nextSlide();
},6000);
