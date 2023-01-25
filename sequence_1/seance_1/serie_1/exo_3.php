<?php
    function afficherLesNombres($max){
        for($i=$max ; $i>=0 ; $i--){
            echo $i;
            var_dump ($i);
        }
        // echo($nombreMax);
        // var_dump($nombreMax);
    }
    afficherLesNombres($_GET['nombre']);
?>