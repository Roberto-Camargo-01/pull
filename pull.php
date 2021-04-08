<?php

$persona = [
              "nombre" = "Roberto",
              "apellido" = "Camargo",
              "edad" => 22
          ];


          foreach($persona as $valor) {
              echo "$valor <br>";
          }
?>




<?php

$persona = [
              "Marca" = "Ford",
              "Modelo" = "Focus",
              "Año" => 2017
          ];


          foreach($auto as $posicion => $valor) {
              echo "$posicion: $valor <br>";
          }
?>
