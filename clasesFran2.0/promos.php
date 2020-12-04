<!DOCTYPE html>
<meta charset="utf-8">
<html>
 <?php
    include("header.html");
  ?>
  <body style="background-color: rgba(0,0,0,.3); font-family: Lucida Calligraphy">
  <div class="container-fluid  col-12">
      <div style="width: 100%;height: 35px; background-image: url(img/fondo2.jpg); opacity: 0.85; filter: alpha(opacity=85); border-radius: 0px 0px 15px 15px;font-size: x-large; color: black;"><p style="color:white;" align="center">...Promociones del mes....</p></div>
      <!--**********termina el titulo***********-->
    <div class="container-fluid col-12">
              <!--Inicia el carousel-->
            <div class="row justify-content-center">
                <div class="col-12  col-sm-12 col-md-8 col-lg-8 col-xl-8 borde1" >
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"class="col-12">
                      <!--Indicadores -->
                          <ul class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                         </ul>
                         <div class="carousel-inner">
                         <div class="carousel-item active">
                           <img id="car1" class="d-block w-100" src="img/promos/tinto.jpg" alt="First slide">
                            <div class="carousel-caption">
                              <h4 style="background-color: rgba(0,0,0,.5); color: white;">Tintoreria</h4>
                              <p style="background-color: rgba(0,0,0,.8);"><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</b></p>
                            </div>
                         </div>

                        <div class="carousel-item">
                           <img  id="car1" class="d-block w-100" src="img/promos/edre.jpg" alt="Second slide">
                               <div class="carousel-caption">
                                  <h4 style="background-color: rgba(255,128,0,0.7);">No aceleres y te detengas</h4>
                              <p style="background-color: rgba(255,0,0,0.4);"><b>Es cierto que</b></p>
                               </div>
                        </div>
                        <div class="carousel-item">
                           <img  id="car1" class="d-block w-100" src="img/promos/lavado.jpg" alt="Third slide">
                               <div class="carousel-caption">
                                  <h4 style="background-color: rgba(255,128,0,0.7);">Trata de reemplazar el filtro del combustible</h4>
                              <p style="background-color: rgba(255,0,0,0.7);"><b>Muchos de nosotros no pensamos qué ocurre con el filtro</b></p>
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
                        
            <!--Termina el carousel-->
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
</body>
      <style type="text/css">
#car1{
  border-radius: 25px 25px 25px 25px;
}
#h5{ 
    background-color: rgba(0,0,0,.4);
    border-radius: 25px 25px 25px 25px;
}
#head {
  border-radius: 10px 10px 10px 10px;
}
</style>
   <?php
    include("footer.html");
    ?> 
</html>