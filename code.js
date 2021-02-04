// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      var net = 0;
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
            net = 1;
            //alert("Complete todos los apartados");
          }
        //   if(form.checkValidity() === true){
        //     $('form').on('submit', function(e){
        //       e.preventDefault();
        //       e.stopImmediatePropagation();
              
        //       $.ajax({
        //           url: "http://35.167.62.109/storeutags/security/create_account",
        //           type: 'POST',
        //           contentType: 'application/json',
        //           data: JSON.stringify({
        //               first_name: $('#nombre').val(),
        //               middle_name:$('#apellido').val(),
        //               last_name:$('#apellido2').val(),
        //               phone_number:$('#telefono').val(),
        //               address: {
        //                   city:$('#ciudad').val(),
        //                   state:$('#estado').val(),
        //               },
        //               email:$('#ema').val(),
        //               password:$('#pass1').val(),
        //               password_confirmation:$('#pass2').val()
        //           }),
        //           dataType: 'json',
        //           success: function(resp) {
        //               if(resp.error_code == "DuplicatedAccount"){
        //                   alert("Este correo esta ya esta en uso");
        //               }
        //               else{
        //                   alert("Usuario guardado");
        //                   //$("form")[0].reset();
        //                   window.location="login.html";
        //               }
        //           },       
        //       });
              
              
        //       });
        //   }
        form.classList.add('was-validated');
  
        }, false);
      });
      
    }, false);
  })();
  

function mostrarPassword(){
    var cambio = document.getElementById("code");
    if(cambio.type == "password"){
        cambio.type = "text";
        $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    }else{
        cambio.type = "password";
        $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
} 

$(document).ready(function () {
//CheckBox mostrar contraseña
$('#ShowPassword').click(function () {
    $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
});
});

$(document).ready(function(){
  //pruebas no hacer caso
  function ocultar(){
    $('#form2').hide(); //oculto mediante id
  }
  function mostrar(){
    $('#form2').show(); //muestro mediante id
  }
  setInterval(ocultar, 3000);
  setInterval(mostrar, 6000);

  //$("#mostrar").on( "click", function() {
    // $('#target').show(); //muestro mediante id
    // $('.target').show(); //muestro mediante clase
   //});
  //$("#ocultar").on( "click", function() {
    // $('#target').hide(); //oculto mediante id
    // $('.target').hide(); //muestro mediante clase
  //});
});