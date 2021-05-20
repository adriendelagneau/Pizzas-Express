/********************** api adress ********************** */
let adress = document.querySelector("#adress")

adress.addEventListener("input", function () {
    if (this.value.length > 4) {
        let url = `https://api-adresse.data.gouv.fr/search/?q=${this.value}&limit=5`; /* enregistrement de l URL & sa variable */

        fetch(url)
            .then(response => response.json())
            .then(data => {
                let array = data.features;
                let affichage = "<ul>"; /* création de la liste */
                for (ad of array) {
                    affichage += `<li>${ad.properties.label}</li>`; /* création des propositions */
                };
                affichage += "</ul>"; /* fin de liste */

                let item = document.querySelector("#item");
                item.innerHTML = affichage;  /* ajout du contenue html */

                var items = document.querySelectorAll("#item ul li");  
                item.classList.remove("display");      /* suppression du display */
                for (var i = 0; i < items.length; i++) {
                    items[i].onclick = function () {
                        document.querySelector('#adress').value = this.innerHTML; /* au click injection du html dans l élement selectionné */
                        item.classList.add("display");
                    };
                };
            });
    }
});


