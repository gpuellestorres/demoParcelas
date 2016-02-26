<?php 
	include $_SERVER['DOCUMENT_ROOT']."/header.php";
?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true&languaje=ja"></script>
 

<script type="text/javascript">
	var map;
		var markersArray = [];
		var poligono;		
		
		function initMap() {   
			var laserena = new google.maps.LatLng(-29.91618	, -71.21781);
			var myOptions = {
				zoom:15,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				center: laserena
			}
			map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);  
								
																
		}
		

		function Mostrar_Casa_1() {				
			var Casa1 = [				
				new google.maps.LatLng(-29.91600 , -71.21500),
				new google.maps.LatLng(-29.91600 , -71.21600),
				new google.maps.LatLng(-29.91700 , -71.21600),
				new google.maps.LatLng(-29.91700 , -71.21500)
			];


			
			poligonoCasa1 = new google.maps.Polygon({
				paths: Casa1,
				strokeColor: "#093",
				strokeOpacity: 0.8,
				strokeWeight: 2,
				fillColor:   
				<?php if(isset($_POST['sector1']))
				{
					echo '"red",';
				}else{
					echo '"green",';		
				}	
				?>

				fillOpacity: 0.35,
				map:map
			});


			var InfoWindowCasa1 = new google.maps.InfoWindow({
				content: "<h2>Sector 1</h2><br><img width='500' src='https://maps.googleapis.com/maps/api/streetview?size=600x300&location=-29.91589,-71.214845&heading=151.78&pitch=-0.76&key=AIzaSyCNjTa-9hZQNUXinLyGA-OBikIfucKxka8'>"
			}); 

			var LatLngPoligono = new google.maps.LatLng(-29.91650 , -71.21550);
				
			var marker = new google.maps.Marker({
				position: LatLngPoligono,
				map: map,				
			});

			google.maps.event.addListener(poligonoCasa1, 'click', function() {
				InfoWindowCasa1.open(map,marker);
			});
			//poligono.setMap(map);
		}
	
		function Mostrar_Casa_2() {	
			var Casa2 = [
				new google.maps.LatLng(-29.91700 , -71.21600),
				new google.maps.LatLng(-29.91700 , -71.21700),
				new google.maps.LatLng(-29.91800 , -71.21700),
				new google.maps.LatLng(-29.91800 , -71.21600)
			];
			
			poligonoCasa2 = new google.maps.Polygon({
				paths: Casa2,
				strokeColor: "#093",
				strokeOpacity: 0.8,
				strokeWeight: 2,
				fillColor: <?php if(isset($_POST['sector2']))
				{
					echo '"red",';
				}else{
					echo '"green",';		
				}	
				?>
				fillOpacity: 0.35,
				map:map
			});
			var InfoWindowCasa2 = new google.maps.InfoWindow({
				content: "<h2>Sector 2</h2><br><img width='500' src='https://maps.googleapis.com/maps/api/streetview?size=600x300&location=-29.9180475,-71.222345&heading=151.78&pitch=-0.76&key=AIzaSyCNjTa-9hZQNUXinLyGA-OBikIfucKxka8'>"
			}); 			

			var LatLngPoligono = new google.maps.LatLng(-29.91750 , -71.21650);
				
			var marker = new google.maps.Marker({
				position: LatLngPoligono,
				map: map,				
			});

			google.maps.event.addListener(poligonoCasa2, 'click', function() {
				InfoWindowCasa2.open(map,marker);
			});
			//poligono.setMap(map);
		}
	
		function Mostrar_Casa_3() {		
			var Casa3 = [
				new google.maps.LatLng(-29.91600 , -71.21600),
				new google.maps.LatLng(-29.91600 , -71.21700),
				new google.maps.LatLng(-29.91700 , -71.21700),
				new google.maps.LatLng(-29.91700 , -71.21600)
			];
			poligonoCasa3 = new google.maps.Polygon({
				paths: Casa3,
				strokeColor: "#093",
				strokeOpacity: 0.8,
				strokeWeight: 2,
				fillColor: 
				<?php if(isset($_POST['sector3']))
				{
					echo '"red",';
				}else{
					echo '"green",';		
				}	
				?>
				fillOpacity: 0.35,
				map:map
			});
			
			var InfoWindowCasa3 = new google.maps.InfoWindow({
				content: "<h2>Sector 3</h2><br><img width='500' src='https://maps.googleapis.com/maps/api/streetview?size=600x300&location=-29.9110275,-71.2250375&heading=151.78&pitch=-0.76&key=AIzaSyCNjTa-9hZQNUXinLyGA-OBikIfucKxka8'>"
			}); 			

			var LatLngPoligono = new google.maps.LatLng(-29.91650 , -71.21650);
				
			var marker = new google.maps.Marker({
				position: LatLngPoligono,
				map: map,				
			});

			google.maps.event.addListener(poligonoCasa3, 'click', function() {
				InfoWindowCasa3.open(map,marker);
			});
		}
		
		function Mostrar_Casa_4() {			
				
			var Casa4 = [
				new google.maps.LatLng(-29.91700 , -71.21500),
				new google.maps.LatLng(-29.91700 , -71.21600),
				new google.maps.LatLng(-29.91800 , -71.21600),
				new google.maps.LatLng(-29.91800 , -71.21500)
			];
  
			poligonoCasa4 = new google.maps.Polygon({
				paths: Casa4,
				strokeColor: "#C60",
				strokeOpacity: 0.8,
				strokeWeight: 2,
				fillColor: 
				<?php if(isset($_POST['sector4']))
				{
					echo '"red",';
				}else{
					echo '"green",';		
				}	
				?>
				fillOpacity: 0.35,
				map:map
			});
			var InfoWindowCasa4 = new google.maps.InfoWindow({
				content: "<h2>Sector 4</h2><br><img width='500' src='https://maps.googleapis.com/maps/api/streetview?size=600x300&location=-29.92117,-71.211015&heading=151.78&pitch=-0.76&key=AIzaSyCNjTa-9hZQNUXinLyGA-OBikIfucKxka8'>"
			}); 			

			var LatLngPoligono = new google.maps.LatLng(-29.91750 , -71.21550);
				
			var marker = new google.maps.Marker({
				position: LatLngPoligono,
				map: map,				
			});

			google.maps.event.addListener(poligonoCasa4, 'click', function() {
				InfoWindowCasa4.open(map,marker);
			});
		}
	
		
		
		
		function Paradero_AvdaMar() {
						
			var a = new google.maps.LatLng(-29.90586,-71.249535);
				
			marker_a = new google.maps.Marker({
				position: a,
				map: map,
				icon:image
			});
			markersArray.push(marker_a);
			google.maps.event.addListener(marker_a, 'click', function() {
				Linea_1av.open(map,marker_a);
			});
			
		}
	$( document ).ready(function() {    	
		initMap();
		Mostrar_Casa_1(); 
		Mostrar_Casa_2(); 
		Mostrar_Casa_3(); 
		Mostrar_Casa_4();

	});
</script>
<div class="container">
	

	<div class="col-sm-10 col-sm-offset-1" id="map_canvas" style="height:600px" ></div>
	<br>
	<div class="col-sm-10 col-sm-offset-1">
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