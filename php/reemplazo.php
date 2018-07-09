<?php

  $Bici=array
  (
    "Marco"=>"Marco gt 4 piezas en color blanco",
    "Tenedor"=>"el tenedor es marca inssa y viene cromado",
    "Bielas"=>"Las bielas son marca haro y son de seguridad",
    "Aros"=>"LOs aros son marca millenium ademas son triple pared"
  );


  $Template=file_get_contents("../Vistas/bici.html");

  foreach($Bici as $Pieza=>$Des) 
  {
        $Template=str_replace("{".$Pieza."}",$Des,$Template);
  }

  print $Template;  

?>