<?php
    include "fpdf/fpdf.php";
    
    class PDF extends FPDF{

        function Header(){
            $this->SetTextColor(0,64,128);
            $this->SetFont("Arial","B",15); 
            $this->Cell(0,10,utf8_decode("DORGUERIA VILLA"),0,0,"C");
            $this->Ln(10); 
            $this->SetTextColor(128,128,128);
            $this->SetFont("Arial","I",12);
            $this->Cell(0,10,"Reporte de Clientes",0,0,"C");
            $this->Ln(10);
            $this->Image("images/descarga.png",10,8,18); 
        }

        function Footer(){
            $this->SetY(-15); 
            $this->SetFont("Arial","I",9);
            $this->Cell(0,10,utf8_decode("Página ") . $this->PageNo() . " de {nb}" ,0,0,"C");
                               
        }
    }

    $doc =  new PDF();
    $doc->AliasNbPages();
    $doc->AddPage();
    $doc->SetFont("Arial");

    //conexion
    include "conexion.php";
    $bd = conectar();
    if (!$bd){
        $doc->cell(0,10,"ERROR: Base de datos no encontrada ... ");
    }
    else{

        $sql = "select id_usuario, nombre, cedula, genero,telefono,direccion from cliente order by nombre";
        $res = mysqli_query($bd,$sql);
        $doc->SetFont("Arial","B",9);
        $doc->Cell(10,10,"ID",1,0);
        $doc->Cell(50,10,"NOMBRES",1,0);
        $doc->Cell(50,10,"CEDULA",1,0);
        $doc->Cell(10,10,"GN",1,0);
        $doc->Cell(25,10,"TELEFONO",1,0);
        $doc->Cell(40,10,"DIRECCION",1,1);
        $doc->SetFont("Arial");
        $doc->SetFontSize(9);
        while ($arr = mysqli_fetch_array($res)){
            $doc->Cell(10,9,$arr[0],1,0);
            $doc->Cell(50,9,utf8_decode($arr[1]),1,0);
            $doc->Cell(50,9,$arr[2],1,0);
            $doc->Cell(10,9,$arr[3],1,0);
            $doc->Cell(25,9,$arr[4],1,0);
            $doc->Cell(40,9,$arr[5],1,1);
            
        }
        //cerrar conexion
        mysqli_close($bd);
    }

    $doc->Output();


?>