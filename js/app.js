$(document).foundation();


$(document).ready(function(){

    $("#op_concepto").click(function(evt){
        //llamado AJAX 1
        //recargar pagina html en división 
        evt.preventDefault();
        $("#divres").html("<img src='images/ajax-loader.gif' alt='loader'>");
        $("#divres").load("concepto.html");
        $("#Modal1").foundation("open");//presentar ventana modal
    });


    $("#op_desarrollador").click(function(evt){
        //llamado AJAX 1
        //recargar pagina html en división 
        evt.preventDefault();
        $("#divres").html("<img src='images/ajax-loader.gif' alt='loader'>");
        $("#divres").load("desarrollador.html");
        $("#Modal1").foundation("open");
    });


    $("#op_sql").click(function(evt){
        //llamado AJAX 2
        //recargar pagina PHP en división 
        evt.preventDefault();
        $.ajax({
            url: "consulta_ajax.php",
            beforeSend: function(){
                $("#divres").html("<img src='images/ajax-loader.gif' alt='loader'>");
            },
            success: function(datos){
                $("#divres").html(datos);
            }
        });
        $("#Modal1").foundation("open");
    });

    $("#cmdBuscar").click(function(evt){
        //llamado AJAX 3
        //recargar pagina PHP en división 
        $.ajax({
            url: "consulta_persona.php",
            type: "POST",
            data: {txtBuscar : $("#txtBuscar").val()},
            beforeSend: function(){
                $("#divres").html("<img src='images/ajax-loader.gif' alt='loader'>");
            },
            success: function(datos){
                $("#divres").html(datos);
            }
        });
        $("#Modal1").foundation("open");
    });

    $("#frmReportes").submit(function(evt){
        evt.preventDefault();
        $.ajax({
            url: "reporte1.php",
            type: "POST",
            data: $("#frmReportes").serialize(),
            beforeSend: function(){
                $("#divSQL1").html("<img src='images/ajax-loader.gif' alt='loader'>");
            },
            success: function(datos){
                $("#divSQL1").html(datos);
            }
        });


    });


});
