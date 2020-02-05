<?php

$films = 
        [
          ["titre" => "X-Men: Days of Future Past", "duree" => 124, "img" => 'xmen'],
          ["titre" => "Grace de Monoaco", "duree" => 96, "img" => 'grace'],
          ["titre" => "Captain America 2", "duree" => 136, "img" => 'captain-america-2'],
          ["titre" => "Les yeux jaunes des crocodiles", "duree" => 121, "img" => 'yeux-jaunes'],
          ["titre" => "Rio 2", "duree" => 88, "img" => 'rio-2'],
          ["titre" => "Spiderman", "duree" => 145, "img" => 'spiderman'],
          ["titre" => "Qu'est ce qu'on a fait au bon dieu", "duree" => 114, "img" => 'bon-dieu'],
          ["titre" => "Grand Budapest Hotel", "duree" => 128, "img" => 'budapest-hotel']
          ];

$affichageFigcaption = "";
$affichageImage = "";         

for($i = 0; $i < count($films); $i++) {

$affichageFigcaption = "<figcaption>" .$films[$i]["titre"] ."   " .$films[$i]["duree"] ." minutes </figcaption>";
$affichageImage = "<img alt=" .$films[$i]["titre"] ." src=images/" .$films[$i]["img"] .".jpg >";
echo "<figure>" .$affichageFigcaption ." </br> " ." " .$affichageImage ." </figure>";
}


