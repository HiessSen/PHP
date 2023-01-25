<?php
$numerateur = 50;
$denominateur = 3;
$resultat = floor($numerateur / $denominateur);
$reste = $numerateur % $denominateur;
echo "le resultat de la division entiere de ".$numerateur." par ".$denominateur." est de ".$resultat." et le reste est de ".$reste;
?>
<p>Ou</p>
<?php 
$x = 50;
$division = $x/3;
$reste = $x%3;
echo 'Le resultat de la division de 50 par 3 est '. $division .' et le reste est de '.$reste;
?>