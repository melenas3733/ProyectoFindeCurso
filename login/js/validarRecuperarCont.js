
const email = document.getElementById('Email');
const emailError = document.getElementById('EmailError');

const dni = document.getElementById('DNI');
const dniError = document.getElementById('dniError');

email.addEventListener('keypress', validarEmail);
dni.addEventListener('keyup', validarDni);


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