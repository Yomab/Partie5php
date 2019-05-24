<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>exercice10Partie5</title>
    </head>
    <body>
        <?php
         $departements = array( 
        $departements = 02 => 'Aisne', 
        $departements = 59 => 'Nord', 
        $departements = 60 => 'Oise',
        $departements = 62 => 'Pas de Calais', 
        $departements = 80 => 'Somme',
        );
         foreach($departements as $cle => $element)
        {
    echo '[' . $cle . '] vaut ' . $element . '<br />';
}
?>
    </body>   
</html>