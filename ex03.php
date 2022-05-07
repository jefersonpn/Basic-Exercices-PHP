<?php

echo '$var = \'PHP Tutorial\'. Put this'."<br/>"; 
echo "variable into the title section, h3 tag and as an anchor text within an HTML document. <br/><br/>";

echo "<b>Solution:</b><br/><br/>";

$var = 'PHP Tutorial'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $var; ?></title>
</head>
<body>
    <h3>H3 Tag</h3>
    <p><a href="https://www.google.com.br">Anchor text</a></p>
</body>
</html>