<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 04</title>
</head>
<body>
    <h3> Create a simple HTML form and accept the user name and display the name through PHP echo statement.</h3>
    <form method="post">
        <input type="text" name="name">
        <input type="submit" value="Submit Name">
    </form>
    <h3> Hello
    <?php
    if (isset($_POST['name'])){
        $name = $_POST['name'];
        echo "$name </h3>";
    }
         
    
   
    
    ?>

</body>
</html>