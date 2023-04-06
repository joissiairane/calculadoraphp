<?php
require_once __DIR__.'/../vendor/autoload.php';

use APP\model\Calculadora;

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$op = $_POST['op'];

$calc = new Calculadora();

switch ($op) {
    case'+':
        $result = $calc->Somar($num1,$num2);
        break; 
    case'-':
        $result = $calc->Subtrair($num1,$num2);
        break; 
    case'*':
        $result = $calc->Multiplicar($num1,$num2);
       break; 
   case'/':
        $result = $calc->Dividir($num1,$num2);
        break; 
    default:
        $result = 'Operação inválida';
}

echo "Resultado: $result";