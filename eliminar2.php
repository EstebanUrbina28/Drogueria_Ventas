<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Pagina de prueba">
  <meta name="keywords" content="codigo basico PHP">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
</head>

<body>


  <div class="grid-container">
        <?php include('dibuja_menu.php'); ?>
        <h2>Resultado de la eliminación </h2>
        <?php 
            //capturando datos de entrada
            $id = $_POST["victima"];
            //abrir conexión 
            include("conexion.php");
            $bd  = conectar();
            if (!$bd) return;

            //prepara y ejecuta consulta en BD 
            $sql = "delete from personas where ideper=$id";
            $res = mysqli_query($bd,$sql);
            if ($res){
                echo "<h3>Registro eliminado con éxito</h3>";
            }
            else{
                echo "<h3>Error: </h3>";
                echo "<p>Registro no eliminado: "   . mysqli_error($bd) . "</p>";
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
