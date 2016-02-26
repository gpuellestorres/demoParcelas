<?php 
	include $_SERVER['DOCUMENT_ROOT']."/header.php";
?>
<div class="container">
	<div class="col-sm-6 col-sm-offset-3">
		<br>
		<br>
		<br>
		<br>
		<?php
			if(isset($_POST['sector1']))
			{
				echo $_POST["sector1"]."<br>";
			}
			if(isset($_POST['sector2']))
			{
				echo $_POST["sector2"]."<br>";
			}
			if(isset($_POST['sector3']))
			{
				echo $_POST["sector3"]."<br>";
			}
			if(isset($_POST['sector4']))
			{
				echo $_POST["sector4"];
			}
		?>
	</div>
</div>