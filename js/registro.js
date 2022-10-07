function registraUsr()
{
    let nombre = document.getElementById('nombres').value;
    let mail = document.getElementById('mail').value;
    let password = document.getElementById('password').value;
    let confirmacion_pass = document.getElementById('confirmacion_pass').value;

    let msg=    "NOMBRE: " + nombre +
                "MAIL: " + mail +
                "CONTRASEÑA: " + password +
                "CONFIRMACION: " + confirmacion_pass;
                console.log(msg);
}

function validaUsr()
{
    //Todos los campos son obligatorios
    // Nombre: que tenga minimo 5 caracteres
    // mail: que tenga la estructura de mail
    // password: que sean minimo 8 caracteres maximo 10
    // que tenga una letra mayuscula
    // que tenga una letra minuscula
    // confirmacion: que sea igual

    let nombre = document.getElementById('nombres').value;
    let mail = document.getElementById('mail').value;
    let password = document.getElementById('password').value;
    let password2 = document.getElementById('confirmacion_pass').value;
    

    if (nombre ===  '') {
        console.log("El campo nombre es obligatorio")
    }

    if (mail === '' ) {
        console.log("El campo mail es obligatorio")
    }

    if (password === '') {
        console.log("El campo password es obligatorio")
    }
    
    if (nombre.length < 5){
        console.log('El nombre esta muy chirris, mínimo 5 caracteres')
    }

    if (password.length < 8 && password.length > 10) {
        console.log('No esta en rango')
    }

    if (password != password2) {
        console.log('No son iguales')
    }

    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

    if (!emailRegex.test(mail))
    {
        console.log("El correo es inválido");
    }




}

