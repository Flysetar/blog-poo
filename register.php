<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Connexion2</title>
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
		Enregistrez - vous 
	</div>

	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="form">
		<div class="input-group">
			<label>Prénom</label>
			<input type="text" placeholder="Entrer votre Prénom"name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" placeholder="Entrer votre Email"name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Mot de passe</label>
			<input type="password" placeholder="Entrer votre mot de passe"name="password_1">
		</div>
		<div class="input-group">
			<label>Confirmer Mot de passe</label>
			<input type="password" placeholder="Confirmer votre mot de passe"name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="login100-form-btn" name="reg_user">s'enregistrer</button>
		</div>
		<br>
		<p>
			Déja membre ? <a href="login.php">Connexion</a>
		</p>
	</form>
</body>
</html>
