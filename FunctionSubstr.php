<?php
    
    //$string = "Jeferson";
    
    function verticalName($string)
    {
        // Get the string length
        $length = Strlen($string);
        
        // While the length of the word equal to zero do: 
        for ($length=$length; $length; $length--) 
        { 
            // Use SUBSTR function to get the caracter position one by one
            $verticalString = substr($string, -$length, 1);
            // Print each caracter
            echo $verticalString . "<br/>";
        }
    }

   echo verticalName("Wellen");  

?>