<?php 
	$title = "Ajouter un article";
	include('partials/_header.php');
?>

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Ajouter un article au blog
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-9 col-md-offset-1">
							<input name="titre" type="text" class="form-control" placeholder="Titre">
							<textarea name="chapo" rows="3" class="form-control" placeholder="Chapo de l'article"></textarea>
							<textarea name="contenu" rows="3" class="form-control" placeholder="Contenu de l'article"></textarea>
							<input name="envoyer" type="submit" class="btn btn-primary" value="Envoyer">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include('partials/_footer.php'); ?>