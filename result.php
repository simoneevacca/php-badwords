<?php
var_dump($_GET);
$text= $_GET["text"];
$textCensored= str_replace("casa", "***", $text);
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p><?= $text ?></p>
    <h2>Il paragrafo è lungo <?= strlen($text)?> caratteri.</h2>


    <p><?=$textCensored?></p>
    <h2>Il paragrafo è lungo <?= strlen($textCensored)?> caratteri.</h2>


</body>
</html>