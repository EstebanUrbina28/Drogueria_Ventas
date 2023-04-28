<?php
echo "
<center> <h1>Sistema de Informacion </h1></center>
<div class='top-bar'>
  <div class='top-bar-left'>
    <ul class='dropdown menu' data-dropdown-menu>
      <li class='menu-text'> DROGUERIA VILLA </li>
      <li>
        <a href='#'>Clientes</a>
        <ul class='menu vertical'>
          <li><a href='listar1.php'>Listar</a></li>
          <li><a href='index.php'>Insertar</a></li>
          <li><a href='eliminar1.php'>Eliminar</a></li>
          <li><a href='consultar1.php'>Consultar por genero</a></li>
        </ul>
      </li>
      <li>
        <a href='#'>Productos</a>
        <ul class='menu vertical'>
          <li><a href='listar_pro.php'>Listar</a></li>
          <li><a href='productor1.php'>Insertar</a></li>
          <li><a href='eliminar_pro.php'>Eliminar</a></li>
        </ul>
      </li>
      <li>
        <a href='#'>Ventas</a>
        <ul class='menu vertical'>
          <li><a href='venta.php'>Ventas</a></li>
        </ul>
      </li>
      <li>
        <a href='#'>Otros</a>
        <ul class='menu vertical'>
          <li><a href='#'id='op_desarrollador'>Desarrollador</a></li>
          <li><a href='#' id='op_sql'>Consulta SQL</a></li>
        </ul>
      </li>
      <li>
        <a href='#'>Reportes Pdf</a>
        <ul class='menu vertical'>
          <li><a href='reportePDF.php' target='_blank'>Clientes</a></li>
          <li><a href='ventasPDF.php' target='_blank'>ventas</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class='top-bar-right'>
    <ul class='menu'>
      <li><input type='search' placeholder='Buscar persona' id='txtBuscar'></li>
      <li><button type='button' class='button' id='cmdBuscar'>Buscar</button></li>
    </ul>
  </div>
</div>
<hr>
<div class='reveal' id='Modal1' data-reveal>
  <div id='divres'></div>
  <button class='close-button' data-close aria-label='Close modal' type='button'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>
";



?>