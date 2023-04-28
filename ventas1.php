<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Pagina de prueba">
  <meta name="keywords" content="codigo basico PHP">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
</head>

<div class="grid-container">
<?php include('dibuja_menu.php'); ?>
                 
        <?php   
       
            $id = $_POST["txtidv"];
            $cliente = $_POST["id_cli"];
            $produc = $_POST["id_pro"];
            $cant = $_POST["txtc"];
            $fech= $_POST["txthora"];
            $valu = $_POST["txtvalor"];
            

            //abrir conexión 
            include("conexion.php");
            $bd  = conectar();
            if (!$bd) return;

            //prepara y ejecuta consulta en BD 
            $sql = "insert into ventas values($id,'$cliente','$produc',$cant,'$fech',$valu)";
            $res = mysqli_query($bd,$sql);
            if ($res){
              echo "<div data-closable class='alert-box callout success'>
              <i class='fa fa-check'></i> Registro adicionado con exito!
              <button class='close-button' aria-label='Dismiss alert' type='button' data-close>
                <span aria-hidden='true'>&CircleTimes;</span>
              </button>
            </div>";
            }
            else{
                echo "<h3>Error: </h3>";
                echo "<p>Registro no adicionado: "   . mysqli_error($bd) . "</p>";
            }
            //cerrar conexión
            mysqli_close($bd);
        ?>
        <hr>
        <tbody id="divres">
        <h2>Facuturacion</h2>
      <table border="4">
       <thead>
       <tr>
       <th>Medicamento</th>
       <th>Cantidad</th>
       <th>Valor total</th>
       </tr>
       </thead>
       
       </tbody>
        
    </div>
  <!--Fin container-->

  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.min.js"></script>
  <script src="js/app.js"></script>

</body>

</html>
