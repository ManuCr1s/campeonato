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
export function officesName(selec,url){
    $.ajax({
        headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
        type:'POST',
        url:url,
        success: function(date){
            let myData = JSON.parse(date);
            let options = createOptions(myData);
            selec.html(options);
        }
    });
}
export function createOptions(myData){
    let fragment = document.createDocumentFragment(); 
    let defaultOption = document.createElement('option');
    defaultOption.value = 0;
    defaultOption.text = 'SELECCIONE';
    fragment.appendChild(defaultOption);
    $.each(myData, function(index, param) {
        let option = document.createElement('option');
        option.value = Object.values(param)[0];
        option.text = Object.values(param)[1].toUpperCase();
        fragment.appendChild(option);
    });
    return fragment;
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
                                        <button id="modelTeam" type="button" class="btn btn-success btn-link btn-xs" data-toggle="modal" data-target="#exampleModal" data-nombre="`+row.team_name+`" data-id=`+row.id_team+`>
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
/*INCIO FUNCTIONS PLAYER */
//SE UTILIZA LA PRIMERA FUNCION PARA BUSCAR DNI
export function showTeam(url,data,name,id,dni){
        $.ajax({
            headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
            type:'POST',
            url:url,
            data:{'dni':data.data('username')},
            success:function(response){
                if(!('status' in response)){
                    name.val(response[0].team_name);  
                    id.val(response[0].team_id);  
                    dni.val(response[0].team_user)                
                }else{
                    swal({
                        title: "¡¡¡Upps ocurrio un Probema!!!!",
                        text: response.message,
                        buttonsStyling: false,
                        confirmButtonClass: "btn btn-warning btn-fill",
                        type: "warning"                       
                        },function() {
                                window.location.href = '/teams';
                        });
                }
            }
        });
}
export function sendDataPlayer(url){
    $(document).on('submit','#player',function(e){
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
                                    window.location.href = '/player';
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
export function player(url,data,table){
    $.ajax({
        headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
        type:'POST',
        url:url,
        data:{'dni':data.data('username')},
        success: function(respuesta) {
                let dataTableInstance;
                 if(!('status' in respuesta)){
                      if ($.fn.DataTable.isDataTable(table)) {
                        table.DataTable().clear().destroy();
                    }
                        dataTableInstance = table.DataTable({
                        data: respuesta.data,
                        columns: [
                            {
                                data: null,
                                render: function (data, type, row) {
                                    return `
                                        <div class="img-container d-flex justify-content-center">
                                            <img src="${row.player_photo}" alt="Foto" style="max-width: 100px; max-height: 100px;">
                                        </div>
                                    `;
                                }
                            },
                            { 
                                data: 'player_dni',
                                class: 'text-center'
                            },
                            { 
                                data: 'player_name',
                                class: 'text-center'
                            },
                            { 
                                data: 'player_lastname',
                                class: 'text-center'
                            },
                            { 
                                data: 'player_born',
                                class: 'text-center'
                            },
                            { 
                                data: 'legacy',
                                class: 'text-center'
                            },
                            {
                                data: null,
                                render: function (data, type, row) {
                                    return `
                                        <button type="button" class="btn btn-info btn-link btn-icon modelPhotoPlayer" data-toggle="modal" data-target="#photoModal" data-id=`+row.player_dni+`>
                                             <i class="fa fa-image"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-link btn-xs modelDeletePlayer" data-toggle="modal" data-target="#deleteModal" data-nombre="`+row.player_name+` `+row.player_lastname+`" data-id=`+row.player_dni+`>
                                            <i class="fa fa-times"></i>
                                        </button>
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
export function deletePlayer(){
    $(document).on('click', '.modelDeletePlayer', function () {
        $('#dniPlayer').val($(this).data('id'));
        $('#namePlayer').val($(this).data('nombre'));
    });
}
export function deletePlayerTeam(url){
    $(document).on('submit','#deletePlayer',function(e){
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
                            window.location.href = '/player';
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
export function photoPlayer(){
    $(document).on('click', '.modelPhotoPlayer', function () {
        $('#dniPhotoPlayer').val($(this).data('id'));
    });
}
export function updatePhotoPlayer(url){
     $(document).on('submit','#photoPlayer',function(e){
            e.preventDefault();
            let formData = new FormData(this); 
            $.ajax({
                type:'POST',
                url:url,
                data:formData,
                processData: false,
                contentType: false,
                success:function(response){
                    if(response.status){
                        swal({
                            title: "¡¡¡Excelente!!!",
                            text: response.message,
                            buttonsStyling: false,
                            confirmButtonClass: "btn btn-warning btn-fill",
                            type: "success"                       
                        },function() {
                                window.location.href = '/player';
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
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        const errores = xhr.responseJSON.errors;
                         swal({
                            title: "¡¡¡Upps ocurrio un Probema!!!",
                            text: Object.values(errores)[0][0],
                            buttonsStyling: false,
                            confirmButtonClass: "btn btn-warning btn-fill",
                            type: "warning"                       
                        });
                    } else {
                        console.error('Error inesperado:', xhr);
                    }
                }
            });
     });
  
}
/*FIN FUNCTIONS PLAYER */
/*INCIO FUNCIONES DASH*/
export function chartRegister(element,url){
    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Error en la solicitud: ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {

        var dataViews = {
            labels: ['Total'],
            series: [
                [data],
            ]
            };

        var optionsViews = {
            seriesBarDistance: 10,
              axisX: {
                  showGrid: false
              },
              height: "350px"
        };

        var responsiveOptionsViews = [
            ['screen and (max-width: 640px)', {
              seriesBarDistance: 5,
              axisX: {
                labelInterpolationFnc: function (value) {
                  return value[0];
                }
              }
            }]
        ];

        Chartist.Bar(element, dataViews, optionsViews, responsiveOptionsViews);
    })

}
/*FIN FUNCIONES DAHS*/