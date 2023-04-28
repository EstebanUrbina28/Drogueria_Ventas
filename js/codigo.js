$(document).ready(function(){
    //alert("1");

    $("#frm1").submit(function(evt){
        evt.preventDefault();
        //alert("2");

        var m1 = ($("#id_cli").val());
        var m2 = ($("#id_pro").val());
        var c1 = parseInt($("#txtc").val());
        var c2 = parseInt($("#txtvalor").val());


        $("#divres").html("")
        var r1 = c1*c2;
        
            $("#divres").append("<tr><td> " +  m2 + " </td><td>" + c1 + " </td><td>" +  r1 + "</td><td>") ;
    
    });



});