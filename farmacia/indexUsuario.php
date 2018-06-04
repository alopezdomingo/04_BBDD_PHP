	<!DOCTYPE html>
<html lang="es">
<head>
	<title>Farmacia</title>
	<?php include("cnds.php"); ?>
  <?php
    session_start();
    if(!isset($_SESSION['nombre']))
    {
      header("location:patucasa.php?mensaje=1");
    }
    else
    {}
  ?>
</head>
<body>
		<?php include("menuUsuario.php"); ?>
		<div class="container-fluid">
			<div class="row">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					  </ol>
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img class="d-block w-100" src="img/slider1.jpg" alt="First slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="img/slider2.jpg" alt="Second slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="img/slider3.jpg" alt="Third slide">
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
				</div>
			</div>			
		</div>
		<section>
      <div class="container-fluid">
      	<br><center>
        <div style="margin-top: 30px" class="row">
          <div class="col-lg-4">
              <i class="fas fa-briefcase-medical fa-3x"></i>
              <h3 style="margin-top: 30px">Título</h3>
              <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ratione, dolorem, adipisci blanditiis deleniti.</p>
          </div>

          <div class="col-lg-4">
              <i class="fas fa-shipping-fast fa-3x"></i>
              <h3 style="margin-top: 30px">Título</h3>
              <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ratione, dolorem, adipisci blanditiis deleniti.</p>
          </div>

          <div class="col-lg-4">
              <i class="fas fa-user-md fa-3x"></i>
              <h3 style="margin-top: 30px">Título</h3>
              <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ratione, dolorem, adipisci blanditiis deleniti.</p>
          </div>       
        </div>
        </center>
      </div>
    </section>
    <hr class="featurette-divider">
    <section>
    	<div class="container marketing">
    	<div class="row featurette">
          <div class="col-md-7 mtop">
            <h2 class="featurette-heading">Farmacia. <span class="text-muted">mejores productos online.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="img/findex.jpg">
          </div>
      	</div>
        </div>
       
    </section>
 	<hr class="featurette-divider">
    <div class="container-fluid end"><center><h2>Contacto</h2><p><br><br><br><br><br><br><br><br></p></center></div>
	<?php include("footer.php"); ?>
</body>
</html>