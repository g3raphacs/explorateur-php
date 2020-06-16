// crée les variables par defaut à envoyer
let path='dossier 1/';
let sort='name';
// lance la fonction loadElements lorsque la fenêtre a fini de charger
window.onload = loadElements();

// Fonction: Recupère les informations du dossier courant (et chargera les delements htmL par la suite)
function loadElements(){
    // crée un objet contenant les variables à envoyer
    const sendData = {
        path: path ,
        sort: sort
    };

    // Converti l'objet en données FormData pour recuperer les données en php
    var formData = new FormData();
    for (let [key, value] of Object.entries(sendData)) {
        formData.append(key, JSON.stringify(value));
      }
    //Envoi de la requète à php
    fetch( 'check-directory.php', { method : "post" , body : formData } )
        .then( res => res.json() ).then( data =>{
            //(temporaire) affiche la reponse reçue dans la console
            console.log(data.elements);
            console.log(data.path);

            //ICI Modification du code html en fonction de la réponse
        });
}