const btnSuscripcion = $('#btnSuscribirme');
const chkPoliticas = $('#chkPoliticas');
const txtEmail = $('#email');
const token = $('#csrf');


btnSuscripcion.on('click', (accion) => {

    accion.preventDefault();

    const email = txtEmail.val();
    const politicas = chkPoliticas.prop('checked');

    // comprobacion de campos llenos
    const validado = validarCampos(email, politicas);

    if (validado) {

        var request = $.ajax({
            url: '/nueva-suscripcion',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                email
            }
        });

        request.done((msg) => {
            if (msg.ok) {
                $.notify(msg.mensaje, 'success');
                txtEmail.val('');
            } else {
                txtEmail.notify(
                    msg.mensaje, {
                        position: "top",
                    }
                );
            }
        });

        request.fail((err, txt) => {
            console.log('Error en la petición: ', txt);
        });
    }

});

const validarCampos = (email, politicas) => {

    if (email === undefined || email === '') {
        txtEmail.notify(
            'Por favor complete el email', {
                position: "top",
            }
        );

        return false;
    }

    if (politicas === false) {
        chkPoliticas.notify(
            'Debe aceptar nuestras políticas de seguridad para continuar.', {
                position: "bottom"
            }
        );

        return false;
    }

    return true;
};