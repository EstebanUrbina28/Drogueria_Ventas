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

<body>
  <div class="grid-container"> 
  <?php include('dibuja_menu.php'); ?>
    <div class="grid-x">
      
        <div class="cell small-6">
        <h2>Facuturacion</h2>
        <form action="ventas1.php" id="frm1" method="POST">
        <label for="txtidv">Id_Venta </label>
          <input type="number" name="txtidv" id="txtiv" required>
          <label for="txtidpac"> Nombre cliente </label>
          <select name='id_cli' id='id_cli'>
            <?php 
                //abrir conexión 
                include("conexion.php");
                $bd  = conectar();
                if (!$bd) return;

                //prepara y ejecuta consulta en BD 
                $sql = "select id_usuario, nombre from cliente order by nombre";
                $res = mysqli_query($bd,$sql);
                
                while ($arr = mysqli_fetch_array($res)){
                    echo "<option value='$arr[0]'>$arr[1]</option>";
                }
                  
            ?>
        </select>
        <label for="txtpro"> Producto </label>
          <select name='id_pro' id='id_pro'>
            <?php 
                
                $sql = "select id, nombre from pruductos order by nombre";
                $res = mysqli_query($bd,$sql);
                
                while ($arr = mysqli_fetch_array($res)){
                    echo "<option value='$arr[0]'>$arr[1]</option>";
                }
               //cerrar conexion
               mysqli_close($bd);
               
            ?>
            <?php
             date_default_timezone_set('America/Mexico_City');
             $fecha=date("Y-m-d H:i:s");
     
            ?>
        </select> 
          <label for="txtvalor">Cantidad </label>
          <input type="number" name="txtc" id="txtc" required max="50" value="1">         
          <label for="txthora">Fecha - Hora</label>
          <input type="datetime" name="txthora" id="txthora" required value="<?=$fecha?>"> 
          <label for="txtvalor">Valor A pagar </label>
          <input type="number" name="txtvalor" id="txtvalor" required max="500000" value="100000">
         <br> 
        <input type="submit" value="Guardar Venta" class="success button">
        <input type="reset" value="Limpiar Venta" class="success button">
        
      </div>
      <div class="cell small-6">
      
     </form>
          
      </div>
      <div data-role="footer">
            <center><p>Realizado por Esteban Urbina <br>PASTO NARIÑO<br>2021</p></center>
        </div>

      
      

  </div>
  <!--Fin container-->

  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.min.js"></script>
  <script src="js/app.js"></script>
  

</body>

</html>