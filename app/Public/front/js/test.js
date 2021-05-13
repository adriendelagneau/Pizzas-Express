/*function aside(){
    var x = window.screen.width
    let aside = document.querySelector('aside')

    if(x > 1200){
        let httpRequest = new XMLHttpRequest()
        httpRequest.onreadystatechange = function(){
            if (httpRequest.readyState === 4){
                aside.innerHTML = httpRequest.responseText          
            }
        }
        httpRequest.open('GET', "app/Views/front/aside.php", true)
        httpRequest.send(); 

    }
}
window.onresize =  aside*/




/*validation du formulaire*/ 

let formbutton = document.getElementById("cguAccept");
let accept = document.getElementById("submit"); 
accept.addEventListener('click', function() {

    if(accept.checked==true) {
        formbutton.disabled=false;
    }
    else  {
        formbutton.disabled=true;
    }


});