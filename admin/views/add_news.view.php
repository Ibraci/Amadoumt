<?php 
	$title = "Ajouter un article";
	include('partials/_header.php'); ?>

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Ajouter un article au blog
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-9 col-md-offset-1">
							<input type="text" name="titre" class="form-control" placeholder="Titre">
							<textarea name="chapo" rows="3" class="form-control" placeholder="Chapo de l'article"></textarea>
							<textarea name="contenu" rows="3" class="form-control" placeholder="Contenu de l'article"></textarea>
							<button type="submit" class="btn btn-primary">Envoyer</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include('partials/_footer.php'); ?>