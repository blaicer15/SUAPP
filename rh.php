<!DOCTYPE html>
<html>
<head>
	<title>Recurso Humano</title>
	<!--
	-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/colors.css">
	<script src="js/bootstrap.js"></script>
	<script type="text/javascript" href="wizard.js"></script>
	<script type="text/javascript" href="jquery-2.1.1.min.js"></script>
</head>
<body>
	<?php
	$file = basename($_SERVER['PHP_SELF']);
	include "resbar.php";
	include "barra.php";
	?>
	<div id="rootwizard">
	<div class="tab-content">
	    <div class="tab-pane" id="tab1">
	      1
	    </div>
	    <div class="tab-pane" id="tab2">
	      2
	    </div>
		<div class="tab-pane" id="tab3">
			3
	    </div>
		<div class="tab-pane" id="tab4">
			4
	    </div>
		<div class="tab-pane" id="tab5">
			5
	    </div>
		<div class="tab-pane" id="tab6">
			6
	    </div>
		<div class="tab-pane" id="tab7">
			7
	    </div>
		<ul class="pager wizard">
			<li class="previous first" style="display:none;"><a href="#">First</a></li>
			<li class="previous"><a href="#">Anterior</a></li>
			<li class="next last" style="display:none;"><a href="#">Last</a></li>
		  	<li class="next"><a href="#">Siguiente</a></li>
		</ul>
	</div>	
</div>

</body>
</html>

