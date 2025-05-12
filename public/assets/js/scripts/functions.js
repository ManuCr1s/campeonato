export function dniSearch(dni,btn,url,name,lastname){
    btn.on('click',function(){
        if(dniValidate(dni.val())){
            swal({
                title: "¡¡¡Upps ocurrio un Probema!!!",
                text: "Ingrese dni Correcto",
                buttonsStyling: false,
                confirmButtonClass: "btn btn-warning btn-fill",
                type: "warning"
            });
        }else{
            let data = {
                dni:dni.val()
            };
            $.ajax({
                headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
                type:'POST',
                url:url,
                data:data,
                success:function(data){  
                    if(data.status){
                        name.val(data.nombres);
                        lastname.val(data.apellidoPaterno+' '+data.apellidoMaterno);
                    }else{
                        swal({
                            title: "¡¡¡Upps ocurrio un Probema!!!",
                            text: data.message,
                            buttonsStyling: false,
                            confirmButtonClass: "btn btn-warning btn-fill",
                            type: "warning"                       
                        });
                    }
                
                   
                },
            });
        }
    });
}
export function dniValidate(dni){
    return (dni.length !== 8);
}
export function onlyNumbers(code){
    let variable = code.key;
    return variable >= '0' && variable <= '9';
}

export function register(data,url){
    data.on('submit',function(e){
        e.preventDefault();
        $.ajax({
            headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
            url: url, 
            type: 'POST',
            data: data.serialize(),
            success: function(respuesta) {
                if(respuesta.status){
                    swal({
                        title: "¡¡¡Felicitaciones!!!",
                        text: 'Ingrese al sistema del campeonato',
                        buttonsStyling: false,
                        confirmButtonClass: "btn btn-warning btn-fill",
                        type: "success"                       
                        },function() {
                            // Esta función se ejecuta cuando el usuario hace clic en el botón
                            window.location.href = '/login';
                      });
                }else{
                    swal({
                        title: "¡¡¡Upps ocurrio un Probema!!!",
                        text: respuesta.message,
                        buttonsStyling: false,
                        confirmButtonClass: "btn btn-warning btn-fill",
                        type: "warning"                       
                    });
                }
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    const errores = xhr.responseJSON.errors;
                    const primerCampo = Object.keys(errores)[0];
                    const primerMensaje = errores[primerCampo][0];
                    swal({
                        title: "¡¡¡Upps ocurrio un Probema!!!",
                        text: primerMensaje,
                        buttonsStyling: false,
                        confirmButtonClass: "btn btn-warning btn-fill",
                        type: "warning"                       
                    });
                }
              }
        });
    });
}