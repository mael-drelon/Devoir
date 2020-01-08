<?php require("Auteur.php");
?>

<html>
<head>  
        <meta charset="utf-8"/>
</head>
<body>
    
    <?php

    $auteur=new Auteur(1);
    $auteur->AfficherAuteur();
    
    $auteur1=new Auteur(2);
    $auteur1->AfficherAuteur();



    // ainsi de suite... 


?>
</body>
</html>