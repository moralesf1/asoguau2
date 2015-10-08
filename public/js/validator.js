$(function() {
    //El boton desencadena la accion
    $('#enviar').submit(function() {
        //Utilizamos una expresion regular
        var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
        
        //Se utiliza la funcion test() nativa de JavaScript
        if(regex.test($('#email').val().trim())) {
            alert('Correo validado');
        }
        else {
            alert('La direccion de correo no es valida');
        }
    });
});