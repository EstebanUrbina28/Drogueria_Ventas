<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
</head>

<body>


  <div class="grid-container">
        <?php include('dibuja_menu.php'); ?>
        <h2>Modificar personas</h2>
        <div class="grid-x">
      
        <div class="cell small-6">    
        <form action="modificar2.php" method="post">
        <p>Seleccione una persona</p>
        <select name='victima' id='victima'>
            <?php 
                //abrir conexión 
                include("conexion.php");
                $bd  = conectar();
                if (!$bd) return;

                //prepara y ejecuta consulta en BD 
                $sql = "select id_usuario , nombre from cliente order by nombre";
                $res = mysqli_query($bd,$sql);
                
                while ($arr = mysqli_fetch_array($res)){
                    echo "<option value='$arr[0]'>$arr[1]</option>";
                }
                //cerrar conexion
                mysqli_close($bd);
            ?>
        </select>
        <hr>
        <input type="submit" value="Modificar Persona" class="button warning">
         </div>
         </div>           
        
    </div>
  <!--Fin container-->

  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.min.js"></script>
  <script src="js/app.js"></script>

</body>

</html>
