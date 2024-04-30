<?php
function calculadora($operacao, $num1 = 0, $num2 = 0){
    
    try{

    
    switch($operacao){

        case "+":
         $resultado = $num1 + $num2;
        break;

        case "-":
         $resultado = $num1 - $num2;
         break;

        case "*":
         $resultado = $num1 * $num2;
         break;

        case "/":
         $resultado = $num1 / $num2;
         break;

        default:
            throw new ErrorException("Ocorreu um erro!");
        }
        

        echo "<h1>O resultado da sua conta é: $resultado</h1>";
    
    }catch(Exception $erro){
       /* print("Ocorreu um erro ao executar o switch/case<br>" .$erro->getMessage() . "<br>" );*/

       print $erro->getMessage();
 }

}

function nome(){
    return "Gusthavo";
}

calculadora("bla bla bla", "10", 5);
print(nome());




?>