let path='';
let sort='name';
window.onload = loadElements();

function loadElements(){
    const sendData = {
        path: path ,
        sort: sort
    };
    const formData =JSON.stringify(sendData);
    fetch( 'check-directory.php', { method : "post" , body : formData } )
        .then( res => res.json() ).then( data =>{
            console.log(data.elements);
            console.log(data.path);
        });
}