<?php 
	include $_SERVER['DOCUMENT_ROOT']."/header.php";

	if(isset($_POST['sector1']))
	{
		echo $_POST["sector1"];
	}
	if(isset($_POST['sector2']))
	{
		echo "<br>".$_POST["sector2"];
	}
	if(isset($_POST['sector3']))
	{
		echo "<br>".$_POST["sector3"];
	}
	if(isset($_POST['sector4']))
	{
		echo "<br>".$_POST["sector4"];
	}
?>