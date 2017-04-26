<?php 

	require('../config/database.php');
	if (isset($_POST['envoyer'])) {
		if (!empty($_POST['titre']) && !empty($_POST['chapo']) !empty($_POST['contenu'])) {
			# code...
		}
	}
    

    require('views/add_news.view.php');


  //   $req = $db->prepare('INSERT INTO blog(titre, chapo, contenu) VALUES (?, ?, ?)');
		// $req->execute(array(
		// 	$_POST['titre'],
		// 	$_POST['chapo'],
		// 	$_POST['contenu']));