<!DOCTYPE html>
<html>

<!--head-->
<?php include 'head.php';?>
<!--Fin head-->
<body>
<!--Menu-->
 <?php include 'nav.php';?>
<!--Fin Menu-->

<div class="container">
 <!-- Caja producto-->
       <div class="product-info">
		<div class="row">
		<div class="row">
   <!--producto imagen-->
    <div class="col-md-4">
  
  <div class="image">   
  
      <img src="../img/-text.png" title="title" alt="Muestra" id="image">
	  </img> 
	  </center>
	  </div>
 <div class="image-additional">
        <a href="#" title="title" class="cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: '../img/-text.png' ">
        <img src="../img/-text.png" width="98" title="Cochecito Muestra" alt="Cochecito Muestra"></a>  
                <a href="#" title="title" class="cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: 'http://321cart.com/demo/sellya/image/cache/data/emmaljunga_2-308x308.jpg' ">
        <img src="../img/-text.png" width="98" title="Cochecito Muestra" alt="Cochecito Muestra"></a>
                <a href="#" title="title" class="cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: 'http://321cart.com/demo/sellya/image/cache/data/emmaljunga_3-308x308.jpg' ">
        <img src="../img/-text.png" width="98" title="Cochecito Muestra" alt="Cochecito Muestra"></a>
              </div>
			  
  </div>
  <!-- Fin producto imagen-->
  
  <!--producto descripción -->
    <div class="col-md-5">
  <div class="buy">
  <!--Nombre del producto  -->
      <header class="product-name">
      <h1>Nombre del producto</h1>
      </header>
  <!--Fin Nombre del producto  -->
  <!--Precio producto  -->
  
            <div class="price">
			Precio <br>
                <span class="price-tax">$1,099.90</span><br>
            </div>
  <!--Fin Precio producto  -->
			
       <!--Cantida de cometarios  -->
       <div class="review">
        <div>
        <a onclick="$('a[href=\'#tab-review\']').trigger('click');">2 comentarios </a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a onclick="$('a[href=\'#tab-review\']').trigger('click');">Escribir una comentarios</a></div>
      </div>
	  <!--Fin Cantida de cometarios  -->
	  
	   <!--resume del producto  -->
	  
       <!--resume del producto  -->
        <div class="description">
        <span><b>Disponibilidad:</b></span> <span class="stock">en Stock</span><br>
                <span><b>Marca:</b></span> <a href="#">Brand Name</a><br>
                <span><b>Código de producto:</b></span> XYZ.321<br>
        <!-- <span>Product viewed:</span> 9264 -->
        </div> 
		<!--Fin resume del producto  -->

		<!--
        <div class="options">
        <h4>Available Options</h4>
        
        <div id="option-284" class="option">
		<div class="row">
          <div class="col-md-4">          <span class="required">*</span>
                    <b>Select:</b>
		  </div>
          <div class="col-md-4"><select name="option[284]">
            <option value=""> --- Please Select --- </option>
                        <option value="176">Red                        </option>
                        <option value="177">Blue                        </option>
                        <option value="178">Green                        </option>
                      </select>
		 </div>
		 </div>
        </div>
        </br>
		
        <div id="option-285" class="option">
		<div class="row">
		<div class="col-md-4"> 
          <div class="option-l">          <span class="required">*</span>
                    <b>Radio:</b>
		  </div>
		</div> 
		
		<div class="col-md-4"> 
          <div class="option-r">          <input type="radio" name="option[285]" value="179" id="option-value-179">
          <label for="option-value-179">Small                      </label>
          <br>
                    <input type="radio" name="option[285]" value="180" id="option-value-180">
          <label for="option-value-180">Medium                      </label>
          <br>
                    <input type="radio" name="option[285]" value="181" id="option-value-181">
          <label for="option-value-181">Large                      </label>
          <br>
          </div>
		  </div>
		   </div>
        </div>
        
                                                                                      </div>-->
		<!--Informacion del producto  -->																			  
	    <div class="information">
		<h4><b>Descripción</b></h4>
        <p style="text-align: justify;" >
		Cuando queramos aplicar un estilo por ejemplo texto justificado html o centrado o a la izquierda o a la derecha 
		el texto a todo el documento o cuerpo del mensaje, debemos hacer lo siguiente:
		</p>
		<br>
        </div> 
		<!-- Fin Informacion del producto  -->
		
      </div>
 
  </div>
   <!-- Fin  producto descripción -->
    
	<!--producto seleccion -->
  <div class="col-md-3">
  <!--Cantidad a obtener -->
 <div class="cart">
        <div class="product-amount">Cantidad:             
          <input type="button" class="dec" value=" "/>
          <input type="text" name="quantity" size="2" class="i-d-quantity input-mini" value="1"/>
          <input type="button" class="inc" value=" "/>
		  <br>
        </div>
  <!--Fin Cantidad a obtener -->
	<br>
		<!--Añadir a la cesta-->
		<div class="product-add-basket"> 
		<br>
		<input type="button" value="Añadir a la cesta" id="button-cart" class="button-exclusive"/> 
		</div>
		<!--FinAñadir a la cesta-->
		<br>
		<!--favorito-->
		<div class="product-favorito">
		<br>
		<input type="button" value="Añadir ala lista de deseos" id="button-cart" class="button-exclusive"/>
		</div>
	    <!--Fin favorito-->
		<br>
		<!--Etiquetas-->
		<div class="product-tags"><div style="margin-right:3px"><h5><font><font class="">Etiquetas:</font></font></h5></div><br><br>
            <div><a href="http://321cart.com/demo/sellya/index.php?route=product/search&amp;tag=lorem"><font><font>lorem</font></font></a></div>
                <div><a href="http://321cart.com/demo/sellya/index.php?route=product/search&amp;tag=ipsum"><font><font>ipsum</font></font></a></div>
                <div><a href="http://321cart.com/demo/sellya/index.php?route=product/search&amp;tag=dolor"><font><font>dolor</font></font></a></div>
                <div><a href="http://321cart.com/demo/sellya/index.php?route=product/search&amp;tag=sit"><font><font>sentar</font></font></a></div>
                <div><a href="http://321cart.com/demo/sellya/index.php?route=product/search&amp;tag=amet"><font><font>amet</font></font></a></div>
          </div>
		<!--Fin Etiquetas-->
</div>
  </div>
 <!--Fin producto seleccion -->
  </div>
</div>
<br>
 </div>
 <!-- Fin Caja producto-->
 <!--Caja cometarios-->
 <div class="Box-comment">
 <div id="tab-review" class="tab-content" style="display: block;">
    <article id="review">
	
<div class="content">
<div class="row">
 <div class="col-md-2">
<div class="reviews-left">
<b>Anónimo</b>
<span>(25/06/2015)</span>
</div>
</div>
 <div class="col-md-10">
<div class="reviews-right">
<div class="review-arrow hidden-phone"></div>
Duis eget tortor tortor. Mauris ornare lorem at sapien placerat non sollicitudin libero posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
</div>
</div>
</div>
</div>

<div class="content">
<div class="row">
 <div class="col-md-2">
<div class="reviews-left">
<b>Anónimo</b>
<span>(25/06/2015)</span>
</div>
</div>
 <div class="col-md-10">
<div class="reviews-right">
<div class="review-arrow hidden-phone"></div>
Duis eget tortor tortor. Mauris ornare lorem at sapien placerat non sollicitudin libero posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
</div>
</div>
</div>
</div>
<br>
<div class="Write-comment">
 <h2 id="review-title">Escribe un comentario</h2>
    <b>Su nombre:</b><br>
    <input type="text" name="name" value="">
    <br>
    <br>
    <b>Tu Comentario:</b>
    <textarea name="text" cols="40" rows="8" style="width: 98%;"></textarea>
    <span style="font-size: 11px;"><span style="color: #FF0000;">Nota:</span> No se permite codigo HTML!</span><br>
    <br>
    <b>Tu calificacion para el producto:</b> &nbsp;&nbsp;&nbsp;<span>Malo</span>&nbsp;
    <input type="radio" name="rating" value="1">
    &nbsp;
    <input type="radio" name="rating" value="2">
    &nbsp;
    <input type="radio" name="rating" value="3">
    &nbsp;
    <input type="radio" name="rating" value="4">
    &nbsp;
    <input type="radio" name="rating" value="5">
    &nbsp; <span>Bueno</span><br>
 
    <br>
	<div class="col-md-7">
            <button type="submit" value="Submit" class="btn btn-warning pull-right">Enviar</button>
        </div>
    
	


</article>

   
	
  </div>
 </div>
 <!--Fin Caja cometarios -->
 
 
</div>
  <!--<div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
</div>
<div class="row">
  <div class="col-md-8">.col-md-8</div>
  <div class="col-md-4">.col-md-4</div>
</div>
<div class="row">
  <div class="col-md-6">.col-md-6</div>
  <div class="col-md-6">.col-md-6</div>
</div>
-->
 <!--Pie de pagina -->
<?php include 'footer.php';?>
<!--Fin Pie de pagina -->

</div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>