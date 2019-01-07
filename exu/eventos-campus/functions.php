<?php

switch($campus){
    case "Ciudad de México":
        $redirect = "cDmX";
    break;
    case "Tlalnepantla":
        $redirect = "t14n3";
    break;  
     case "Toluca":
        $redirect = "t01uK";
    break;  
     case "Chiapas":
        $redirect = "ch14pZ";
    break;  
     case "Querétaro":
        $redirect = "Qt4r0";
    break;  
     case "León":
        $redirect = "L30n";
    break;  
     case "San Luis Potosí":
        $redirect = "zLp";
    break;  
     case "Pachuca":
        $redirect = "p4cHuK";
    break;  
     case "Mérida":
        $redirect = "m3r1dA";
    break; 
    case "Guadalajara":
        $redirect = "gDdLg";
    break; 
    case "Aguascalientes":
        $redirect = "4guAs";
    break; 
}

switch ($row[8]) {
                                case "Catapulta":
                                    $categoria = "catapulta";
                                break;
                                case "Deporte":
                                    $categoria = "deporte";
                                break;
                                case "Cultura":
                                    $categoria = "cultura";
                                break;
                                case "Taller":
                                    $categoria = "taller-exu";
                                break;
                                case "Responsabilidad Social":
                                    $categoria = "r-social";
                                break;
                                case "Vinculación":
                                    $categoria = "vinculacion";
                                break;
                                case "":
                                    $categoria = "";
                                break;
                                
                            }

?>