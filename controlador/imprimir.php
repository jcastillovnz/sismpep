 


<?php
 
@session_start();

require('conexion.php');
    require('fpdf/fpdf.php');
    
    class PDF extends FPDF 
    {
        function AcceptPageBreak()
        {
         

            $this->Addpage();
            $this->SetFillColor(232,232,232);
            $this->SetFont('Arial','B',12);
            $this->SetX(10);
            $this->Cell(70,6,'Registro Nº:',1,0,'C',1);
            $this->SetX(80);
            $this->Cell(20,6,'PLACA',1,0,'C',1);
            $this->SetX(100);
            $this->Cell(70,6,'Modelo',1,0,'C',1);
             $this->Cell(70,6,'Marca',1,0,'C',1);
            $this->Ln();
        }
        
        function Header()
        {
            
            $this->SetFont('Arial','B',15);
            $this->Cell(80);
            $this->Cell(30,10,'Sismpep',1,0,'C');
            $this->Ln(20);
        }
        
        function Footer()
        {
            $this->SetY(-15);
            $this->SetFont('Arial','I',8);
            $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');


        }
    }



   



    
    $busqueda= $_SESSION['id_equipo'];
    $query = "SELECT * FROM t002_equipos WHERE id_equipo  LIKE '".$busqueda."' OR placa LIKE '" . $busqueda."'";
    $resultado=$enlace->query($query);
    
    $pdf= new fpdf();

    $pdf->Addpage();


    // Logo
$pdf->Image($_SERVER["DOCUMENT_ROOT"]."/sismpep/imagenes/logo.jpg",10,8,33);


      $pdf->SetFont('Arial','B',12);
     $pdf->SetFillColor(150,232,232,232);
 $pdf->SetX(10); 
 $pdf->SetY(20);
 $pdf->Cell(45,6,utf8_decode('Reporte de equipo'),0,0,'E');

 $pdf->SetX(60);


date_default_timezone_set('America/Caracas');
$fecha=date("d-m-Y h:i:s a ",time()+1800);

Fuente: http://tttony.blogspot.com/2007/08/zona-horaria-con-php.html
 $pdf->Cell(65,6,utf8_decode('Fecha de impresion:'),0,0,'E');
 $pdf->SetX(103);
$pdf->Cell(80,6,utf8_decode($fecha),0,0,'E');

  $pdf->ln (40);












   

 while($row = $resultado->fetch_assoc())
    {

         $pdf->SetFont('Arial','B',11);
     $pdf->SetFillColor(232,232,232,232);

 $pdf->Cell(75,6,utf8_decode('Registro de equipos'),1,0,'C');



  $pdf->ln ();

$pdf->SetFont('Arial','B',11);
   $pdf->SetFillColor(232,232,232,232);
     $pdf->SetX(10);
     $pdf->Cell(40,6,utf8_decode('Registro Nº'),1,0,'C',1);

     $pdf->SetX(50);
     $pdf->Cell(35,6,utf8_decode('Placa'),1,0,'C',1);

      $pdf->SetX(85);
     $pdf->Cell(40,6,utf8_decode('Modelo'),1,0,'C',1);

      $pdf->SetX(125);
     $pdf->Cell(40,6,utf8_decode('Marca'),1,0,'C',1);


      $pdf->SetX(165);
     $pdf->Cell(35,6,utf8_decode('Color'),1,0,'C',1);


 $pdf->ln ();



 $pdf->SetFont('Arial','',12);
  $pdf->SetX(10);
     $pdf->Cell(40,6,utf8_decode($row['id_equipo']),1,0,'C');

     $pdf->SetX(50);
     $pdf->Cell(35,6,utf8_decode ($row['placa']),1,0,'C');

      $pdf->SetX(85);
     $pdf->Cell(40,6,utf8_decode ($row['modelo']),1,0,'C');

      $pdf->SetX(125);
     $pdf->Cell(40,6,utf8_decode ($row['marca']),1,0,'C');


        $pdf->SetX(165);
     $pdf->Cell(35,6,'Color',1,1,'C');



//segunda seccion de tabla
$pdf->SetFont('Arial','B',11);
   $pdf->SetFillColor(232,232,232,232);
     $pdf->SetX(10);
     $pdf->Cell(40,6,utf8_decode('F de adquisicion'),1,0,'C',1);

     $pdf->SetX(50);
     $pdf->Cell(35,6,utf8_decode('Propietario'),1,0,'C',1);

      $pdf->SetX(85);
     $pdf->Cell(40,6,utf8_decode('F retiro de activos   '),1,0,'C',1);

      $pdf->SetX(125);
     $pdf->Cell(40,6,utf8_decode('Nº de polizas'),1,0,'C',1);


      $pdf->SetX(165);
     $pdf->Cell(35,6,'F de vencimiento',1,0,'C',1);


 $pdf->ln ();



 $pdf->SetFont('Arial','',12);
  $pdf->SetX(10);
     $pdf->Cell(40,6,utf8_decode($row['f_adquisicion']),1,0,'C');

     $pdf->SetX(50);
     $pdf->Cell(35,6,utf8_decode ($row['propietario']),1,0,'C');

      $pdf->SetX(85);
     $pdf->Cell(40,6,utf8_decode ($row['f_retirodeactivos']),1,0,'C');

      $pdf->SetX(125);
     $pdf->Cell(40,6,utf8_decode ($row['numero_de_poliza']),1,0,'C');


        $pdf->SetX(165);
     $pdf->Cell(35,6,utf8_decode ($row['fecha_vencimiento']),1,1,'C');

//tercera seccion de tabla
$pdf->SetFont('Arial','B',11);
   $pdf->SetFillColor(232,232,232,232);
     $pdf->SetX(10);
     $pdf->Cell(40,6,utf8_decode('Año'),1,0,'C',1);

     $pdf->SetX(50);
     $pdf->Cell(35,6,utf8_decode('Nº factura'),1,0,'C',1);

      $pdf->SetX(85);
     $pdf->Cell(40,6,utf8_decode('Procedencia  '),1,0,'C',1);

      $pdf->SetX(125);
     $pdf->Cell(75,6,utf8_decode('Observacion'),1,0,'C',1);


      


 $pdf->ln ();



 $pdf->SetFont('Arial','',12);
  $pdf->SetX(10);
     $pdf->Cell(40,6,utf8_decode($row['ano']),1,0,'C');

     $pdf->SetX(50);
     $pdf->Cell(35,6,utf8_decode ($row['numerofactura']),1,0,'C');

      $pdf->SetX(85);
     $pdf->Cell(40,6,utf8_decode ($row['procedencia']),1,0,'C');

      $pdf->SetX(125);
     $pdf->Cell(75,6,utf8_decode ($row['observacion']),1,0,'C');


     


//SEGUNDA TABLA PLAN DE MANTENIMIENTO


   $pdf->ln (2);
 
   


    $query = "SELECT * FROM t003_plan_mantenimiento WHERE id_equipo  LIKE '".$busqueda."' ";
    $resultadoplan=$enlace->query($query);
while($row2 = $resultadoplan->fetch_assoc())
    {







 $pdf->ln (); $pdf->ln ();
         $pdf->SetFont('Arial','B',11);
     $pdf->SetFillColor(232,232,232,232);

 $pdf->Cell(75,6,utf8_decode('Plan de mantenimiento'),1,0,'C');
  $pdf->ln ();

$pdf->SetFont('Arial','B',11);
   $pdf->SetFillColor(232,232,232,232);
     $pdf->SetX(10);
     $pdf->Cell(40,6,utf8_decode('Vehiculo/Maquinaria'),1,0,'C',1);

     $pdf->SetX(50);
     $pdf->Cell(35,6,utf8_decode('C oil caja/trans'),1,0,'C',1);

      $pdf->SetX(85);
     $pdf->Cell(40,6,utf8_decode('Cambio aceite motor'),1,0,'C',1);

      $pdf->SetX(125);
     $pdf->Cell(40,6,utf8_decode('R aceite motor/caja'),1,0,'C',1);


      $pdf->SetX(165);
     $pdf->Cell(35,6,utf8_decode('Combustible'),1,0,'C',1);


 $pdf->ln ();



 $pdf->SetFont('Arial','',12);
  $pdf->SetX(10);
     $pdf->Cell(40,6,utf8_decode($row2['vehiculo']),1,0,'C');

     $pdf->SetX(50);
     $pdf->Cell(35,6,utf8_decode ($row2['cambio_transmision_caja']),1,0,'C');

      $pdf->SetX(85);
     $pdf->Cell(40,6,utf8_decode ($row2['cambio_aceite_motor']),1,0,'C');

      $pdf->SetX(125);
     $pdf->Cell(40,6,utf8_decode ($row2['revision_aceite_motor_caja']),1,0,'C');


        $pdf->SetX(165);
     $pdf->Cell(35,6,'combustible',1,1,'C');



//segunda seccion de tabla
$pdf->SetFont('Arial','B',11);
   $pdf->SetFillColor(232,232,232,232);
     $pdf->SetX(10);
     $pdf->Cell(40,6,utf8_decode('Engrase'),1,0,'C',1);

     $pdf->SetX(50);
     $pdf->Cell(35,6,utf8_decode('C filtros de aire'),1,0,'C',1);

      $pdf->SetX(85);
     $pdf->Cell(40,6,utf8_decode('  R presion aire  '),1,0,'C',1);

      $pdf->SetX(125);
     $pdf->Cell(40,6,utf8_decode(''),1,0,'C',1);


      $pdf->SetX(165);
     $pdf->Cell(35,6,'',1,0,'C',1);


 $pdf->ln ();



 $pdf->SetFont('Arial','',12);
  $pdf->SetX(10);
     $pdf->Cell(40,6,utf8_decode($row2['engrase']),1,0,'C');

     $pdf->SetX(50);
     $pdf->Cell(35,6,utf8_decode ($row2['cambio_filtros']),1,0,'C');

      $pdf->SetX(85);
     $pdf->Cell(40,6,utf8_decode ($row2['revision_presion_aire']),1,0,'C');

      $pdf->SetX(125);
     $pdf->Cell(40,6,'',1,0,'C');


        $pdf->SetX(165);
     $pdf->Cell(35,6,'',1,1,'C');


 $pdf->ln (); $pdf->ln (); $pdf->ln ();



}
    }



 $pdf->ln (60); 

  
 

     $pdf->SetFont('Arial','',9);
     $pdf->SetFillColor(232,232,232,232);
 $pdf->SetX(40);
 $pdf->Cell(45,6,utf8_decode('Sistema de supervision y mantenimiento preventivo de equipos petroleros  (SISMPEP) '),0,0,'E');


$pdf-> output ();
?>

