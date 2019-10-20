<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<style>
body {
	 background: url(bg.jpg) 50% 50% no-repeat;
	 font-style: Arial}
.header{
	background-color: #2c3e50;
}
.btn{
	background-color: #2c3e50;
}

.container-login100-form-btn {
  width: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
}

.login100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  min-width: 160px;
  height: 50px;
  background-color: #2c3e50;
  border-radius: 25px;

  font-family: Poppins-Regular;
  font-size: 16px;
  color: #fff;
  line-height: 1.2;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.login100-form-btn:hover {
  background-color: #57b846;
}

</style>

<body>

	<div class="header">
		Connectez - Vous
	</div>

	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Prénom</label>
			<input type="text" placeholder="Entrer votre prénom" name="username" >
		</div>
		<div class="input-group">
			<label>Mot de Passe</label>
			<input type="password" placeholder="Entrer votre Mot de passe" name="password">
		</div>
		<br>
		<div class="input-group">
			<button type="submit" class="login100-form-btn" name="login_user">Connexion</button>
		</div>
		<br>
		<p>
			Vous êtes pas encore membre ? <a href="register.php">S'enregistrer</a>
		</p>
	</form>


</body>
</html>
