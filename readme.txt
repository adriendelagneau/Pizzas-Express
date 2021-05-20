<svg viewBox="0 0 100 80" width="40" height="40">
  <rect width="100" height="20"></rect>
  <rect y="30" width="100" height="20"></rect>
  <rect y="60" width="100" height="20"></rect>
</svg>

<svg viewBox="0 0 100 80" width="40" height="40">
  <rect width="100" height="20" rx="8"></rect>
  <rect y="30" width="100" height="20"  rx="8"></rect>
  <rect y="60" width="100" height="20"  rx="8"></rect>
</svg>


-incorporer svg
- shema bdd
-gerrer les images
-faire un read me propre



761*216
757*212

 document.getElementById("inscription").addEventListener("submit",function(){
       
        let erreur;
        var inputs = this.getElementsByTagName("input");
    
    for(let i = 0; i < inputs.length; i++){
        if(!inputs[i].value){
            erreur = 1;
        }
    }
        if(erreur){
               
        }else{
             let httpRequest = new XMLHttpRequest()
        document.body.appendChild(p) /* ajout du paragraphe P */
        httpRequest.onreadystatechange = function () {
            if (httpRequest.readyState === 4) {
                p.innerHTML = httpRequest.responseText /* injection du contenu html*/
            }
        }
        httpRequest.open('GET', "app/Views/front/connexion.php", true)
        httpRequest.send();
        }  
    })