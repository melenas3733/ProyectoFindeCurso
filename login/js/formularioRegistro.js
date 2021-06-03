const nombre = document.getElementById('Nombre');
const nombreError = document.getElementById('nombreError');

const apellido = document.getElementById('Apellido');
const apellidoError = document.getElementById('ApellidoError');

const apellido2 = document.getElementById('Apellido2');
const apellido2Error = document.getElementById('Apellido2Error');

const dni = document.getElementById('DNI');
const dniError = document.getElementById('dniError');

const email = document.getElementById('Email');
const emailError = document.getElementById('EmailError');

const contraseña = document.getElementById('Contraseña');
const contraseñaError = document.getElementById('ContraseñaError');

const contraseña2 = document.getElementById('Contraseña2');
const contraseña2Error = document.getElementById('Contraseña2Error');


nombre.addEventListener('keyup', validarNombre);
apellido.addEventListener('keyup', validarApellido);
apellido2.addEventListener('keyup', validarApellido2);
dni.addEventListener('keyup', validarDni);
email.addEventListener('keypress', validarEmail);
contraseña.addEventListener('keyup',validarPassword);
contraseña2.addEventListener('keyup',validarPassword2);


function validarNombre(){
    let regularExpresion = /^[a-zA-Z]{3,45}/g;
    if (regularExpresion.test(nombre.value)){
        nombreError.hidden =true;
        nombre.style.borderColor = 'green';
    
    }   else{
        nombreError.innerHTML="Nombre de 3 letras minimo";
        return nombreError.hidden = false;
    }
}

function validarApellido(){
    let regularExpresion = /^[a-zA-Z]{3,45}/g;
    if (regularExpresion.test(apellido.value)){
        apellidoError.hidden =true;
        apellido.style.borderColor = 'green';
    
    }   else{
        apellidoError.innerHTML="Apellido de 3 letras minimo";
        return apellidoError.hidden = false;
    }
}

function validarApellido2(){
    let regularExpresion = /^[a-zA-Z]{3,45}/g;
    if (regularExpresion.test(apellido2.value)){
        apellido2Error.hidden =true;
        apellido2.style.borderColor = 'green';
    
    }   else{
        apellido2Error.innerHTML="Apellido de 3 letras minimo";
        return apellido2Error.hidden = false;
    }
}

function validarDni() {
    let regularExpresion = /^[0-9]{8}[A-Za-z]{1}$/g;
    if (regularExpresion.test(dni.value)) {
        let dniInteger = parseInt(dni.value.substring(0, 8));
        let letra = dni.value.charAt(8);
        //console.log("esta es la letra que introduce el usuario : "+letra);
        var letras = ['T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E'];
        //console.log(dniInteger+ " posicion del array");
        //console.log(letras[dniInteger % 23]);
        if (letra.toUpperCase() == letras[dniInteger % 23]) {
            dniError.hidden = true;
            dni.style.borderColor = 'green';
        } else {
            dniError.innerHTML = "El formato del dni no es correcto( letra no coindcide ) ";
            dniError.hidden = false;

        }

    } else {
        dniError.innerHTML = "El formato del dni no es correcto(8 digitos y una letra sin guion) ";
        dniError.hidden = false;

    }

}

function validarEmail() {
    let RegEx = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (RegEx.test(email.value)) {
        emailError.hidden=true;
        email.style.borderColor='green';
    }else{
        emailError.innerHTML="el foramto del email no es correcto";
        emailError.hidden=false;
        
    }

}


    function validarPassword(){
        let RegEx =/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,45}$/;
        if (RegEx.test(contraseña.value)) {
            ContraseñaError.hidden=true;
            contraseña.style.borderColor='green';
        }else{
            ContraseñaError.hidden=false;
            ContraseñaError.innerHTML="necesitas mayusculas, minusculas, numero y carcater(minimo 8 ) ";
        }
    }
    
    function validarPassword2(){
        if (contraseña.value == contraseña2.value){
            contraseña2Error.hidden=true;
            contraseña2.style.borderColor='green';
        }else{
            contraseña2Error.hidden=false;
            contraseña2Error.innerHTML="No tienes puesta la misma contraseña";
        }
    }