<div class="container">
	<nav class="navbar navbar-default">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Desplegar navegación</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">SUAP</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="index.php">Inicio</a></li>
			<li><?php echo $file2; ?></li>
			<li><a href="logout.php">cerrar sesion</a></li>
		</ul>
	</nav>
</div>
<style type="text/css">
	.navbar-nav, .navbar-brand, .navbar-default, .navbar-header{
		background-color: #00A3FE;
	}
	a{
		color: #FFFFFF;
	}
	.container{
		padding: 0 0 10px 0;
	}
	.navbar-brand, .navbar-toggle{
		color: #FFFFFF;
	}
	.container{
		width: 1300px;
	}
</style>