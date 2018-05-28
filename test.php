<meta charset="utf-8">
<?php 
	$dat = getdate();
$mois = $dat['month'];
$mjour = $dat['mday'];
$annee = $dat['year'];
$h = $dat['hours'];
$m = $dat['minutes'];
$s = $dat['seconds'];
echo "Message posté le $mjour/$mois/$annee "." à $h H $m Min $s s ";
 ?>