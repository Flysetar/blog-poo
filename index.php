<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
require_once 'includes/config.php';

$pt = new PostTable();

if(!empty(($_GET['id']))){
    $getid = intval($_GET['id']);
    $pt->delete($getid);
    header('location:index.php');
}

$posts = $pt->all();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>--BLOG--</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">
</head>
<body>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#">Blog</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">


							<p>	<a href="public/creation.php" class="btn btn-elegant">Ajouter</a></p>
							<!-- logged in user information -->
							<?php  if (isset($_SESSION['username'])) : ?>
								<p> <a href="index.php?logout='1'" class="btn btn-elegant">Déconnexion</a> </p>
							<?php endif ?>

					</li>
				</ul>
			</div>
		</div>
	</nav>
		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p> <a href="index.php?logout='1'" style="color: red;">Déconnexion</a> </p>
		<?php endif ?>


		<br>
			<br>
		<!-- Page Content -->
	  <div class="container">
 				<!-- Post Content Column -->
	      <div class="col-lg-8">

	        <!-- Comments Form -->
	        <div class="card my-4">
	          <h5 class="card-header">Bienvenue</h5>
	          <div class="card-body">
	           Vous pourrez trouver une réponse à vos questions, n'hésitez pas ajouter un commentaire.
	          </div>
	        </div>


		<!-- Single Comment -->
		<?php foreach($posts as $post): ?>

		<div class="media mb-4">
			<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
			<div class="media-body">
				<h2><?= $post['title'] ?></h2>
				<p><?= $post['content'] ?></p>

				<a href="public/modifier.php?id= <?= $post['id'] ?>" class="btn btn-elegant">Modifier</a>
				<a href="index.php?id=<?= $post['id'] ?>" class="btn btn-elegant">Supprimer</a>
			</div>
		</div>

			<?php endforeach; ?>

	</div>
</div>

				  <!-- Footer -->
				  <footer class="py-5 bg-dark">
				    <div class="container">
				      <p class="m-0 text-center text-white">Copyright &copy; Paul Vaisseau 2019</p>
				    </div>
				    <!-- /.container -->
				  </footer>

				<script src="js/app.js"></script>
				<script src="js/script.js"></script>
				<!-- Bootstrap core JavaScript -->
				<script src="vendor/jquery/jquery.min.js"></script>
				<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
</html>
