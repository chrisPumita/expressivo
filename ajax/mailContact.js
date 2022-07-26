// lo que sejecuta primero
$(document).ready(function () {
    //-------------------seleccionando el elemento boton agregar elemento

    console.log("Iniciando Servicios de Envio de Correo")

});

$('#frm-contacto').submit(function (e) {
    e.preventDefault();
    let terminos = !document.getElementById("terms").checked ? true:false;
    if(terminos) {
        alert("No selecciono los terminos y condiciones");
    }
    else{

        let name =$("#name").val();
        let email =$("#email").val();
        let institucion =$("#institucion").val();
        let telefono =$("#telefono").val();

        if (name === "" || email == "" || institucion == ""|| telefono == ""){
            alert("Hay informacion olbigatoria que responder")
        }
        else
        {
            $.ajax({
                type: "POST",
                url: "./control/send.php",
                data: $('#frm-contacto').serialize(),
                dataType: "json",
                success: function (result) {
                    console.log(result);
                    if(result.response=="1"){
                        $('#frm-contacto')[0].reset();
                        Swal.fire(
                            'Mensaje Enviado',
                            result.mensaje,
                            'success'
                        )
                    }
                    else{
                        let alerta =  `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Error al iniciar</strong><p>Los datos no se pudieron procesar</p>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>`;
                        $('#resp').html(alerta).show(200).delay(2500).hide(200);
                    }
                },
                error: function(result){
                    alert(result);
                }
            })
        }
    }
});
//-------------------seleccionando el elemento boton agregar elemento

$('#frm-news').submit(function (e) {
    e.preventDefault();
    let email =$("#btn-news").val();
    if (email == ""){
        Swal.fire(
            'Escriba un correo valido',
            result.mensaje,
            'error'
        )
    }
    else
    {
        $.ajax({
            type: "POST",
            url: "./control/send_news.php",
            data: {email:email},
            dataType: "json",
            success: function (result) {
                console.log(result);
                if(result.response=="1"){
                    $('#frm-news')[0].reset();
                    //tratamos los datos y hacemos acciones
                    Swal.fire(
                        '¡Excelente!',
                        result.mensaje,
                        'success'
                    )
                }
                else{
                    Swal.fire(
                        'Error al enviar el mensaje',
                        result.mensaje,
                        'error'
                    )
                }
            },
            error: function(result){
                alert(result);
            }
        })
    }
});