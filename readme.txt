Projet examen developpeur web junior.

Site vitrine pizzeria.

languages :

    -html
    -css
    -javascript
    -php

utilisation du M.V.C






modifications :


-html :

    - j'ai fait attention à lindentation,
    - j 'ai aérré beaucoup le code surtout les formulaires ( dsl pour le mal de crane provoqué par le code précédent ... )
    - verification de tout les "input" & "textarea", label & type correspondant bien
    - remplacement des boutons type:
                                    <div>
                                        <a>
                                    </div>
    par des boutons type :
                            <form>
                                <input>
                            </form>

    -repasser le code au validateur W3, hormis des warning du au faite que mes titres soit en dehors des sections, voir absent 
    pour les articles,plus d'erreur( j'ai protegé mon back il n'est plus accessible pour l'inspecteur, vous serrez redirigé sur 
    la page d'accueil) 
    

-css : pas de changements,(définition d'un style pour tout écran jusqu'a 1200px et modification au dessus).

-js : ajout d un manifest.json ainsi que du serviceWorker pour le label PWA.
     vous pouvez dés à présent l installer sur votre tablette ou smartphone, cependant il n est pas complètement finit 
     (service hors ligne, et gestion du cache reste à travailler)
    je l'ai mis car il ne provoque pas d'erreur, mais me permet de gagner le label PWA bon pour le référencement.


-sql : ajout de trois tables ( livreurs, user, commandes), afin de pouvoir réaliser une "petite" triple jointure
        (listes des commandes avec le nom du user ,si il existe, ainsi que celui du livreur)
        la table 'commandes' à été "rentrer en dure".

- php : -Création de variable de session pour admin & user,conditionnant ainsi l accés au back à l'existance de celle-ci.
        destruction de cette variable à la deconnexion ainsi que sur toutes les pages du front(detuisant la session si 
        l utilisateur utilise "la fleche back" du navigateur pour revenir en arrière sur une page du front)
        impossible egalement de modifier l url pour accéder au back(vous serez renvoyé sur la page d'accueil)

        -création des methodes relatives aux nouvelles tables :

            - CRUD sur table livreurs
            - CRUD sur table user 

- FINAL :

    repasser le code avec "LightHHouse" pout test de performance( plutot correct)

    j' ai essayé de tenir compte de vos remarques ,conscient qu' il reste encore beaucoup de choses à améliorer, 
    j éspère que vous y trouvez matière à l'obtention du diplome.

    merci et bonne lecture.




        B166ER                  2021