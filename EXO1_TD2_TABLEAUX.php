<?php
  
  $tab = array(
    "Diop" => array(
      "prenom" => "maimouna",
      "ville" => "parcelles",
      "age" => 21,
    ),
    "Diop" => array(
        "prenom" => "yacine",
        "ville" => "milan",
        "age" => 30,
      ),
      "Sow" => array(
        "prenom" => "oumou",
        "ville" => "fass",
        "age" => 65,
      )
  );
  foreach($tab as $key => $value){
    echo $key. " :\n";
    if(is_array($value)){
        foreach($value as $key => $value){
             echo $key." : ".$value."\n";
        }
    }
    echo "\n";
  }
?>