/************** connexion admin ***************/

let p = document.createElement('p')
let bender = document.querySelector('#icon_connexion') 

bender.addEventListener('click',function(){ 
    let httpRequest = new XMLHttpRequest()
    document.body.appendChild(p)
    httpRequest.onreadystatechange = function(){
        if (httpRequest.readyState === 4){
            p.innerHTML = httpRequest.responseText          
        }
    }
    httpRequest.open('GET', "app/Views/front/connexion.php", true)
    httpRequest.send(); 
})
function cross(){
    p.remove() 
}






