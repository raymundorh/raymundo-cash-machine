<?php

/* 
    Created on : 5/02/2014, 10:05:45 PM
    Author     : Work Ray
*/

class Constant
{
  const TITULO = 'CAJERO AUTOM&Aacute;TICO'; 
  const PRESIONA = 'RETIRAR &nbsp; ';
  const CANTIDAD = 'CANTIDAD';

  public static function getTitulo()
  {
    return self::TITULO;
  }
  
    public static function getPresiona()
  {
    return self::PRESIONA;
  }
  
    public static function getCantidad()
  {
    return self::CANTIDAD;
  }

}

