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

   //echo verticalName("Wellen");  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Exercise 04</title>
</head>
<body>
    <div class="ms-1">
    <h3> Faça seu nome na Vertical</h3>
    <form method="post">
        <input type="text" name="name">
        <input type="submit" value="Submit Name">
    </form>
    </div>
    <br/>
    <p class="d-flex justify-content-center"><?php echo verticalName($_POST['name']); ?></p>  
    </body>
</html>