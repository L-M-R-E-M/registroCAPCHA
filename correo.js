// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          if(form.checkValidity() === true){
            llamarAjax();
            
          }
          function llamarAjax(){
            //Aquí declaras el objeto que pasarás como parámetro
                    event.preventDefault();
                    event.stopImmediatePropagation();
                  
                  $.ajax({
                      url: "http://35.167.62.109/storeutags/security/request_recovery_code",
                      type: 'POST',
                      contentType: 'application/json',
                      data: JSON.stringify({
                          email:$('#ema').val(),
                      }),
                      dataType: 'json',
                      success: function(resp) {
                          if(resp.error_code == "AccountDoesNotExist"){
                              alert("Este correo no existe");
                          }
                          else{
                              alert("Codigo enviado con éxito");
                              //$("form")[0].reset();
                              window.location="code.html";
                          }
                      },       
                  });
          }
        form.classList.add('was-validated');
  
        }, false);
      });
      
    }, false);
  })();

  