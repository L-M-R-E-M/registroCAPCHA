<!doctype html>
<html lang="en">
  <head>
    <title>Registro</title>  
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

  </head>
  <body>
     <header style="height: 70px">
     </header> 
    <div style="height: 30px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5 bg-white ">
        <div class="card-header">INICIAR SESIÓN</div>
        <div class="card-body">
        
        <form id="form1" name="form1" class="needs-validation" novalidate>
                  
                  

                    <div class="col-md-4 mb-3">
                      <label for="ciudad">Correo de Usuario</label>
                      <input name="ciudad" type="text" class="form-control" id="ciudad" placeholder="" required>
                      <!-- <div class="valid-feedback">¡Ok válido!</div> -->
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>
                    
                    
                      <div class="col-md-4 mb-3">
                      <label for="pass1">Password</label>
                      <div class="input-group">
                      <input name="pass1" autofocus="autofocus" min="8" max="10" type="password" class="form-control" id="pass1" placeholder="" required>
                      <div class="input-group-append">
                        <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                      </div>
                    </div>
                      <span id="passstrength"></span>
                      <!-- <div class="valid-feedback">¡Ok válido!</div> -->
                      <div class="invalid-feedback">Complete el campo.</div>  
                    </div>
                
                  <button class="btn btn-primary" id="boton" name="boton" type="submit">Enviar</button>

               
                </form>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <a href="registro.html" id="register-form-link">Regístrate ahora</a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="text-center">
                                <a href="#" tabindex="5" class="forgot-password">¿Has olvidado tu contraseña?</a>
                            </div>
                        </div>
                    </div>
                </div>

                
        </div>   
    </div>
            </div>       
        </div>                  
    </div>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="index.js"></script> 	  	
    <script src="./src/registro.js"></script>
  </body>
</html>