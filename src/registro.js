// $('form').on('submit', function(e){
// e.preventDefault();
// e.stopImmediatePropagation();

// $.ajax({
//     url: "http://35.167.62.109/storeutags/security/create_account",
//     type: 'POST',
//     contentType: 'application/json',
//     data: JSON.stringify({
//         first_name: $('#nombre').val(),
//         middle_name:$('#apellido').val(),
//         last_name:$('#apellido2').val(),
//         phone_number:$('#telefono').val(),
//         address: {
//             city:$('#ciudad').val(),
//             state:$('#estado').val(),
//         },
//         email:$('#ema').val(),
//         password:$('#pass1').val(),
//         password_confirmation:$('#pass2').val()
//     }),
//     dataType: 'json',
//     success: function(resp) {
//         if(resp.error_code == "DuplicatedAccount"){
//             alert("Este correo esta ya esta en uso");
//         }
//         else{
//             alert("Usuario guardado");
//             $("form")[0].reset();
//         }
//     },       
// });


// });