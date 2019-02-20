<?php
    class CommandLineCalculator
    {
	public function add($argv) {
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
        public function validateMethod($method)
        {
            if ($method != "add") {
                throw new exception("Please enter valid method.");
            }
         return true;    
        } 
    }
    try {
        $calculatorObj = new CommandLineCalculator;
        $operation = stripslashes($argv[1]);
    	$calculatorObj->validateMethod($operation);
        $calculatorObj->add($argv);
    }
    catch (Exception $e){
    	echo "ERROR: ".$e->getMessage();
    }
?>