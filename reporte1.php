<?php 
    //abrir conexión 
    include("conexion.php");
    $bd  = conectar();
    if (!$bd) return;
    echo "<h4>Resultados de consulta</h4>";
    echo "<hr>";
    //prepara y ejecuta consulta en BD 
    $nom = $_POST["txtnom"];
    $gen = $_POST["lstgen"];


    $sql = "select nomper FROM personas WHERE nomper like '%$nom%' and genper = '$gen'";
    $res = mysqli_query($bd,$sql);
    echo "<p>Numero de registros: " . $res->num_rows . " </p>";
    echo "<ul>";
    while ($arr = mysqli_fetch_array($res)){
        echo "<li>$arr[0]</li>";
    }
    echo "</ul>";
    //cerrar conexion
    mysqli_close($bd);
?>