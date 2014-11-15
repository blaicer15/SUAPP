<?php 
	include "conect.php";
 ?>
<?php 
	if (isset($_POST['vitae'])){

		




	}
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Curriculum Vitae</title>
	<meta http-equiv="X-UA-Compatible" content="IE-edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.min.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/jquery-latest.js"></script>
</head>
<body>
	<div id="box3" class="col-xs-12 col-sm-12 col-md-9 col-md-offset-2 well well-sm">
		<div id="font1">
			<br><h1 align="center"><b><i class="fa fa-graduation-cap"></i> Curriculum Vitae</b></h1>
		</div>
		<ul class="nav nav-tabs">
			<li class="active"><a href="#inicio" data-toggle="tab">Inicio</a></li>
			<li><a href="#formacion" data-toggle="tab">Formación académica</a></li>
			<li><a href="#docente" data-toggle="tab">Experiencia Docente</a></li>
			<li><a href="#profesional" data-toggle="tab">Experiencia Profesional</a></li>
			<li><a href="#investigacion" data-toggle="tab">Proyectos de Investigación</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">Logros<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a data-toggle="tab" href="#publicaciones">Publicaciones</a></li>
					<li><a data-toggle="tab" href="#tesis">Tesis</a></li>
					<li><a data-toggle="tab" href="#ponencias">Ponencias</a></li>
					<li><a data-toggle="tab" href="#premios">Premios</a></li>
					<li><a data-toggle="tab" href="#asociaciones">Asociaciones</a></li>
				</ul>
			</li>
		</ul>
		<div class="tab-content"><br>
			<div class="tab-pane fade in active" id="inicio">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4"><input class="form-control" name="paterno" placeholder="Apellido paterno" type="text" required/></div>
							<div class="col-md-4"><input class="form-control" name="materno" placeholder="Apellido materno" type="text" required/></div>
							<div class="col-md-4"><input class="form-control" name="nombre" placeholder="Nombre(s)" type="text" required/></div>
						</div>
					</div>
				</div>
				<br>
				<hr/>
				<div class="col-md-6">
					<div class="row">
						<input class="form-control" name="nombreinst" placeholder="Nombre de la Institución" type="text" required/>
						<br>	
						<input class="form-control" name="programap" placeholder="Programa Educativo de Posgrado de Adscripción" type="text" required/>
						<br>
						<input class="form-control" name="programal" placeholder="Programa Educativo de Licenciatura de Adscripción" type="text" required/>
						<br>
						<input class="form-control" name="categoria" placeholder="Categoría/Plaza"type="text" required/>
						<br>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12 nac">
							<h5><b>Fecha de nacimiento:</b></h5>
						<br>
						<div class="col-md-6 row">
						<input class="form-control" name="nacimiento" type="date" placeholder="Fecha de nacimiento" required/>	
						<br>
						</div>
						<form class="col-md-6 row">
							<input class="form-control" name="edad" type="number" placeholder="Edad" min="0" max="100" required/>	
							<br>	
							<input class="form-control" name="email" placeholder="E-mail" type="email" required/>
						</form>
						</div>
					</div>
				</div>
				<!--Hacer que al dar click cambie al siguiente tab!!!-->
				<a href="" class="btn btn-md next" id="color" name="btnok"><b>&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right fa-2x"></i>&nbsp;&nbsp;</b></a>
				<!--<button class="btn btn-md " id="color" type="button" name="btnok">Guardar</button>-->
			</div>
			<div class="tab-pane fade" id="formacion">
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="active">Nombre de la licenciatura</th>
										<th class="active">Institución</th>
										<th class="active">Periodo</th>
										<th class="active">Periodo Mes/Año</th>
										<th class="active">No. Cedula</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="text" name="nombrelic" size="20" class="border" /></td>
										<td><input type="text" name="institucion1" size="20" class="border" /></td>
										<td><input type="text" name="periodo1" size="20" class="border" /></td>
										<td><input type="text" name="periodoma1" size="20" class="border" /></td>
										<td><input type="text" name="cedula1" size="10" class="border" /></td>
									</tr>		
								</tbody>
							</table>
						</div>
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="active">Nombre de la especialización</th>
										<th class="active">Institución</th>
										<th class="active">Periodo</th>
										<th class="active">Periodo Mes/Año</th>
										<th class="active">No. Cedula</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="text" name="nombreesp" size="20" class="border" /></td>
										<td><input type="text" name="institucion2" size="20" class="border" /></td>
										<td><input type="text" name="periodo2" size="20" class="border" /></td>
										<td><input type="text" name="periodoma2" size="20" class="border" /></td>
										<td><input type="text" name="cedula2" size="10" class="border" /></td>
									</tr>										
								</tbody>
							</table>
						</div>	
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="active">Nombre de la maestría</th>
										<th class="active">Institución</th>
										<th class="active">Periodo</th>
										<th class="active">Periodo Mes/Año</th>
										<th class="active">No. Cedula</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="text" name="nombremae" size="20" class="border" /></td>
										<td><input type="text" name="institucion3" size="20" class="border" /></td>
										<td><input type="text" name="periodo3" size="20" class="border" /></td>
										<td><input type="text" name="periodoma3" size="20" class="border" /></td>
										<td><input type="text" name="cedula3" size="10" class="border" /></td>
									</tr>		
								</tbody>
							</table>
						</div>
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="active">Nombre del doctorado</th>
										<th class="active">Institución</th>
										<th class="active">Periodo</th>
										<th class="active">Periodo Mes/Año</th>
										<th class="active">No. Cedula</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="text" name="nombredoc" size="20" class="border" /></td>
										<td><input type="text" name="institucion4" size="20" class="border" /></td>
										<td><input type="text" name="periodo4" size="20" class="border" /></td>
										<td><input type="text" name="periodoma4" size="20" class="border" /></td>
										<td><input type="text" name="cedula4" size="10" class="border" /></td>
									</tr>										
								</tbody>
							</table>
						</div>	
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="active">Nombre del posdoctorado</th>
										<th class="active">Institución</th>
										<th class="active">Periodo</th>
										<th class="active">Periodo Mes/Año</th>
										<th class="active">No. Cedula</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="text" name="nombreposdoc" size="20" class="border" /></td>
										<td><input type="text" name="institucion5" size="20" class="border" /></td>
										<td><input type="text" name="periodo5" size="20" class="border" /></td>
										<td><input type="text" name="periodoma5" size="20" class="border" /></td>
										<td><input type="text" name="cedula5" size="10" class="border" /></td>
									</tr>										
								</tbody>
							</table>
						</div>
						<a href="" class="btn btn-md next" id="color" name="btnok"><b>&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right fa-2x"></i>&nbsp;&nbsp;</b></a>
						<!--<button class="btn btn-md " id="color" type="button" name="btnok">Guardar</button></a>-->
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="docente">
				<div class="row">
					<div class="col-md-12">

						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="active">Asignaturas impartidas</th>
										<th class="active">Posgrado</th>
										<th class="active">Institución</th>
										<th class="active">Periodo Mes/Año</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="text" name="asignatura1" size="45" class="border" /></td>
										<td><input type="text" name="posgrado1" size="20" class="border" /></td>
										<td><input type="text" name="instituED1" size="20" class="border" /></td>
										<td><input type="text" name="perioMA1" size="20" class="border" /></td>
									</tr>
									<tr>
										<td><input type="text" name="asignatura2" size="45" class="border" /></td>
										<td><input type="text" name="posgrado2" size="20" class="border" /></td>
										<td><input type="text" name="instituED2" size="20" class="border" /></td>
										<td><input type="text" name="perioMA2" size="20" class="border" /></td>
									</tr>
									<tr>
										<td><input type="text" name="asignatura3" size="45" class="border" /></td>
										<td><input type="text" name="posgrado3" size="20" class="border" /></td>
										<td><input type="text" name="instituED3" size="20" class="border" /></td>
										<td><input type="text" name="perioMA3" size="20" class="border" /></td>
									</tr>
									<tr>
										<td><input type="text" name="asignatura4" size="45" class="border" /></td>
										<td><input type="text" name="posgrado4" size="20" class="border" /></td>
										<td><input type="text" name="instituED4" size="20" class="border" /></td>
										<td><input type="text" name="perioMA4" size="20" class="border" /></td>
									</tr>											
								</tbody>
							</table>
						</div>	
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="active">Asignaturas impartidas</th>
										<th class="active">Licenciatura</th>
										<th class="active">Institución</th>
										<th class="active">Periodo Mes/Año</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="text" name="asignaturaslic1" size="45" class="border" /></td>
										<td><input type="text" name="licenciatura1" size="20" class="border" /></td>
										<td><input type="text" name="institucionED1" size="20" class="border" /></td>
										<td><input type="text" name="periodoMA1" size="20" class="border" /></td>
									</tr>
									<tr>
										<td><input type="text" name="asignaturaslic2" size="45" class="border" /></td>
										<td><input type="text" name="licenciatura2" size="20" class="border" /></td>
										<td><input type="text" name="institucionED2" size="20" class="border" /></td>
										<td><input type="text" name="periodoMA2" size="20" class="border" /></td>
									</tr>
									<tr>
										<td><input type="text" name="asignaturaslic3" size="45" class="border" /></td>
										<td><input type="text" name="licenciatura3" size="20" class="border" /></td>
										<td><input type="text" name="institucionED3" size="20" class="border" /></td>
										<td><input type="text" name="periodoMA3" size="20" class="border" /></td>
									</tr>
									<tr>
										<td><input type="text" name="asignaturaslic4" size="45" class="border" /></td>
										<td><input type="text" name="licenciatura4" size="20" class="border" /></td>
										<td><input type="text" name="institucionED4" size="20" class="border" /></td>
										<td><input type="text" name="periodoMA4" size="20" class="border" /></td>
									</tr>											
								</tbody>
							</table>
						</div>
						<a href="" class="btn btn-md next" id="color" name="btnok"><b>&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right fa-2x"></i>&nbsp;&nbsp;</b></a>
						<!--<button class="btn btn-md " id="color" type="button" name="btnok">Guardar</button></a>-->
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="profesional">
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="active">Puesto</th>
										<th class="active">Funciones</th>
										<th class="active">Institución o Empresa</th>
										<th class="active">Periodo Mes/Año</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="text" name="puesto1" size="20" class="border" /></td>
										<td><input type="text" name="funcion1" size="40" class="border" /></td>
										<td><input type="text" name="instoemp1" size="25" class="border" /></td>
										<td><input type="text" name="periMA1" size="20" class="border" /></td>
									</tr>
									<tr>
										<td><input type="text" name="puesto2" size="20" class="border" /></td>
										<td><input type="text" name="funcion2" size="40" class="border" /></td>
										<td><input type="text" name="instoemp2" size="25" class="border" /></td>
										<td><input type="text" name="periMA2" size="20" class="border" /></td>
									</tr>
									<tr>
										<td><input type="text" name="puesto3" size="20" class="border" /></td>
										<td><input type="text" name="funcion3" size="40" class="border" /></td>
										<td><input type="text" name="instoemp3" size="25" class="border" /></td>
										<td><input type="text" name="periMA3" size="20" class="border" /></td>
									</tr>
									<tr>
										<td><input type="text" name="puesto4" size="20" class="border" /></td>
										<td><input type="text" name="funcion4" size="40" class="border" /></td>
										<td><input type="text" name="instoemp4" size="25" class="border" /></td>
										<td><input type="text" name="periMA4" size="20" class="border" /></td>
									</tr>											
								</tbody>
							</table>
						</div>	
						<a href="" class="btn btn-md next" id="color" name="btnok"><b>&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right fa-2x"></i>&nbsp;&nbsp;</b></a>
						<!--<button class="btn btn-md " id="color" type="button" name="btnok">Guardar</button>-->	
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="investigacion">
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="active">Línea de investigación</th>
										<th class="active">Nom. Proyecto</th>
										<th class="active">Periodo</th>
										<th class="active">Periodo Mes/Año</th>
										<th class="active">Resultados</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="text" name="linea1" size="25" class="border" /></td>
										<td><input type="text" name="nombreproy1" size="20" class="border" /></td>
										<td><input type="text" name="periox1" size="20" class="border" /></td>
										<td><input type="text" name="PMA1" size="20" class="border" /></td>
										<td><input type="text" name="resultad1" size="20" class="border" /></td>
									</tr>
									<tr>
										<td><input type="text" name="linea2" size="25" class="border" /></td>
										<td><input type="text" name="nombreproy2" size="20" class="border" /></td>
										<td><input type="text" name="periox2" size="20" class="border" /></td>
										<td><input type="text" name="PMA2" size="20" class="border" /></td>
										<td><input type="text" name="resultad2" size="20" class="border" /></td>
									</tr>
									<tr>
										<td><input type="text" name="linea3" size="25" class="border" /></td>
										<td><input type="text" name="nombreproy3" size="20" class="border" /></td>
										<td><input type="text" name="periox3" size="20" class="border" /></td>
										<td><input type="text" name="PMA3" size="20" class="border" /></td>
										<td><input type="text" name="resultad3" size="20" class="border" /></td>
									</tr>
									<tr>
										<td><input type="text" name="linea4" size="25" class="border" /></td>
										<td><input type="text" name="nombreproy4" size="20" class="border" /></td>
										<td><input type="text" name="periox4" size="20" class="border" /></td>
										<td><input type="text" name="PMA4" size="20" class="border" /></td>
										<td><input type="text" name="resultad4" size="20" class="border" /></td>
									</tr>													
								</tbody>
							</table>
						</div>
						<a href="" class="btn btn-md next" id="color" name="btnok"><b>&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right fa-2x"></i>&nbsp;&nbsp;</b></a>
						<!--<button class="btn btn-md " id="color" type="button" name="btnok">Guardar</button>-->
					</div>
				</div>
			</div>
<!--AQUI EMPIEZA LO QUE VA DENTRO DE LOGROS-->
			<div class="tab-pane fade" id="publicaciones">
				<h5><b>Publicaciones (Artículos, libros, capítulos de libros, patentes, etc)</b></h5>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="active">Línea de investigación</th>
										<th class="active">Nombre del articulo</th>
										<th class="active">Titulo</th>
										<th class="active">Periodo Mes/Año</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="text" name="publinea1" size="25" class="border" /></td>
										<td><input type="text" name="nombart1" size="20" class="border" /></td>
										<td><input type="text" name="pubtitulo1" size="20" class="border" /></td>
										<td><input type="text" name="pubPMA1" size="20" class="border" /></td>
										
									</tr>
									<tr>
										<td><input type="text" name="publinea2" size="25" class="border" /></td>
										<td><input type="text" name="nombart2" size="20" class="border" /></td>
										<td><input type="text" name="pubtitulo2" size="20" class="border" /></td>
										<td><input type="text" name="pubPMA2" size="20" class="border" /></td>
										
									</tr>
									<tr>
										<td><input type="text" name="publinea3" size="25" class="border" /></td>
										<td><input type="text" name="nombart3" size="20" class="border" /></td>
										<td><input type="text" name="pubtitulo3" size="20" class="border" /></td>
										<td><input type="text" name="pubPMA3" size="20" class="border" /></td>
									</tr>													
								</tbody>
							</table>
						</div>
						<a href="" class="btn btn-md next" id="color" name="btnok"><b>&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right fa-2x"></i>&nbsp;&nbsp;</b></a>
						<!--<button class="btn btn-md " id="color" type="button" name="btnok">Guardar</button>-->
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="tesis">
			<h5><b>Tesis dirigidas (Concluidas)</b></h5>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="active">Nombre de la tesis</th>
										<th class="active">Nombre del alumno</th>
										<th class="active">Institución</th>
										<th class="active">Programa</th>
										<th class="active">Periodo Mes/Año</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="text" name="nombretesis1" size="25" class="border" /></td>
										<td><input type="text" name="nombrealumno1" size="20" class="border" /></td>
										<td><input type="text" name="tesisinstitu1" size="20" class="border" /></td>
										<td><input type="text" name="tesisprograma1" size="20" class="border" /></td>
										<td><input type="text" name="tesisPMA1" size="20" class="border" /></td>
									</tr>
									<tr>
										<td><input type="text" name="nombretesis2" size="25" class="border" /></td>
										<td><input type="text" name="nombrealumno2" size="20" class="border" /></td>
										<td><input type="text" name="tesisinstitu2" size="20" class="border" /></td>
										<td><input type="text" name="tesisprograma2" size="20" class="border" /></td>
										<td><input type="text" name="tesisPMA2" size="20" class="border" /></td>
									</tr>
									<tr>
										<td><input type="text" name="nombretesis3" size="25" class="border" /></td>
										<td><input type="text" name="nombrealumno3" size="20" class="border" /></td>
										<td><input type="text" name="tesisinstitu3" size="20" class="border" /></td>
										<td><input type="text" name="tesisprograma3" size="20" class="border" /></td>
										<td><input type="text" name="tesisPMA3" size="20" class="border" /></td>
									</tr>
									<tr>
										<td><input type="text" name="nombretesis4" size="25" class="border" /></td>
										<td><input type="text" name="nombrealumno4" size="20" class="border" /></td>
										<td><input type="text" name="tesisinstitu4" size="20" class="border" /></td>
										<td><input type="text" name="tesisprograma4" size="20" class="border" /></td>
										<td><input type="text" name="tesisPMA4" size="20" class="border" /></td>
									</tr>													
								</tbody>
							</table>
						</div>
						<a href="" class="btn btn-md next" id="color" name="btnok"><b>&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right fa-2x"></i>&nbsp;&nbsp;</b></a>
						<!--<button class="btn btn-md " id="color" type="button" name="btnok">Guardar</button>-->
					</div>
				</div>	
			</div>
			<div class="tab-pane fade" id="ponencias">
			<h5><b>Participación en eventos como ponente</b></h5>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="active">Nombre del evento</th>
										<th class="active">Tipo de participación</th>
										<th class="active">Periodo Mes/Año</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="text" name="nombreevento1" size="25" class="border" /></td>
										<td><input type="text" name="tipoparticipacion1" size="20" class="border" /></td>
										<td><input type="text" name="ponenciaPMA1" size="20" class="border" /></td>
									</tr>
									<tr>
										<td><input type="text" name="nombreevento2" size="25" class="border" /></td>
										<td><input type="text" name="tipoparticipacion2" size="20" class="border" /></td>
										<td><input type="text" name="ponenciaPMA2" size="20" class="border" /></td>
									</tr>
									<tr>
										<td><input type="text" name="nombreevento3" size="25" class="border" /></td>
										<td><input type="text" name="tipoparticipacion3" size="20" class="border" /></td>
										<td><input type="text" name="ponenciaPMA3" size="20" class="border" /></td>										
									</tr>
									<tr>
										<td><input type="text" name="nombreevento4" size="25" class="border" /></td>
										<td><input type="text" name="tipoparticipacion4" size="20" class="border" /></td>
										<td><input type="text" name="ponenciaPMA4" size="20" class="border" /></td>										
									</tr>
								</tbody>
							</table>
						</div>
						<a href="" class="btn btn-md next" id="color" name="btnok"><b>&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right fa-2x"></i>&nbsp;&nbsp;</b></a>
						<!--<button class="btn btn-md " id="color" type="button" name="btnok">Guardar</button>-->
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="premios">
			<h5><b>Premios, distinciones, etc.</b></h5>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="active">Premio, distinción o reconocimiento recibido</th>
										<th class="active">Otorgado por</th>
										<th class="active">Periodo Mes/Año</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="text" name="premio1" size="25" class="border" /></td>
										<td><input type="text" name="otorgadopor1" size="20" class="border" /></td>
										<td><input type="text" name="premioPMA1" size="20" class="border" /></td>
									</tr>
									<tr>
										<td><input type="text" name="premio2" size="25" class="border" /></td>
										<td><input type="text" name="otorgadopor2" size="20" class="border" /></td>
										<td><input type="text" name="premioPMA2" size="20" class="border" /></td>
									</tr>
									<tr>
										<td><input type="text" name="premio3" size="25" class="border" /></td>
										<td><input type="text" name="otorgadopor3" size="20" class="border" /></td>
										<td><input type="text" name="premioPMA3" size="20" class="border" /></td>										
									</tr>
									<tr>
										<td><input type="text" name="premio4" size="25" class="border" /></td>
										<td><input type="text" name="otorgadopor4" size="20" class="border" /></td>
										<td><input type="text" name="premioPMA4" size="20" class="border" /></td>										
									</tr>
								</tbody>
							</table>
						</div>
						<a href="" class="btn btn-md next" id="color" name="btnok"><b>&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right fa-2x"></i>&nbsp;&nbsp;</b></a>
						<!--<button class="btn btn-md " id="color" type="button" name="btnok">Guardar</button>-->
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="asociaciones">
			<h5><b>Asociaciones</b></h5>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="active">Nombre de la asociación</th>
										<th class="active">Tipo de membresía</th>
										<th class="active">Periodo Mes/Año</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="text" name="nombreasociacion1" size="25" class="border" /></td>
										<td><input type="text" name="tipomembresia1" size="20" class="border" /></td>
										<td><input type="text" name="asociacionPMA1" size="20" class="border" /></td>
									</tr>
									<tr>
										<td><input type="text" name="nombreasociacion2" size="25" class="border" /></td>
										<td><input type="text" name="tipomembresia2" size="20" class="border" /></td>
										<td><input type="text" name="asociacionPMA2" size="20" class="border" /></td>
									</tr>
									<tr>
										<td><input type="text" name="nombreasociacion3" size="25" class="border" /></td>
										<td><input type="text" name="tipomembresia3" size="20" class="border" /></td>
										<td><input type="text" name="asociacionPMA3" size="20" class="border" /></td>										
									</tr>
									<tr>
										<td><input type="text" name="nombreasociacion4" size="25" class="border" /></td>
										<td><input type="text" name="tipomembresia4" size="20" class="border" /></td>
										<td><input type="text" name="asociacionPMA4" size="20" class="border" /></td>										
									</tr>
								</tbody>
							</table>
						</div>
						<button class="btn btn-md " id="color" type="button" name="btnok">Guardar</button></a>
					</div>
				</div>
			</div>
<!--AQUI TERMINA LO QUE VA DENTRO DE LOGROS-->
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>