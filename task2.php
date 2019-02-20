<?php
require_once "Validate.php";

class CommandLineCalculator
{
    public function add($argv)
    {
        $result = 0;
        unset($argv[0]);
        unset($argv[1]);
        $number1= $argv[2];
        if(strpos($number1, ",")) {
            $numbersArray = explode(" ",preg_replace("/[^0-9]/", " ", $number1));
            foreach($numbersArray as $numbers) {
                $result += $numbers;                           
            }
        } else {
            foreach($argv as $number) {
                $result += $number; 
            }
        }
            echo "\nOUTPUT: ".$result."\n";
    }
}
try {
    $calculatorObj = new CommandLineCalculator;
    $operation = stripslashes($argv[1]);

    $validateObj = new Validate;
    $validateObj->validateMethod($operation);

    $calculatorObj->add($argv);
}
catch (Exception $e) {
    echo "ERROR: ".$e->getMessage();
}
?>