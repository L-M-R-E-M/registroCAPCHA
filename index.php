<!doctype html>
<html lang="en">
  <head>
    <title>login</title>  
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
            <div class="col-lg-12">
                <div class="text-right">
                <button type="button" class="btn btn-primary" id="iniciar">Iniciar Sesión</button>
                </div>
            </div>
        </div>
     </header> 
    <div style="height: 30px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5 bg-white ">
        <div class="card-header">INICIAR SESIÓN</div>
        <div class="card-body">
        
        <center>

        <form id="form1" name="form1" class="needs-validation" novalidate>
                  
        
                    
                    
                    <div class="col-md-4 mb-3">
                      <label for="ema">Correo de Usuario</label>
                      <div class="input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                        </div>
                        <input name="ema" autofocus="autofocus" type="email" class="form-control" id="ema" placeholder="" aria-describedby="inputGroupPrepend" required>
                        <!-- <div class="valid-feedback">¡Ok válido!</div> -->
                      <div class="invalid-feedback">Complete el campo.</div> 
                      </div>
                    </div>
                  
                    
                  
                      <div class="col-md-4 mb-3">
                      <label for="pass1">Contraseña</label>
                      <div class="input-group">
                      <input name="pass1" type="password" class="form-control" id="pass1" placeholder="" required>
                      <div class="input-group-append">
                        <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                      </div>
                      <!-- <div class="valid-feedback">¡Ok válido!</div> -->
                      <div class="invalid-feedback">Complete el campo.</div>
                    </div>
                    </div>

                    <div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Recuérdame</label>
									</div>
                
                  <button class="btn btn-primary" id="boton" name="boton" type="submit">Iniciar Sesión</button>
                  
               
                </form>
                
                <br><br>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <a href="registro.html" id="register-form-link">Regístrate ahora</a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="text-center">
                                <a href="correo.html" tabindex="5" class="forgot-password">¿Has olvidado tu contraseña?</a>
                            </div>
                        </div>
                    </div>
                </div>

                </center>

                
        </div>   
    </div>
            </div>       
        </div>                  
    </div>

    <script src="./jquery/index.js"></script> 	  	

  </body>
</html>