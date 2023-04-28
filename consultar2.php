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
        <h3>Listado de personas por genero:</h3>
        <?php
            $gen = $_GET["lstgen"];
            if ($gen == "M") echo "<h4>Masculino</h4>";
            else echo "<h4>Femenino</h4>";
        ?>


        <table>
            <thead>
                <th>Id_Cliente </th>
                <th>Nombres Completos </th>
                <th>Cedula </th>
                <th>Genero</th>
                <th>Telefono</th>
                <th>Dirreccion</th>
            </thead>
            <tbody>
                <?php 
                    //abrir conexión 
                    include("conexion.php");
                    $bd  = conectar();
                    if (!$bd) return;

                    //prepara y ejecuta consulta en BD 
                    $sql = "select * from cliente  where genero='$gen' order by nombre";
                    //echo "<p>$sql</p>";

                    $res = mysqli_query($bd,$sql);
                    $i=0;
                    while ($arr = mysqli_fetch_array($res)){
                        echo "<tr>";
                        echo "<td>" . $arr[0] . "</td>";
                        echo "<td>" . $arr[1] . "</td>";
                        echo "<td>" . $arr[2] . "</td>";
                        echo "<td>" . $arr[3] . "</td>";
                        echo "<td>" . $arr[4] . "</td>";
                        echo "<td>" . $arr[5] . "</td>";
                        echo "</tr>";
                        $i++;
                    }
                    //cerrar conexion
                    mysqli_close($bd);
                ?>
            </tbody>
        </table>
        <hr>
        <?php  echo "Numero de personas consultadas: $i" ?>
        
    </div>
  <!--Fin container-->

  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.min.js"></script>
  <script src="js/app.js"></script>

</body>

</html>
