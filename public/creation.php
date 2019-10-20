<?php

require_once '../includes/config.php';

$pt = new PostTable();

if (isset($_POST['title']) && isset($_POST['content'])) {
    $post = new Post();
    $post->setTitle($_POST['title']);
    $post->setContent($_POST['content']);
    $pt->create($post);
    header('location: ../index.php');
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
					<li class="nav-item active">

            <a href="../index.php" class="btn btn-elegant">Accueil</a>

					</li>
				</ul>
			</div>
		</div>
	</nav>


    <div class="container">
        <div class="row">
          <br>
          <br>
            <? foreach($posts as $post): ?>
                <div class="col-md-4">
                    <h2><?= $post['title'] ?></h2>
                    <p><?= $post['content'] ?></p>
                </div>
            <? endforeach; ?>
        </div>

        <br>
        <br>

    <!-- Comments Form -->
    <div class="card my-4">
      <h5 class="card-header">Pose ta Question :</h5>
      <div class="card-body">
        <form method="POST" action="">
          <label for="title">Title</label><input type="text" class="form-control" name="title">
          <div class="form-group">

            <label for="title">Content</label><textarea class="form-control" name="content"></textarea>
          </div>
          <input type="submit" class="btn btn-elegant">
        </form>
      </div>
    </div>


    <script src="js/app.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
