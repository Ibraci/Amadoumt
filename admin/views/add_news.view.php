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
						<form method="POST" class="col-md-9 col-md-offset-1">
							<?php 
								if (isset($errors)) {
									echo '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' .$errors. '</div>';
								} else if (isset($success)) {
									echo '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' .$success. '</div>';
								}
							?>
							<input name="titre" type="text" class="form-control" placeholder="Titre" required>
							<textarea name="chapo" rows="3" class="form-control" placeholder="Chapo de l'article" required></textarea>
							<textarea name="contenu" rows="3" class="form-control" placeholder="Contenu de l'article" required></textarea>
							<input name="envoyer" type="submit" class="btn btn-primary" value="Envoyer">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include('partials/_footer.php'); ?>

