<?php
   if(isset($_SESSION['error'])){
	   $abdou=$_SESSION['error'];
	 //  var_dump($abdou);
	 
   }

?>
   <//?php
var_dump($_POST);
var_dump($_FILES);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?=WEB_ROUTE.'css/style.css'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="login-box" >
	<div class="login-header">le plaisir de jouer</div> 
     <div 
	 class="img-responsive "><img class="img-responsive"src="test.png">
	</div> 
	<div class="login-body">
		<div class="container">
		<form action="<?php WEB_ROUTE ?>" method="POST"  enctype= »multipart/form-data » >
		<input type="hidden" name="controllers" value="security">
        <input type="hidden" name="action" value="inscription">
		     <h4 id="baba">s'inscrire</h4>
			 <div>
			 <label>nom</label>
			<input type="text" class="form-control col-md-6"   name="nom">
			<small><?php echo isset($abdou['nom'])? $abdou['nom']:""; ?></small>
			</div>
			<div>
			<label>prenom</label>
			<input type="text" class="form-control col-md-6" name="prenom">
			<small><?php echo isset($abdou['prenom'])? $abdou['prenom']:""; ?></small>
			</div>
			<div>
			<label>mail</label>
			<input type="text" class="form-control col-md-6" name="mail">
			<small><?php echo isset($abdou['mail'])? $abdou['mail']:""; ?></small>	
			</div>
			<div>
			<label>motpass</label>
			<input type="password" class="form-control col-md-6" name="motpass">
			<small><?php echo isset($abdou['motpass'])? $abdou['motpass']:""; ?></small>
			</div>
			<div>
			<label>confirmPassword</label>	
			<input type="password" class="form-control col-md-6" name="confirme">
			</div>
			<h4 id="signbi">avatar</h4>
			<input type="file" alt="avatar" name="test.png">
			<button type="submit" class="btn btn-primary mt-5 " name="inscrir">connexion</button>
		</form>
		</div>
	</div>
</div>
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <style>
	  
  </style>
  </body>
</html>