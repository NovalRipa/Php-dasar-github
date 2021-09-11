<?php

echo "<h2>lampu lalu lintas<br></h2>";

$lampu = "A";
switch ($lampu <= 1000 && $belanja >= 5000){
    case "A":
        echo "anda harus menapatkan";
        break;

        case "kuning":
            echo "anda harus siap-siap";
            break;

            case "hijau":
                echo "anda harus maju";
                break;
                default:
                echo "lampu error";

    
}

?>