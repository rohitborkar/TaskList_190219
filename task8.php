<?php
class CommandLineCalculator {
    public function multiply($argv)
    {
        $result = array();
        
        unset($argv[0]);
        unset($argv[1]);
       
        foreach($argv as $number) {
            if(is_numeric($number)) {
                
                if($number < 0) {
                        throw new exception("Negative numbers not allowed.");
                }else {
                        $result[]= $number;
                }
            }
            else {
                    if(strpos($number, "-")) {
                        throw new exception("Negative numbers not allowed.");
                    } else {
                        $numbersArray = explode(" ",preg_replace("/[^0-9]/", " ", $number));
                        
                        foreach($numbersArray as $numbers) {
                            $result[]= $numbers;
                        }
                    }
            }
        }

        $result =  array_product($result);
        echo "OUTPUT: ".$result."\n";
    }
    public function validateMethod($method)
    {
        if ($method != "multiply") {
            throw new exception("Please enter valid method.");
        }
     return true;    
    } 
}

try{
    $calculatorObj = new CommandLineCalculator;
    
    $operation = stripslashes($argv[1]);
    $calculatorObj->validateMethod($operation); 
    $calculatorObj->multiply($argv);
}
catch (Exception $e) {
    echo "ERROR: ".$e->getMessage();
}
?>