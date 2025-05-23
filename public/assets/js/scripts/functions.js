/*INICIO FUNCTION REGISTER*/
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
/*FIN FUNCTION REGISTER*/
/*INICIO FUNCTION LOGIN*/
export function login(data,url){
    data.on('submit',function(e){
        e.preventDefault();
        $.ajax({
            url: url, 
            type: 'POST',
            data: data.serialize(),
            success: function(respuesta) {
                if(respuesta.status){
                        window.location.href = respuesta.route;
                }else{
                    swal({
                        title: "¡¡¡Upps ocurrio un Probema!!!",
                        text: respuesta.message,
                        buttonsStyling: false,
                        confirmButtonClass: "btn btn-warning btn-fill",
                        type: "warning"                       
                    });
                }
            }
        });
    });
}

/*FIN FUNCTION LOGIN*/
/*INCIO FUCNTION TEAMS */
export function team(url,data,form,register,table){
    $.ajax({
        headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
        type:'POST',
        url:url,
        data:{'dni':data.data('username')},
        success: function(respuesta) {
                let dataTableInstance;
                 if('status' in respuesta){
                    register.hide();
                    form.show();
                }else{
                    register.show();
                    form.hide();
                    if ($.fn.DataTable.isDataTable(table)) {
                        table.DataTable().clear().destroy();
                    }
                    // Inicializar una nueva instancia de DataTable
                    dataTableInstance = table.DataTable({
                        data: respuesta.data,
                        columns: [
                            { 
                                data: 'id_team',
                                class: 'text-center'
                            },
                            { 
                                data: 'team_name',
                                class: 'text-center'
                            },
                            { 
                                data: 'office_name',
                                class: 'text-center'
                            },
                            {
                                data: null,
                                render: function (data, type, row) {
                                    return `
                                        <center>
                                        <button id="modelTeam" type="button" class="btn btn-success btn-link btn-xs" data-toggle="modal" data-target="#exampleModal" data-nombre=`+row.team_name+` data-id=`+row.id_team+`>
                                            <i class="fa fa-edit" ></i>
                                        </button>
                                        </center>
                                    `;
                                }
                            }
                        ]
                    });
                    return dataTableInstance;
            
                }
        }
    });
        
}
export function registerTeam(form,url){
    form.on('submit',function(e){
        e.preventDefault();
        $.ajax({
            headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
            type:'POST',
            url:url,
            data:form.serialize(),
            success:function(response){
                if(response.status){
                    swal({
                        title: "¡¡¡Excelente!!!",
                        text: response.message,
                        buttonsStyling: false,
                        confirmButtonClass: "btn btn-warning btn-fill",
                        type: "success"                       
                    },function() {
                            window.location.href = '/login';
                    });
                }else{
                    swal({
                        title: "¡¡¡Upps ocurrio un Probema!!!",
                        text: response.message,
                        buttonsStyling: false,
                        confirmButtonClass: "btn btn-warning btn-fill",
                        type: "warning"                       
                    });
                }
            }
        });
    });
}
export function changeNameTeam(){
    $(document).on('click', '#modelTeam', function () {
        $('#idTeam').val($(this).data('id'));
        $('#nameTeam').val($(this).data('nombre'));
    });
}
export function sendChangeTeam(url){
    $(document).on('submit','#changeTeam',function(e){
        e.preventDefault();
        $.ajax({
            headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
            type:'POST',
            url:url,
            data:$(this).serialize(),
            success:function(response){
                if(response.status){
                    swal({
                        title: "¡¡¡Excelente!!!",
                        text: response.message,
                        buttonsStyling: false,
                        confirmButtonClass: "btn btn-warning btn-fill",
                        type: "success"                       
                    },function() {
                            window.location.href = '/teams';
                    });
                }else{
                    swal({
                        title: "¡¡¡Upps ocurrio un Probema!!!",
                        text: response.message,
                        buttonsStyling: false,
                        confirmButtonClass: "btn btn-warning btn-fill",
                        type: "warning"                       
                    });
                }
            }
        });
    });
}
/*FIN FUCNTION TEAMS */
