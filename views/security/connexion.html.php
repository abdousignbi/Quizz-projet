<?php 
    if(isset($_SESSION['test1'])){
		$sene=$_SESSION['test1'];
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?=WEB_ROUTE.'public/css/style.css'?>">
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
	 class="img-responsive "><img class="img-responsive "src="img/teste.png"class="kaka width=20%; height=20%;">
	</div> 
	<div class="login-body">
	<form action="<?php WEB_ROUTE ?>" method="POST" >
		<input type="hidden" name="controllers" value="security">
          <input type="hidden" name="action" value="connexion">
		     <h4 id="sene">login form</h4>
			 <div>
			<label>login</label>
			<input type="text" class="form-control" name="login">
			<small><?php echo isset($sene['login'])? $sene['login']:""; ?></small>
			</div>
			<div>
			<label>Password</label>
			<input type="password" class="form-control" name="password">
			<small><?php echo isset($sene['password'])? $sene['password']:""; ?></small>
			</div>
			<button type="submit" class="btn btn-danger mt-5" >connexion</button>
			<nav class="navbar navbar-expand-sm ">
					<ul class="navbar-nav offset-md-6 mt-2 mt-lg-0">
						<li class="nav-item active">
							<a class="nav-link" href="<?php echo WEB_ROUTE.'?controllers=security&views=inscription' ?>">s'inscricre en tant que joueur</a>
						</li>
					</ul>
			</nav>
		</form>
	</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
  </body>
</html>