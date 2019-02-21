<?php
require_once "Validate.php";

class CommandLineCalculator
{
    public function add($argv)
    {
        $result = 0;
        unset($argv[0]);
        unset($argv[1]);
        foreach($argv as $number) {
            $numbersArray = explode(" ",preg_replace("/[^0-9]/", " ", $number));
            foreach($numbersArray as $numbers) {
                if($numbers >= 1000){
                                $numbers = 0;
                }	
                $result += $numbers;
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
