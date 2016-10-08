<?php require "core/settings.php"; ?>
<html>
<head>
	<?php require "bootstrap.php"; ?>
	<link rel="stylesheet" type="text/css" href="<?= $URL_PATH ?>static/login.css" />
	<script src="<?= $URL_PATH ?>static/login.js"></script>
	<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
	<title>Login</title>
</head>
<body>
<div class="container">
    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Faça o Login</h3>
			 	</div>
			  	<div class="panel-body">

			  		<?php if(isset($_GET['error'])){ ?>
			  			<div class="alert alert-danger">
			  				<?php 
			  					if($_GET['error'] == 'invalid_login'){ ?>
			  						Login ou senha invalido!
			  				<?php }
  								else if($_GET['error'] == 'missing_field'){ ?>
  									Campos Obrigatorios!

  							<?php } ?>	
			  			</div>

			  		<?php } ?>
			  		<?php echo $sec_senha = sha1('s3gur@' . '123'); ?>
			    	<form accept-charset="UTF-8" role="form" method="POST" action="<?= $URL_PATH ?>core/login.php">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="E-mail" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Senha" name="senha" type="password" value="">
			    		</div>

			    		<input class="btn btn-lg btn-primary btn-block" type="submit" value="Entrar">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
</body>
</html>

