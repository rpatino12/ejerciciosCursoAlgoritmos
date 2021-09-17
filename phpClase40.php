<?php
function placesRecommendation($condition = '', $question = ''){
    $weather = array("Bogota"=>"Cold", "Monteria"=>"Hot", "Medellin"=>"Mild");
    $ubication = array("Guajira"=>"North", "Leticia"=>"South", "Santander"=>"Oriente",
    "Antioquia"=>"West");
    $tourism = array("Santa Marta"=>"Sea", "Villavicencio"=>"Plains", "Rioacha"=>"Desert",
    "Quindio"=>"Valley");

    switch($condition){
        case "weather":
            echo array_search($question, $weather);
        break;
        case "ubication":
            echo array_search($question, $ubication);
        break;
        case "tourism":
            echo array_search($question, $tourism);
        break;
        default:
            echo "Welcome to Colombia!";
    }
}
placesRecommendation("weather", "Cold");