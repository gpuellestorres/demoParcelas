<?php 
	include $_SERVER['DOCUMENT_ROOT']."/header.php";
?>
<div class="container">
	<div class="col-sm-6 col-sm-offset-3">
		<br>
		<br>
		<?php
			for($i=1;$i<5;$i++)
			{
				if(isset($_POST['sector'.$i]))
				{
					echo "<h4>".$_POST["sector".$i]."</h4>";
				}
			}
		?>
	</div>
</div>