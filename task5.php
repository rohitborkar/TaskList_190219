<?php
require_once "Validate.php";

class CommandLineCalculator
{
    public function add($argv)
    {
        $result1 = "";
        $result2 = "";
        $totalNumbersAddition = 0;

        unset($argv[0]);
        unset($argv[1]);
        $number1= $argv[2];
        foreach($argv as $number) {
            if(is_numeric($number)) {
                
                if($number < 0) {
                        throw new exception("Negative numbers not allowed.");
                }else {
                        $result1 += $number;
                }
            }
            else {
                    if(strpos($number, "-")) {
                        throw new exception("Negative numbers not allowed.");
                    } else {
                        $numbersArray = explode(" ",preg_replace("/[^0-9]/", " ", $number));
                        
                        foreach($numbersArray as $numbers) {
                            $result2 += $numbers;
                        }
                    }
                }
        }
        $totalNumbersAddition = $result1 + $result2;
        echo "\nOUTPUT: ".$totalNumbersAddition."\n";
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
