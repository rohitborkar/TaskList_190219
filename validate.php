<?php
	class Validate
	{
		public function validateMethod($method)
        {
            if ($method != "add") {
                throw new exception("Please enter valid method.");
            }
         return true;    
        }
	}
?>