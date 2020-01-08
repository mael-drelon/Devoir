<?php require("Livre.php");
?>

<html>
<head>  
        <meta charset="utf-8"/>
</head>
<body>
    
    <?php

    $livre=new livre(1);
    $livre->Afficherlivre();
    
    $livre1=new livre(2);
    $livre1->Afficherlivre();



    // ainsi de suite... 


?>
</body>
</html>