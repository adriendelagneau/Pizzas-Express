//************** menu click *******************/

let burger = document.querySelector('#burger')
let ul = document.querySelector('ul')

burger.addEventListener('click', () => {
    ul.classList.toggle('switch')
})


  

/******************* p w a  **************/


if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
      navigator.serviceWorker.register('/serviceWorker.js').then(function(registration) {
        // Registration was successful
        console.log('ServiceWorker registration successful with scope: ', registration.scope);
      }, function(err) {
        // registration failed :(
        console.log('ServiceWorker registration failed: ', err);
      });
    });
  }
  
