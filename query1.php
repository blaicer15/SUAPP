<?php
include 'conect.php';

?>
<div class="table-responsive">

	<br><br><table class="table table-bordered table-hover" align="center">
	<thead bgcolor='#00a3cc'>
							<tr>
								<th class="success">Id</th>
								<th class="success">Nombre</th>
								<th class="success">Usuario</th>
								<th class="success">Correo Electronico</th>
								<th class="success">Contraseña</th>
								<th class="success">Rol del Usuario</th>
							</tr>
	</thead>
	<?php  
	$query ='SELECT * FROM usuarios;';
	$result = pg_query($query);
	$lineas = pg_num_rows($result);
	if ($lineas>0) {
		while ($array = pg_fetch_array($result)) {
			$id = $array['id'];
			$nombre = $array['nombre'];
			$usuario = $array['usuario'];
			$correo = $array['correo'];
			$pass = $array['pass'];
			$rol = $array['rol'];

			?>
			<tr bgcolor='white' align="center">
				<td><?php echo $id;?></td>
				<td><?php echo $nombre;?></td>
				<td><?php echo $usuario;?></td>
				<td><?php echo $correo;?></td>
				<td><?php echo $pass;?></td>
				<td><?php echo $rol;?></td>
			</tr>
			<?php }; ?>
		</table>
		<?php }; ?>
	</div>
