<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>exercice7Partie5</title>
    </head>
    <body>
        <?php
        $months = array('janvier', 'février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre');
         
// Puis on fait une boucle pour tout afficher :
for ($numero = 0; $numero < 12; $numero++)
{
    echo $months[$numero] . '<br />'; // affichera $months[0], $months[1] etc.
}
        ?>
        
        