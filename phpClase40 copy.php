<?php
function placesRecommendation($condition = '', $question = ''){
    $weather = array("Bogota"=>"Cold", "Monteria"=>"Hot", "Medellin"=>"Mild");
    $ubication = array("Guajira"=>"North", "Leticia"=>"South", "Santander"=>"Oriente",
    "Antioquia"=>"West");
    $tourism = array("Santa Marta"=>"Sea", "Villavicencio"=>"Plains", "Rioacha"=>"Desert",
    "Quindio"=>"Valley");

    switch($condition){
        case "weather":
            $search = $weather
        break;
        case "ubication":
            $search = $ubication
        break;
        case "tourism":
            $search = $tourism
        break;
        default:
            echo "Welcome to Colombia!";
    }
    echo "The perfect place for you is ".array_search($question, $search);
}
placesRecommendation("weather", "Cold");