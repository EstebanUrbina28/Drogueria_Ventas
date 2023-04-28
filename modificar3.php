<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manejo de Bases de Datos - ESCUELA</title>
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
</head>

<body>


  <div class="grid-container">
        <?php include('dibuja_menu.php'); ?>
        <h1>Resultado de la modificacion </h1>
        <?php 
            //capturando datos de entrada
            $id = $_POST["txtid"];
            $id2 = $_POST["txtid2"];
            $nom = $_POST["txtnom"];
            $gen = $_POST["txtgen"];
            $edad = $_POST["txteda"];

            //abrir conexión 
            include("conexion.php");
            $bd  = conectar();
            if (!$bd) return;

            //prepara y ejecuta consulta en BD 
            $sql = "update personas set ideper='$id', nomper='$nom', genper='$gen', edaper=$edad where ideper='$id2'";
            //echo $sql;
           
            $res = mysqli_query($bd,$sql);
            $con = mysqli_affected_rows($bd);
            echo "<p>Registros afectados $con  </p>";
            if ($res){
                echo "<h3>Registro actualizado con éxito</h3>";
            }
            else{
                echo "<h3>Error: </h3>";
                echo "<p>Registro no actualizado: "   . mysqli_error($bd) . "</p>";
            }
            //cerrar conexión
            mysqli_close($bd);
        ?>
        <hr>
        
    </div>
  <!--Fin container-->

  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.min.js"></script>
  <script src="js/app.js"></script>

</body>

</html>
