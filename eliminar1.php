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
        <h2>Eliminar Clientes</h2>
        
        <form action="eliminar2.php" method="post">
        <p>Seleccione una persona</p>
        <?php 
            //abrir conexión 
            include("conexion.php");
            $bd  = conectar();
            if (!$bd) return;

            //prepara y ejecuta consulta en BD 
            $sql = "select 	id_usuario, nombre from cliente order by nombre";
            $res = mysqli_query($bd,$sql);
            
            while ($arr = mysqli_fetch_array($res)){
               
                echo "$arr[1] <input type='radio' value='$arr[0]' name='victima'><br>";
            }
            //cerrar conexion
            mysqli_close($bd);
        ?>
        <hr>
        <input type="submit" value="Eliminar" class="button alert">

        
    </div>
  <!--Fin container-->

  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.min.js"></script>
  <script src="js/app.js"></script>

</body>

</html>
