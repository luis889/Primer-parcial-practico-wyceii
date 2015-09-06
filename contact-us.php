 <!DOCTYPE html>
<html lang="es">

<!--head-->
<?php include 'pages/head.php';?>
<!--Fin head-->
<body>
<!--Menu-->
 <?php include 'pages/nav.php';?>
<!--Fin Menu-->

<div class="container">
<div  class="contact-us">
  <div class="row contact-us">
      <div id="map-outer" class="col-md-12">
          <div id="address" class="col-md-4">
            <h2>Nuestra ubicación</h2>
            <address>
            <strong>Peggy Guggenheim Collection</strong><br>
                Dorsoduro, 701-704<br>
                30123<br>
                Venezia<br>
                Italia<br>
                <abbr>P:</abbr> +39 041 240 5411
           </address>
          </div>
        <div id="map-container" class="col-md-8">
		
		
		
		</div>
      </div><!-- /map-outer -->
  </div> <!-- /row -->
  </div>
 
 <div  class="contact-us">
  <div class="row">
  <form class="form-horizontal" name="commentform">
    <div class="form-group">
        <div class="col-md-4">
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Nombre"/>
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellido"/>
        </div>
        <div class="col-md-4 input-group">
        <span class="input-group-addon">@</span>
            <input type="email" class="form-control" id="email" name="email" placeholder="Dirección de correo electrónico"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <textarea rows="6" class="form-control" id="comments" name="comments" placeholder="Su pregunta o comentario aquí"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            <button type="submit" value="Submit" class="btn btn-warning pull-right">Enviar</button>
        </div>
    </div>
</form>
</div><!-- /row -->
</div>
</div><!-- /container -->


 <!--Pie de pagina -->
<?php include 'pages/footer.php';?>
<!--Fin Pie de pagina -->

</div>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script>	
 
      function init_map() {
		var var_location = new google.maps.LatLng(45.430817,12.331516);
 
        var var_mapoptions = {
          center: var_location,
          zoom: 14
        };
 
		var var_marker = new google.maps.Marker({
			position: var_location,
			map: var_map,
			title:"Venice"});
 
        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);
 
		var_marker.setMap(var_map);	
 
      }
 
      google.maps.event.addDomListener(window, 'load', init_map);
 
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>