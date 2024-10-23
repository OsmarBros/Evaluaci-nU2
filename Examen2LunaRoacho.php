<?php
/*CBTIS89
Examen2LunaRoacho
Programa que almacena los precios de 5 articulos y en un ciclo calcula el IVA y lo guarda en otro arreglo, y despues calcula el descuento de 10% a otro arreglo y loc coloca en otro array y los ordena y los guarda en un ultimo arreglo (IVA=16%).
Luna Roacho Osmar Farid
Programacion 3A TM*/


$arrayPre=array(500,400,200,700,100);
$arraySub=array();
$arrayIVA=array();
$arrayDes=array();
$arrayTot=array();

$l=count($arrayPre);

for($i=0;$i<$l;$i++)
{$arrayIVA[$i]=$arrayPre[$i]*0.16;
$arraySubtotal[$i]=$arrayPre[$i]+$arrayIVA[$i];
$arrayDes[$i]=$arraySubtotal[$i]*0.10;
$arrayTot[$i]=$arraySubtotal[$i]-$arrayDes[$i];}
$l2=count($arrayPre);
echo " <br>";
      echo "<br>Precios<br>";
   $l2=count($arrayPre);
echo " <br>";
   for($i=0; $i<$l2; $i++)
   {
   echo $arrayPre[$i];
   echo "<br>";
   }
   echo "<br>IVA<br>";
   for($i=0; $i<$l2; $i++)
   {
   echo $arrayIVA[$i];
   echo "<br>";
   }
   echo "<br>Subtotal<br>";
   $l2=count($arrayPre);
echo " <br>";
   for($i=0; $i<$l2; $i++)
   {
   echo $arraySubtotal[$i];
   echo "<br>";
   }
      echo "<br>Descuentos<br>";
   $l2=count($arrayPre);
echo " <br>";
   for($i=0; $i<$l2; $i++)
   {
   echo $arrayDes[$i];
   echo "<br>";
   }
         echo "<br>Total<br>";
   $l2=count($arrayPre);
echo " <br>";
   for($i=0; $i<$l2; $i++)
   {
   echo $arrayTot[$i];
   echo "<br>";
   }
?>