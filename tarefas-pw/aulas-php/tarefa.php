<?php
 $adicionall = $_GET['adicional'];

 switch($adicionall){
     case 'criança':
        $valor = 100 + 80;
        echo "O valor final é: $valor $";
        break;
        case 'adolescente':
            $valor = 100 + 50;
            echo "o valor final é: $valor $";
            break;
            case 'adulto':
                $valor = 100 + 95;
                echo "O valor final é:  $valor $";
                break;
                case 'idoso':
                    $valor = 100 +130;
                    echo "O valor final é: $valor $";
                    break;
 }
?>