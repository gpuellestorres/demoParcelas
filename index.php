<?php 
	include $_SERVER['DOCUMENT_ROOT']."/header.php";
?>

<div class="container">
	<form action="subir.php" method="post" enctype="multipart/form-data">
		<div id="divNombre" class="form-group">			
			<div class="checkbox">
				<input type="checkbox" name="sector" value="1" >Sector 1</input>
			</div>
			<br>
			<div class="checkbox">
				<input type="checkbox" name="sector" value="1" />Sector 2</input>
			</div>
			<br>
			<div class="checkbox">
				<input type="checkbox" name="sector" value="1" />Sector 3</input>
			</div>
			<br>
			<div class="checkbox">
				<input type="checkbox" name="sector" value="1" />Sector 4</input>
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