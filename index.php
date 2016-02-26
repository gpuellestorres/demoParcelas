<?php 
	include $_SERVER['DOCUMENT_ROOT']."/header.php";
?>

<div class="container">
	<div class="page-header">
		<h1>Sectores Ocupados</h1>
	</div>
	<form action="mapa.php" method="post" enctype="multipart/form-data">
		<div id="divNombre" class="form-group">
			<h3>Marque los sectores que se encuentran ocupados</h3>
			<div class="checkbox">
				<input type="checkbox" name="sector" value="1" >Sector 1</input>
			</div>
			<div class="checkbox">
				<input type="checkbox" name="sector" value="1" />Sector 2</input>
			</div>
			<div class="checkbox">
				<input type="checkbox" name="sector" value="1" />Sector 3</input>
			</div>
			<div class="checkbox">
				<input type="checkbox" name="sector" value="1" />Sector 4</input>
			</div>
		</div>
		<br />
		<br />
		<div class="modal-footer">
			<button id="botonAgregar" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></i>&nbsp;Guardar</button>
		</div>
	</form>
</div>