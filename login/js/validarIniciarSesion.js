const email = document.getElementById('Email');
const emailError = document.getElementById('EmailError');

const contraseña = document.getElementById('Contraseña');
const contraseñaError = document.getElementById('ContraseñaError');


email.addEventListener('keypress', validarEmail);
contraseña.addEventListener('keyup',validarPassword);


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
            ContraseñaError.innerHTML="necesitas mayusculas, minusculas, numero y carcater(minimo 8 - maximo 45) ";
        }
    }