<?php 
	require('../config/database.php');


	if (isset($_POST['titre']) AND isset($_POST['chapo']) AND isset($_POST['contenu'])) {
		if (!empty($_POST['titre']) && !empty($_POST['chapo']) && !empty($_POST['contenu'])) {
			$titre = htmlspecialchars($_POST['titre']);
			$chapo = htmlspecialchars($_POST['chapo']);
			$contenu = htmlspecialchars($_POST['contenu']);

			$req = $db->prepare('INSERT INTO  blog(titre, chapo, contenu, date_publication) VALUES(?, ?, ?, NOW())');
			$req->execute(array($titre, $chapo, $contenu));

			$success = 'Votre article a ete poste avec succes !';
		} else {
			$errors = 'Veuillez remplir tous les champs !';
		}
	}
    

?>  

<?php require('views/add_news.view.php'); ?>