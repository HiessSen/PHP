<?php
    function afficherLesNombres($max){
        for($i=0 ; $i<=$max ; $i++){
            echo $i;
            var_dump ($i);
        }
        // echo($nombreMax);
        // var_dump($nombreMax);
    }
    afficherLesNombres($_GET['nombre']);
?>