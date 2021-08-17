//************** menu click *******************/

let burger = document.querySelector('#burger')
let ul = document.querySelector('ul')

burger.addEventListener('click', () => {
    ul.classList.toggle('switch')
})

