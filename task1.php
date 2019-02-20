<?php
    class CommandLineCalculator
    {
    	public function sum($number1, $number2) {
            if(strpos($number1, ","))
            { 
                $numbersArray = explode(" ",preg_replace("/[^0-9]/", " ", $number1));
                foreach($numbersArray as $numbers)
                {
                    $result += $numbers;                           
		}
            }else
            {
                $result = $number1 + $number2;
            }
            echo "OUTPUT: ".$result."\n";
    	}
        
        public function validateMethod($method)
        {
            if ($method != "sum") {
                throw new exception("Please enter valid method.");
            }
         return true;    
        }    
    }

    try {  
        $operation = stripslashes($argv[1]) ? stripslashes($argv[1]) : '';
        $number1 = stripslashes($argv[2]) ? stripslashes($argv[2]) : '0';
        $number2 = stripslashes($argv[3]) ? stripslashes($argv[3]) : '0';
    
        $calculatorObj = new CommandLineCalculator;
    	$calculatorObj->validateMethod($operation);
        $calculatorObj->sum($number1, $number2);	
    }
    catch (Exception $e){
    	echo "ERROR: ".$e->getMessage();
    } 
?>