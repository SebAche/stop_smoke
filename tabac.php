<?php
//Parametres du compteur;

$dateArret = New \DateTime('2009-11-17');
$dateArret = New \DateTime('2017-06-20');
$dateNow = New \DateTime('now');
$diff = $dateArret->diff($dateNow);
$pseudo = 'Sébastien';
$nbCigFumeeParJour = '15';

$prixPaquet = '7.60';
$nbCigParPaquet = '20';
$prixCigarette = $prixPaquet / $nbCigFumeeParJour;

//Calcul du nombre de cigarrettes:
$totalcig = $diff->days * $nbCigFumeeParJour;

//Calcul du prix:
$totalprix = $diff->days * ($nbCigFumeeParJour * $prixCigarette);

//Calcul de l'espérence de vie:
$totalvie = round(($totalcig * 11) / (60 * 24), 0);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Compteur pour ex-fumeur</title>
    <meta charset="utf-8">
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

        .cadre {
            border: 2px solid black;
            width: 120px;
        }
    </style>
</head>
<body>
<div class="cadre">
    <table width="120" border="0" cellpadding="2" cellspacing="0" bordercolor="#000000"
           background="images/Fond_Cookies.jpg">
        <tr>
            <td valign="top" align="center"><img src="images/Icone_Perso.jpg" width="14" height="17" border="0">
            </td>
            <td valign="top" align="left"><span class="txtgras"><?php echo($pseudo) ?></span></td>
        </tr>
        <tr>
            <td valign="top" align="center"><img src="images/Icone_Date.jpg" width="14" height="16" alt="Arr�t le:"
                                                 title="Arrêt le:"></td>
            <td valign="top" align="left"><span class="txtgras"><?php echo($dateArret->format('d / m / Y')) ?></span></td>
        </tr>
        <tr>
            <td valign="top" align="center"><img src="images/Icone_Stop.jpg" width="15" height="15"
                                                 alt="Nombre de jours d'arrêts" title="Nombre de jours d'arrêts">
            </td>
            <td valign="top" align="left"><span class="txtgras"><?php echo($diff->days) ?></span> jours</td>
        </tr>
        <tr>
            <td valign="top" align="center"><img src="images/cigarettes4.gif" width="18" height="17"
                                                 alt="Nombre de cigarettes non fumées"
                                                 title="Nombre de cigarettes non fumées"></td>
            <td valign="top" align="left"><span class="txtgras"><?php echo($totalcig) ?></span> clopes</td>
        </tr>
        <tr>
            <td valign="top" align="center"><img src="images/Icone_Money.jpg" width="18" height="17"
                                                 alt="Economies" title="Economies"></td>
            <td valign="top" align="left"><span class="txtgras"><?php echo($totalprix) ?> </span>€uros</td>
        </tr>
        <tr>
            <td valign="middle" align="center"><img src="images/Icone_Vie.jpg" width="18" height="17"
                                                    alt="Espérance de vie gagnée" title="Espérance de vie gagnée">
            </td>
            <td valign="top" align="left"><span class="txtgras"><?php echo($totalvie) ?></span> jours</td>
        </tr>
    </table>
</div>
</body>
</html>