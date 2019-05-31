const chkPoliticas = $('#chkPoliticas');

$('#contactForm').on('submit', function(e){
    e.preventDefault();
    let nombre = $('#nombre').val();
    let email = $('#email').val();
    let mensaje = $('#mensaje').val();
    let checkPoliticas = chkPoliticas.prop('checked');

    if (checkPoliticas === false) {
        chkPoliticas.notify(
            'Debe aceptar nuestras políticas de seguridad para continuar.', {
                position: "bottom"
            }
        );

        return;
    }


});