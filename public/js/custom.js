$(document).ready(function(){
	
	//Código para los Selects de carga académica
	
	$("#codAreaConocimiento").attr("disabled","disabled");
	
	$("#codCarreraProfesional").attr("disabled", "disabled");
	
	var base = window.location.protocol + "//" + window.location.host + "/asistencia_uisrael/";
	
	var obtenerCarrerasProfesionales = function(codAreaConocimiento){
		
		$.ajax({
        	type: "POST",
        	url: base + "admin/carga-academica/carreras-profesionales-ajax",
        	data: {
        		codAreaConocimiento: codAreaConocimiento,
		    },
		    dataType: "json",
		    success: function(data){
	            console.log(data);
	            var opciones = "<option value=''>Elegir solo si este curso es específico para un Area del Conocimiento</option>";
	            $.each(data, function(key, value){
	            	opciones += '<option value="' + key + '">' + value + '</option>';
	            });
	            $("#codCarreraProfesional").html(opciones);	           
	            
	        }
        });
		
	};
	
	$("#esComun").change(function(e){
    	
        var rpta = e.target.options[e.target.selectedIndex].value;
        console.log(rpta);
        
        if(rpta == "No")
        {
        	$("#codAreaConocimiento").removeAttr("disabled","disabled");
        	$("#codAreaConocimiento").attr("enable","enable");
        	$("#codCarreraProfesional").removeAttr("disabled","disabled");
        	$("#codCarreraProfesional").attr("enable", "enable");
        	
        	$.ajax({
            	type: "POST",
            	url: base + "admin/carga-academica/areas-conocimiento-ajax",
            	data: {
    		        rpta: rpta,
    		    },
    		    dataType: "json",
    		    success: function(data){
    	            console.log(data);
    	            var opciones = "";
    	            var i = 0;
    	            var codAreaConocimiento = "";
    	            
    	            $.each(data, function(key, value){
    	            	i++;
    	            	if(i == 1){codAreaConocimiento = key; } 
    	            	opciones += '<option value="' + key + '">' + value + '</option>';
    	            });
    	            
    	            $("#codAreaConocimiento").html(opciones);
    	            
    	            obtenerCarrerasProfesionales(codAreaConocimiento);
    	        }
            });
        }
        else
        {
        	$("#codAreaConocimiento").removeAttr("enable","enable");
        	$("#codAreaConocimiento").attr("disabled","disabled");
        	$("#codCarreraProfesional").removeAttr("enable","enable");
        	$("#codCarreraProfesional").attr("disabled", "disabled");
        	
        	var opcion = "<option value=''>Elige el Area del Conocimiento</option>";
        	
        	$("#codAreaConocimiento").html(opcion); 
        }
    });
	
	$("#codAreaConocimiento").change(function(e){
		
		var codAreaConocimiento = e.target.options[e.target.selectedIndex].value;
        console.log(codAreaConocimiento);
        
        obtenerCarrerasProfesionales(codAreaConocimiento);
		
	});
	
	
    
    //Eliminación via ajax
    
    /*indice 0, para editar, 
    / indice 1, para eliminar
    */
    var uris  = {
                   cp:'admin/carrera-profesional/eliminar-carrera',
                   es:'admin/estudiante/eliminar-estudiante',
                   d:'admin/docente/eliminar-docente',
   				   ciac:'admin/ciclo-academico/eliminar-ciclo',
                   pe:'admin/plan-estudio/eliminar-plan',
				   cur:'admin/curso/eliminar-curso',
                   aula:'admin/aula/eliminar-aula',
                   usu:'admin/usuario/eliminar-usuario',
                   adm:'admin/administrador/eliminar-administrador',
                   ca:'admin/carga-academica/eliminar-carga-academica',
                };

    
    var responses = {
                    lista_carreras:'admin/carrera-profesional/get-listcarreras'
                }

    var secuencialid = 0; /*para concatenar en el combo generado al editar un estudiante y asi no generar conflicto*/
    

    $(".fila").click(function(){       
        
        var id = $(this).attr("id");
    	
    	if($("#children-"+id).css("display") == "none") 
    	{
        
    		$("#children-"+id).css("display", "table-row");
 
    	}
    	else
    	{         
    		$("#children-"+id).css("display", "none");
    	}
    	
    });
    
   

    /* Seccion de eliminado */
    $('.table').on('click', 'a.delete-this',function(e){
        e.preventDefault();
        
        var $resource = $(this);
        var getid     = $resource.attr('id');
        var referer   = $(this).parents('table').data('server');
        var server    = base + uris[referer];

        BootstrapDialog.show({
            title: 'Confirmación',
            message: '<p>Estás seguro de querer eliminar éste elemento?</p><p class="text-warning">si lo eliminas permanentemente no podrás recuperarlo.</p>',
            buttons: [{
                label: 'Cancelar',
                action: function(dialog) {
                    dialog.close();
                }
            }, {
                label: 'Sí, Eliminar permanentemente',
                cssClass: 'btn-primary',
                action: function(dialog) {
                    
                    $dialog = dialog;
                    varid   = getid.replace("delete-","");

                    $.post(server, {
                        id: varid
                    },
                    function(data){
                        console.log(data);
                        if(data.response == true)
                            {
                                $resource.parents('tr').remove();
                                $dialog.close();
                                BootstrapDialog.show({
                                   title: 'Mensaje del sistema',
                                   message: 'Registro eliminado correctamente',
                                   buttons: [{
                                        label: 'Entendido',
                                        cssClass: 'btn-success',
                                        action: function(dialog) {
                                            dialog.close();
                                        }
                                    }]
                               });
                            }
                        else{
                            // print error message
                           BootstrapDialog.show({
                               title: 'Mensaje del sistema',
                               message: data.mensaje,
                               buttons: [{
                                    label: 'Entendido',
                                    cssClass: 'btn-danger',
                                    action: function(dialog) {
                                        dialog.close();
                                    }
                                }]
                           });
                        }
                    }, 'json');
                }
            }]
        });

    });
    /* Fin de la sección de eliminado */

   
    $.datepicker.regional['es'] = {
     closeText: 'Cerrar',
     prevText: '<Ant',
     nextText: 'Sig>',
     currentText: 'Hoy',
     monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
     monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
     dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
     dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
     dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
     weekHeader: 'Sm',
     dateFormat: 'yy-mm-dd',
     firstDay: 1,
     isRTL: false,
     showMonthAfterYear: false,
     yearSuffix: ''
     };
     $.datepicker.setDefaults($.datepicker.regional['es']);

    $('.datepicker').datepicker();

});


/*functions*/
