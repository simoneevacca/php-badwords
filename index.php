<!--
    
Creare un form PHP che permetta di inviare due campi:
un paragrafo
ed una parola da censurare.
Gestire il tutto con due file diversi. Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
stampare a schermo il paragrafo e la sua lunghezza
stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare 

-->

<?php 

    var_dump($_GET);

    $text= $_GET["text"];
    $word= $_GET["word"];
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="result.php" method="get">
        <textarea name="text" id="" cols="30" rows="10" placeholder="scrivi qui"></textarea>
        <input name="word" type="text" placeholder="parola da censurare">
        <button type="submit">invia</button>
    </form>


</body>
</html>