<?php

require_once '../includes/config.php';

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'On');

$pt = new PostTable();

$id = $_GET['id'];

$objet = $pt->get($id);

if (!empty($_POST['modifier'])){
    if(!empty($_POST['title'] && !empty($_POST['content']))) {

        $post = new Post();
        $post->setTitle($_POST['title']);
        $post->setContent($_POST['content']);
        $post->setId($id);
        $pt->update($post);

        header('location:../index.php');

    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>--BLOG__</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">
</head>
<body>



<header>

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

</header>
<br>
<br>
<br>
    <div class="container">
    <form action="" method="POST">

                <div class="md-form">
                    <input value="<?= $objet->getTitle()?>" name="title" type="text" id="form1" class="form-control">
                    <label for="form1">Titre</label>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea3">Contenu</label>
                    <textarea class="form-control" name="content" id="exampleFormControlTextarea3" rows="7"><?= $objet->getContent()?></textarea>
                </div>

                <input type="submit" name="modifier" value="modifier" class="btn btn-elegant">
      </form>
    </div>

    <script src="js/app.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
