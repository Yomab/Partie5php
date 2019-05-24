<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>exercice4Partie5</title>
    </head>
    <body>
        <?php
       // La fonction array permet de créer un tableau
        $months = array('janvier', 'février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre'); 

//        $months = str_replace('û','u','Aout');
        $months[7]='août';
        echo $months[7];
        ?>
    </body>
</html> 