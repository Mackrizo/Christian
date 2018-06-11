<?php

	$link = mysqli_connect("localhost", "root","mackrizo","Moviepolis");

	if (!$link) {
		printf("Échec de la connexion. Erreur : %s\n", mysqli_connect_error());
		exit();
	}

	/* Activation de l'autocommit */
	mysqli_autocommit($link, TRUE);
	
	if ($result = mysqli_query($link, "SELECT @@autocommit")) {
		$row = mysqli_fetch_row($result);
		printf("L'autocommit vaut %s\n", $row[0]);
		mysqli_free_result($result);
	}
	
	/* Fermeture de la connexion */
	mysqli_close($link);
?>

