/************** connexion admin ***************/


let p = document.createElement('p')
let bender = document.querySelector('#icon_connexion')

bender.addEventListener('click', (x) => {

    let httpRequest = new XMLHttpRequest()
    document.body.appendChild(p) /* ajout du paragraphe P */
    httpRequest.onreadystatechange = function () {
        if (httpRequest.readyState === 4) {
            p.innerHTML = httpRequest.responseText /* injection du contenu html*/
            let cross = document.getElementById("close");
            cross.addEventListener('click', (x) => {
                p.remove();
            })
        }
    }
    httpRequest.open('GET', "app/Views/front/connexion.php", true)
    httpRequest.send();


})