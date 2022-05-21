require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

function changeName(ele){
    let id2 = ele.id.toString().concat('0');
    let fileNameField = document.getElementById(id2);
    let UploadedFileName = ele.files[0].name;
    fileNameField.innerText = UploadedFileName;
}