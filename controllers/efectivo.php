<?php
if(isset($_POST['cantidad'])){$cantidad = $_POST["cantidad"];}else{$cantidad ='';}

$restante = 0;

   if (!is_numeric($cantidad)){
     echo "Favor de poner una cantidad numérica";
 }else if($cantidad == 0 ){
     echo "Favor de ingresar la cantidad que quieres retirar";
 }else if ($cantidad < 0){
     echo "Favor de ingresar una cantidad positiva ";
 }else if (!fmod($cantidad, 10) == 0 ){
     echo "Solo tenemos billetes en múltiplos de 10, introduce otra cantidad";
 }else{
     
   $cantidad = round($cantidad); 
   
 $longitudCantidad = strlen($cantidad);
 if($longitudCantidad>2){
 $cien = substr($cantidad, 0, -2);
 
 }else{
  $cien = 0;   
 }
 
 $cincuenta = substr($cantidad, $longitudCantidad-2, $longitudCantidad);
 
 if($cincuenta>=50){
   $restante =  $cincuenta-50;
   $cincuenta =1;
 }else{
   $restante = $cincuenta;
   $cincuenta=0;
 }
 
 if($restante>=40){
   $veinte = 2;
   $restante = $restante-40;
 }else if($restante>=20){
   $veinte = 1;
   $restante =  $restante-20;
 }else{
     $veinte = 0;

 }
 
  if($restante>=10){
   $dies = 1;

 }else{
     $dies = 0;

 }

             
             $billetes = array();
     
             $billetes[] = array('cien' => $cien,'cincuenta' => $cincuenta,'veinte' => $veinte,'dies' => $dies);
             
             echo json_encode($billetes);
          
 }
 


