<?php
// précisez vos NOM et Prénoms dans la variable $nomPrenomEleve ci-dessous, à la place des "...".
$nomPrenomEleve='BOURON_Melvil';

// Vous pouvez télécharger la base de données à l'adresse suivante : formation.maxys.fr/cours/sql/ressources/eval.rar
// La notation prendra en compte le respect des consignes, la propreté du code (mots clés SQL en majuscule) et la pertinence des requêtes

// Pour chaque exercice, faites la requête sur PHPMyAdmin, et lorsque le résultat vous convient, copiez-collez la requête dans la variable correspondante.
// EXEMPLE
// EXERCICE 0
// écrire la requête qui liste tous les produits

$reponse['exo0'] = 'SELECT tblproduit.itmTitre FROM `tblproduit`' ; /* Affiche le titre du produit */

// ------------------------------------------------------------------------------------------------------------------------------------------------------------------
// EXERCICE 1
// écrire la requête pour ajouter un client nommé John Doe

$reponse['exo1'] = "INSERT INTO `tblclient` (`clientId`, `clientDate`, `clientNom`, `clientPrenom`, `clientCatNum`, `clientAdresse`, `clientAdresse2`, `clientCP`, `clientVille`, `clientPays`, `clientMail`, `clientTel`, `clientOnline`) VALUES (NULL, '2023-11-08', 'John', 'Doe', '0', 'MNS', 'MNS_IFA', '57000', 'METZ', 'FRANCE', 'mns@gmail.com', '0333333333', '1');";

// ------------------------------------------------------------------------------------------------------------------------------------------------------------------
// EXERCICE 2
// écrire la requête pour afficher l'identifiant de l'enregistrement précédement créé

/* La table avait une taille de 69 - On pourrait aussi faire un order by desc et prendre le premier, mais je ne sais plus */
$reponse['exo2'] = 'SELECT * FROM `tblclient` WHERE tblclient.clientId = 70;'; 

// ------------------------------------------------------------------------------------------------------------------------------------------------------------------
// EXERCICE 3
// écrire la requête pour modifier le prénom de ce client en remplaçant John par Jane

$reponse['exo3'] = "UPDATE `tblclient` SET `clientNom` = 'Jane' WHERE `tblclient`.`clientId` = 70;";

// ------------------------------------------------------------------------------------------------------------------------------------------------------------------
// EXERCICE 4
// écrire la requête pour supprimer ce client (Jane Doe)

$reponse['exo4'] = 'DELETE FROM tblclient WHERE `tblclient`.`clientId` = 70';

// ------------------------------------------------------------------------------------------------------------------------------------------------------------------
// EXERCICE 5
// écrire la requête pour lister tous les clients par ordre alphabétique des noms et prénoms

/* Pour les noms: */
$reponse['exo5'] = 'SELECT * FROM `tblclient` ORDER BY `tblclient`.`clientNom` ASC;';
/* Pour les prenoms: */
$reponse['exo5'] = 'SELECT * FROM `tblclient` ORDER BY `tblclient`.`clientNom` ASC;';

// ------------------------------------------------------------------------------------------------------------------------------------------------------------------
// EXERCICE 6
// écrire la requête pour lister tous les produits (sérise et titres) et leur catégorie associée, classés par ordre alphabétique des séries et titres

$reponse['exo6'] = 'SELECT tblproduit.itmSerie, tblproduit.itmTitre, tblproduitcat.itmCatTitre FROM tblproduit, tblproduitcat ORDER BY tblproduit.itmSerie ASC;';

// ------------------------------------------------------------------------------------------------------------------------------------------------------------------
// EXERCICE 7
// écrire la requête pour lister tous les produits (et leurs catégories respectives) ayant Jodorowsky pour scénariste, classés par ordre alphabétique des séries et titres

$reponse['exo7'] = "SELECT tblproduit.itmId, tblproduit.itmTitre, tblproduit.itmSerie, tblproduit.itmTome, tblproduit.itmImg, tblproduit.itmEditeur, tblproduit.itmCollection, tblproduit.itmScenariste, tblproduit.itmPrix, tblproduit.itmDate, tblproduit.itmOnline, tblproduit.itmCatNum, tblproduitcat.itmCatTitre FROM tblproduit, tblproduitcat WHERE itmScenariste = 'Jodorowsky, Alexandro' ORDER BY tblproduit.itmSerie ASC;";

// ------------------------------------------------------------------------------------------------------------------------------------------------------------------
// EXERCICE 8
// écrire la requête pour lister tous les produits (et leurs catégories respectives) ayant Jodorowsky pour scénariste, dont le prix est inférieur à 10€, classés par ordre alphabétique des séries et titres

$reponse['exo8'] = "SELECT tblproduit.itmId, tblproduit.itmTitre, tblproduit.itmSerie, tblproduit.itmTome, tblproduit.itmImg, tblproduit.itmEditeur, tblproduit.itmCollection, tblproduit.itmScenariste, tblproduit.itmPrix, tblproduit.itmDate, tblproduit.itmOnline, tblproduit.itmCatNum, tblproduitcat.itmCatTitre FROM tblproduit, tblproduitcat WHERE tblproduit.itmScenariste = 'Jodorowsky, Alexandro' AND tblproduit.itmPrix < 10 ORDER BY tblproduit.itmSerie ASC;";

// ------------------------------------------------------------------------------------------------------------------------------------------------------------------
// EXERCICE 9
// écrire la requête pour lister tous les produits achetés par Jon Farriss, par ordre de date d'achat chronologique

/*
SELECT tblproduit.itmId, tblproduit.itmTitre, tblproduit.itmSerie, tblproduit.itmTome, tblproduit.itmImg, tblproduit.itmEditeur, tblproduit.itmCollection, tblproduit.itmScenariste, tblproduit.itmPrix, tblproduit.itmDate, tblproduit.itmOnline, tblproduit.itmCatNum
FROM tblproduit

WHERE tblproduitxclient.itmXClientNum = 47 ORDER BY tblproduit.itmDate ASC;

J'y étais presque :(
*/
$reponse['exo9'] = '';

// ------------------------------------------------------------------------------------------------------------------------------------------------------------------
// EXERCICE 10
// écrire la requête pour lister tous les produits achetés par la famille Farriss, par ordre de date d'achat chronologique

$reponse['exo10'] = '';

// ------------------------------------------------------------------------------------------------------------------------------------------------------------------
// EXERCICE 11
// écrire la requête pour lister le nombre de produits achetés par chacun des membres de la famille Farriss

$reponse['exo11'] = '';

// ------------------------------------------------------------------------------------------------------------------------------------------------------------------
// EXERCICE 12
// écrire la requête pour lister le total dépensé par chacun des membres de la famille Farriss

$reponse['exo12'] = '';

// ------------------------------------------------------------------------------------------------------------------------------------------------------------------
// EXERCICE 13
// écrire la requête pour lister le total dépensé par chaque client, classé du plus gros client au plus petit

$reponse['exo13'] = '';

// ------------------------------------------------------------------------------------------------------------------------------------------------------------------
// EXERCICE 14
// écrire la requête pour lister les noms, prénoms et mails des clients ayant acheté moins de 10 produits.

$reponse['exo14'] = '';

// ------------------------------------------------------------------------------------------------------------------------------------------------------------------
// EXERCICE 15
// écrire la requête pour lister le nombre de ventes par catégorie de produits

$reponse['exo15'] = '';

// ------------------------------------------------------------------------------------------------------------------------------------------------------------------
// EXERCICE 16
// écrire la requête pour afficher le produit le plus vendu (série, titre et nombre de ventes)

$reponse['exo16'] = '';
?>