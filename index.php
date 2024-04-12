<!--
    
Creare un form PHP che permetta di inviare due campi:
un paragrafo
ed una parola da censurare.
Gestire il tutto con due file diversi. Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
stampare a schermo il paragrafo e la sua lunghezza
stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare 




ESEMPIO DI TESTO GENERATO DALL'IA, PAROLA DA CENSURARE "VITA":

In un mondo in cui la vita è un mistero avvincente, ci troviamo immersi in un flusso costante di esperienze. La vita, con le sue sfide e le sue gioie, è il fulcro intorno al quale ruota tutto ciò che facciamo. Ogni giorno ci troviamo a navigare le acque tumultuose della vita, cercando significato e scopo nel labirinto delle nostre esistenze. In questo viaggio della vita, incontriamo persone che lasciano un'impronta indelebile nel nostro cammino, arricchendo la trama della nostra storia personale. Anche nei momenti più bui, la vita ci offre la possibilità di crescere e di trasformare le nostre difficoltà in opportunità. Così, con gratitudine e coraggio, continuiamo il nostro viaggio attraverso le terre inesplorate della vita, consapevoli che ogni passo ci avvicina sempre di più alla nostra verità più autentica.


-->

<?php 

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


    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 200px
        }
    </style>

</body>
</html>