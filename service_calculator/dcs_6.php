<?php

include "calculator.php";

/* CHECK METHOD */ 

switch ($_SERVER['REQUEST_METHOD']) {
    
    case 'GET':
    
        $c = new calculator ($_GET['func'], (int)$_GET["num1"], (int)$_GET["num2"], (int)$_GET["num3"]);
        $c->calc();
        break;
        
    case 'POST':
        $c = new calculator ($_POST['func'], (int)$_POST["num1"], (int)$_POST["num2"], (int)$_POST["num3"]);
        $c->calc();
        break;

    case 'PUT':
        $input = file_get_contents ('php://input');
        parse_str($input, $parameter);
        $c = new calculator ($parameter["func"], (int)$parameter["num1"], (int)$parameter["num2"], (int)$parameter["num3"]);
        $c->calc();
        
        break;
        
    default:
        echo "Error";
}

$arr = array('retVal' => $c->res);

header('Content-Type: application/json');//set header for json response
echo json_encode($arr); //echo the converted JSON Object from the Array

?>