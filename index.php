<?php 
	include $_SERVER['DOCUMENT_ROOT']."/header.php";
?>

<div class="container">
	<form action="subir.php" method="post" enctype="multipart/form-data">
		<div id="divNombre" class="form-group">
			<label for="nombre" class="control-label">Sector 1</label>
			<div class="checkbox">
				<input type="checkbox" name="sector" value="1" />
			</div>
			<br>
			<label for="nombre" class="control-label">Sector 2</label>
			<div class="checkbox">
				<input type="checkbox" name="sector" value="1" />
			</div>
			<br>
			<label for="nombre" class="control-label">Sector 3</label>
			<div class="checkbox">
				<input type="checkbox" name="sector" value="1" />
			</div>
			<br>
			<label for="nombre" class="control-label">Sector 4</label>
			<div class="checkbox">
				<input type="checkbox" name="sector" value="1" />
			</div>
		</div>
		<br />
		<br />
		<div class="modal-footer">
			<a href="/admin/ubicaciones" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-remove" aria-hidden="true"></i>&nbsp;Cancelar</a>
			<button id="botonAgregar" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></i>&nbsp;Agregar</button>
		</div>
	</form>
</div>