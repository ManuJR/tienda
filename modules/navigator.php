<nav class="navbar navbar-dark bg-dark">
   <a class="navbar-brand" href="<?= FOLDER ?>/">Carrito compra en PHP</a>
   <ul class="nav justify-content-end">
	   <?php  if( !$session->isLoggedIn() ) { ?>
		<li class="nav-item">
	    	<a class="btn btn-outline-light" href="<?= FOLDER ?>/login" >Login</a>
	  	</li>
		<?php  }else{ ?>

		<li class="nav-item">

			<form action="<?= FOLDER ?>/logout" method="POST">
				<input type="submit" value="Logout" class="btn btn-outline-danger">
			</form>
	  	</li>
		<?php 
			} 
		?>

	</ul>
</nav>