<?php
//Paramétres du compteur;

$pseudo = 'Sébastien';
$jour = '17';
$mois = '11';
$annee = '2009';
$nbcig = '20';
$prix = '5.60';


//Différence de jours:
$timestamp = mktime(date("0,0,0,m,d,Y"));
$timestamp2 = mktime(0,0,0,$mois,$jour,$annee);

$diff = floor(($timestamp - $timestamp2) / (3600 * 24));

//Calcul du nombre de cigarrettes:
$totalcig = $diff * $nbcig;

//Calcul du prix:
$totalprix = $diff * $prix;

//Calcul de l'espérence de vie:
$totalvie = round(($totalcig * 11) / (60*24), 0);


echo'
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<title>Compteur pour ex-fumeur</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
.txtgras {
font-family: Arial, Helvetica, sans-serif;
font-size: 13px;
font-style: normal;
line-height: normal;
font-weight: bold;
font-variant: normal;
color: #000000;
text-decoration: none
}
.cadre{
border: 2px solid black;
width:120px;
}
</style>
</head>

<center>
<div class="cadre">
<table width="120" border="0" cellpadding="2" cellspacing="0" bordercolor="#000000" background="/images/Fond_Cookies.jpg">
<tr>
<td valign="top" align="center"><img src="/images/Icone_Perso.jpg" width="14" height="17" border="0"></td>
<td valign="top" align="left"><span class="txtgras">'.$pseudo.'</span></td>
</tr>
<tr>
<td valign="top" align="center"><img src="/images/Icone_Date.jpg" width="14" height="16" alt="Arrêt le:" title="Arrêt le:"></td>
<td valign="top" align="left"> <span class="txtgras">'.$jour.'/'.$mois.'/'.$annee.'</span></tdtd>
</tr>
<tr>
<td valign="top" align="center"><img src="/images/Icone_Stop.jpg" width="15" height="15" alt="Nombre de jours d\'arrêts" title="Nombre de jours d\'arrêts"></td>
<td valign="top" align="left"><span class="txtgras">'.$diff.'</span> jours</td>
</tr>
<tr>
<td valign="top" align="center"><img src="/images/cigarettes4.gif" width="18" height="17" alt="Nombre de cigarettes non fumées" title="Nombre de cigarettes non fumées"></td>
<td valign="top" align="left"><span class="txtgras">'.$totalcig.'</span> clopes</td>
</tr>
<tr>
<td valign="top" align="center"><img src="/images/Icone_Money.jpg" width="18" height="17" alt="Economies" title="Economies"></td>
<td valign="top" align="left"><span class="txtgras">'.$totalprix.' </span>€uros</td>
</tr>
<tr>
<td valign="middle" align="center"><img src="/images/Icone_Vie.jpg" width="18" height="17" alt="Espérance de vie gagnée" title="Espérance de vie gagnée"></td>
<td valign="top" align="left"><span class="txtgras">'.$totalvie.'</span> Jours</td>
</tr>
</table>
</div>

</center>';

?>