<?php 
	$inDebug = true;
	/*
	 * Définir que la BDD est en local
	 * Donner le nom eval qui est la même que dans PHP My Admin
	 * Spécifie le charset dans sa globalité (pas besoin de spécifier bin)
	 * Nom d"utilisateur PHP My Admin
	 * Mot de passe PHP My Admin
	 */
	$dbhost = "localhost";
	$dbname = "eval";
	$username = "root";
	$userpass = "";
	try
	{
		$db = new PDO("mysql:host=".$dbhost.";dbname=".$dbname.";charset=utf8", $username, $userpass);
	}
	catch (Exception $e)
	{
		if ($inDebug)
			die("Erreur: ".$e->getMessage());
		else
			die("Erreur: veuillez réessayer plus tard!");
	}

	// Execute la requête SQL en se protégeant d'injections SQL
	$requestSQL = "SELECT * FROM tblclient ORDER BY clientPrenom ASC;";
	$statement = $db->prepare($requestSQL);
	$statement->execute();
	$recordset = $statement->fetchAll();

	foreach($recordset as $row)
		echo $row["clientPrenom"]." ".$row["clientNom"]."<br/>";
?>