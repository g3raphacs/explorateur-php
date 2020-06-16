let path='dossier 1/';
let sort='name';
window.onload = loadElements();

function loadElements(){
    const sendData = {
        path: path ,
        sort: sort
    };
    console.log(sendData);

    var formData = new FormData();
    for (let [key, value] of Object.entries(sendData)) {
        formData.append(key, JSON.stringify(value));
      }

    fetch( 'check-directory.php', { method : "post" , body : formData } )
        .then( res => res.json() ).then( data =>{
            console.log(data.elements);
            console.log(data.path);
        });
}