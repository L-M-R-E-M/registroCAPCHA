$(document).ready(function(){    
    $('#cerrarse').click(function(){        
        // window.close();
        /*Captura de datos escrito en los inputs*/        
        var borrar = "";
        /*Guardando los datos en el LocalStorage*/
        localStorage.setItem("SaveCorreo", borrar);
        localStorage.setItem("SavePass", borrar);
        localStorage.setItem("UserName", borrar);
        localStorage.setItem("UserCode", borrar);
        
        window.location="index.php";
    });   
});

/*Checar si hay una sesión activa*/
$(document).ready(function() {	
  var check = localStorage.getItem("UserName");
  var cor = localStorage.getItem("SaveCorreo");
  var pas = localStorage.getItem("SavePass");
  var one = 0;
  function checarsesion(){
  if(check == ""){
    alert("No cuenta con una sesión activa");
    window.location="index.php";
  }else{
    one = one + 1;
  }
  if(one == 1){
    $.ajax({
      url: "http://35.167.62.109/storeutags/security/login",
      type: 'POST',
      contentType: 'application/json',
      data: JSON.stringify({
          email:cor,
          password:pas,
      }),
      dataType: 'json',
      success: function(resp) {
        if(resp.error_code == "EmailAndPasswordDoesNotMatch"){
          alert("Usuario y/o contraseña incorrectos");
      }
      else{
          var nom = resp.data.customer.first_name;
          localStorage.setItem("UserName", nom);

          var code = resp.data.session_id;
          localStorage.setItem("UserCode", code);

          alert("¡¡¡Bienvenido otra vez " + nom + "!!!");
      }
      },       
  });
  }
  }
  setInterval(checarsesion, 3000);
});

/*Funcion Cargar y Mostrar datos*/
$(document).ready(function() {	
    function mostrarUsuario(){
      /*Obtener datos almacenados*/
      var nombre = localStorage.getItem("UserName");
      /*Mostrar datos almacenados*/      
      document.getElementById("nombre").innerHTML = nombre;
    }
    setInterval(mostrarUsuario, 100);
  });