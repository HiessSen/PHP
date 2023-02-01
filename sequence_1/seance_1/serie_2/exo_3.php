<?php 
    $films = array('The Shawshank Redemption', 'The Godfather', 'The Dark Knight', 'The Lord of the Rings : The Return of the King','Pulp Fiction');
    // var_dump($films);
    echo'<h2>Films</h2>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP seqence 1 seance 1 serie 2 exo 3</title>
</head>
<body>
    <ul>
        <?php
            foreach($films as $film){
                echo '<li>' . $film . '</li>';
            }
        ?>
    </ul>
</body>
</html>
