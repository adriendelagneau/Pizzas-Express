//************** menu click *******************/

let burger = document.querySelector('#burger')
let ul = document.querySelector('ul')

burger.addEventListener('click', () => {
    ul.classList.toggle('switch')
})



/*******************confirm mail **************/


let validationInscription = document.getElementById("inscription");

if (validationInscription != null) {
    validationInscription.addEventListener('submit', (x) => {
        window.alert("votre message a bien été envoyé");
    })
}