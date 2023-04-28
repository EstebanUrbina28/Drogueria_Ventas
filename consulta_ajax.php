<?php 
    //abrir conexión 
    include("conexion.php");
    $bd  = conectar();
    if (!$bd) return;
    echo "<h4>Resultados de consulta</h4>";
    echo "<hr>";
    //prepara y ejecuta consulta en BD 
    $sql = "select genero, count(*) as cuenta FROM cliente group by (genero)";
    $res = mysqli_query($bd,$sql);
    while ($arr = mysqli_fetch_array($res)){
       if ($arr[0]=="M") { 
           echo "<h4>Cantidad de hombres: </h4>";
           echo "<p>$arr[1]</p>";
        }
        else{
           echo "<h4>Cantidad de mujeres: </h4>";
           echo "<p>$arr[1]</p>";
        }
    }
    //cerrar conexion
    mysqli_close($bd);
?>