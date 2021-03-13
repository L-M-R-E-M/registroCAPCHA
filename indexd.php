<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />      
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,500' rel='stylesheet' type='text/css'>
	  <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./jquery/jquery-3.3.1.min.js"></script>
    <script src="./popper/popper.min.js"></script>
    <script src="./bootstrap4/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  </head>
  <body>
     <header style="height: 70px">
        <div class="card-header">

            <!-- https://fontawesome.com/v4.7.0/examples/ -->
            
              <div class="form-row justify-content-end">
                <form id="form1" name="form1" class="needs-validation" novalidate></form>
                <div class="col-md-4 mb-3">
                  <div class="input-group">
                    <input name="search" autofocus="autofocus" type="text" class="form-control" id="search" placeholder="Buscar producto" required>
                    <div class="input-group-append">
                      <button id="loading" class="btn btn-primary" type="button" onclick="searchByText()"> <i class="fa fa-spinner fa-pulse fa-1x fa-fw icon"></i>
                        <span class="sr-only">Loading...</span> </button>
                      <button class="btn btn-primary" id="boton" name="boton" type="button" onclick="searchByText()">Buscar</button>
                    </div>
                  </div>   
                </div>
              </form>
                <div class="col-md-4 mb-3">
                  <div class="text-right">
                  <button type="button" class="btn btn-primary" id="cerrarse">INICIAR SESIÓN</button>
                  </div>
              </div>
              </div>
              
            <br>

            <div class="justify-content-start">
              <!-- <div class="col-auto"> -->
                <!-- Contenido genereado desde la respuesta del servidor. -->
                <div class="row" id="enlistarCategorias">
                </div>
                 <!-- <label class="form-check-label" for="invalidCheck">Categorias</label>
            </div><br>
              <div class="col-auto">
                  <div class="form-check">
                    <input class="form-check-input" name="invalidCheck" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">Módulo</label>
                  </div>
              </div>
              <div class="col-auto">
                  <div class="form-check">
                    <input class="form-check-input" name="invalidCheck" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">Paquete</label>
                  </div>
            </div>
            <div class="col-auto">
              <div class="form-check">
                <input class="form-check-input" name="invalidCheck" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">Plan</label>
              </div>
            </div>
            <div class="col-auto">
              <div class="form-check">
                <input class="form-check-input" name="invalidCheck" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">Servicio</label>
              </div>
            </div> -->
            <!-- </div> -->

        </div>
     </header> 
    <div style="height: 60px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5 bg-white ">
            <div class="text-right">
            <div class="card-header">Hola, <label type="text" id="nombre"></label></div>
            </div>
        <div class="card-body">

        <!-- Ar -->
        <!-- Contenido genereado desde la respuesta de la búsqueda.r -->
        <div class="col-8" id="divError"></div>
        <div class="col-8" id="divConteo"></div>
        <div class="col-8" id="divItems">    
        </div>
        
        </div>   
    </div>
            </div>       
        </div>                  
    </div>


    <div id="template_conteo" style="display: none;">
      
      
        
                      <!-- <div>
                        <h1>ITEM_CONTEO_PRODUCTOS, productos encontrados</h1>
                      </div>
                <hr class="mb-4">   -->
   
    </div>



    <div id="ningunaBusqueda" style="display: none;">
          
                  <!-- <div class="col-md-4 col-lg-3 col-xl-3">
                    <a href="#!">                             
                      <img class="img-fluid w-100" src="https://thumbs.dreamstime.com/b/lupa-trastornada-s%C3%ADmbolo-no-encontrado-lindo-y-s-fracasado-122205900.jpg"> 
                    </a>
                  </div> -->
    </div>



    <div id="template_item" style="display: none;">
      <!--
      
        <div class="row">

            <div class="col">
              <div class="card-body">
                <div class="row mb-4">
                  <div class="col-md-4 col-lg-3 col-xl-3">
                    <a href="login.html">                             
                      <img class="img-fluid w-100" src="ITEM_SMALL_IMAGE"> 
                    </a>
                  </div>
                  <div class="col-md-5 col-lg-9 col-xl-9">
                    <div class="d-flex justify-content-between">
                      <div>
                        <br/>
                        <h5>ITEM_SHORT_DESCRIPTION</h5>                                                       
                        <p class="text-muted text-uppercase small">ITEM_LONG_DESCRIPTION</p>
                      </div>
                      <div>
                        <br/>
                        <p><span><strong>$ITEM_PRICE</strong></span></p>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="mb-4">  
              </div>
          </div>

      </div> -->
    </div>

   
    <script src="./src/indexd.js"></script> 	 
  </body>
</html>