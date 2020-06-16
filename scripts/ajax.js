let aria = document.getElementById('aria');
// Liste les objets Aria
let ariaObjects =[];

let filesWindow = document.getElementById('files');
// Liste les objets Fichiers
let fileObjects =[];


// crée les variables par defaut à envoyer
let path='dossier 1/dossier 1-1/';
let sort='name';
// lance la fonction loadElements lorsque la fenêtre a fini de charger
window.onload = loadElements();


function newPath(index){
    path=''
    for(let i= 1 ; i<=index ; i++){
        path += ariaObjects[i]+"/"
    }
    loadElements();
}


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
            //ARIA____________________________________________________
            //supprime le contenu du fil d'ariane
            aria.innerHTML="";
            //efface les objets aria
            ariaObjects.length=0;

            for (let i = 0; i < data.path.length; i++) {

                ariaObjects.push(data.path[i]);

                let pathItem = document.createElement("li");
                pathItem.innerText=data.path[i];
                pathItem.classList.add("breadcrumb-item");

                if(i==(data.path.length-1)){
                    pathItem.classList.add("active");
                }else{
                    let ariaFunc = 'newPath('+i+')';
                    pathItem.setAttribute('onclick', ariaFunc);
                }

                if(i==(0) && data.path[i]=='home'){
                    pathItem.classList.add("isHome");
                }

                aria.appendChild(pathItem);
            }

            //FICHIERS____________________________________________________
            //supprime le contenu de la fenetre
            filesWindow.innerHTML="";
            //efface les objets fichiers
            fileObjects.length=0;

            for (let i = 0; i < data.elements.length; i++) {
                fileObjects.push(data.elements[i]);
                let elementName=fileObjects[i].name;
                let elementItem = document.createElement("div");
                elementItem.innerHTML="<p>"+elementName+"</p>";
                elementItem.classList.add("type-"+fileObjects[i].type);
                elementItem.classList.add("fileblock");

                filesWindow.appendChild(elementItem);
            }

            //ICI Modification du code html en fonction de la réponse
        });
}

document.getElementById("btn-back").addEventListener("click", function(){
    newPath(ariaObjects.length-2);
} );