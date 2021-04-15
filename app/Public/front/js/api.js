/********************** api adress ********************** */
document.querySelector("#adress").addEventListener("input", function () {
    if (this.value.length > 4) {
        let url = `https://api-adresse.data.gouv.fr/search/?q=${this.value}&limit=5`;

        fetch(url)
            .then(response => response.json())
            .then(data => {
                let array = data.features;
                let affichage = "<ul>";
                for (ad of array) {
                    affichage += `<li>${ad.properties.label}</li>`;
                };
                affichage += "</ul>";

                let item = document.querySelector("#item");
                item.innerHTML = affichage;

                var items = document.querySelectorAll("#item ul li");  
                item.classList.remove("display");            
                for (var i = 0; i < items.length; i++) {
                    items[i].onclick = function () {
                        document.querySelector('#adress').value = this.innerHTML;
                        item.classList.add("display");
                    };
                };
            });
    }
});