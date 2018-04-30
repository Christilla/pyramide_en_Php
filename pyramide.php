<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
 <head>
  <meta charset="UTF-8">
  <title></title>
 </head>
 <body>
  <h2>Pyramide PHP</h2>

  <?php

$taille=4;
for($a=0;$a<$taille;$a++)
{
for($b=0;$b<$taille -$a;$b++)
{
echo("&nbsp");
}for($c=0;$c<= 2 * $a;$c++) {
 echo ("*");
}
echo "<br>";
}

?>     



        
 </body>
</html>
