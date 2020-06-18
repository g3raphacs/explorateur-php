let aria = document.getElementById('aria');
// Liste les objets Aria
let ariaObjects =[];

let filesWindow = document.getElementById('files');
// Liste les objets Fichiers
let fileObjects =[];

// Fonction de tri
let dropdownItem = document.getElementsByClassName("sortItem");

function fileSort(param){
    sort=param.innerText;
    loadElements();
}

for(let i=0 ; i<dropdownItem.length ; i++){
    let sortFunc = 'fileSort(this)';
    dropdownItem[i].setAttribute('onclick', sortFunc);
}


// crée les variables par defaut à envoyer
let home = "home";
let path='';
let sort='type';
// lance la fonction loadElements lorsque la fenêtre a fini de charger
window.onload = loadElements();


function newPath(index){
    path=''
    for(let i= 1 ; i<=index ; i++){
        path += ariaObjects[i]+"/"
    }
    loadElements();
}
function addpath(object){
    path+=object.innerText+"/";
    loadElements();
}
function download(object){
    var link=document.createElement('a');
         link.href=home+"/"+path+object.innerText;
         link.download=object.innerText;
         document.body.appendChild(link);

        link.click();

        document.body.removeChild(link);
}

function select(obj,index){
    let filesObj = document.getElementsByClassName('file');
    if(fileObjects[index].selected == false){
        fileObjects[index].selected = true;
        filesObj[index].classList.add("selected");
        filesObj[index].classList.remove("unselected");
    }
    else{
        fileObjects[index].selected = false;
        filesObj[index].classList.remove("selected");
        filesObj[index].classList.add("unselected");
    }
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
            if(ariaObjects.length>1){
                let elementItem = document.createElement("p");
                elementItem.innerHTML='<a href="#"><span class="fas fa-arrow-circle-left button-back"></span></a>';
                elementItem.setAttribute('id', "btn-back");
                elementItem.setAttribute('onclick', 'newPath('+(ariaObjects.length-2)+')');
                // elementItem.classList.add("backblock");
                filesWindow.appendChild(elementItem);
            }

            for (let i = 0; i < data.elements.length; i++) {
                fileObjects.push(data.elements[i]);
                let elementName=fileObjects[i].name;
                fileObjects[i].selected = false;
                let elementItem = document.createElement("div");
                elementItem.innerHTML="<p>"+elementName+"</p>";
                elementItem.classList.add("type-"+fileObjects[i].type);
                elementItem.classList.add("fileblock");
                elementItem.classList.add("file");
                elementItem.classList.add("unselected");

                let elementclick = 'select(this,'+i+')'
                    elementItem.setAttribute('onclick', elementclick);

                if(fileObjects[i].type ==''){
                    let elementdblclick = 'addpath(this,'+i+')'
                    elementItem.setAttribute('ondblclick', elementdblclick);
                    elementItem.style.color = "rgb(255,220,100)";
                }
                else{
                    let elementdblclick = 'download(this,'+i+')'
                    elementItem.setAttribute('ondblclick', elementdblclick);
                }
                filesWindow.appendChild(elementItem);
            }
        });
}

