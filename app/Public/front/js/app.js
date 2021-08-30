//************** menu click *******************/

let burger = document.querySelector('#burger')
let ul = document.querySelector('ul')

if(burger != null){
burger.addEventListener('click', () => {
    ul.classList.toggle('switch')
})
}

  

/******************* p w a  **************/


window.addEventListener('load', function() {    // on attend la fin du chargement de la page pour eviter d' épuiser le navigator dès le depart
if ('serviceWorker' in navigator) {     // on verifie la présence d'un "serviceWorker"
      navigator.serviceWorker.register('/serviceWorker.js').then(function(registration) {
        console.log('ServiceWorker registration successful with scope: ', registration.scope);
        // enregistrement du "SW" 
      }, function(err) {
        // gestion error
        console.log('ServiceWorker registration failed: ', err);
      });
    };
  }
)
