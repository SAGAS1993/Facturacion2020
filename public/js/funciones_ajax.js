// Insertar rol
$('#roles').click(function(e) {
  e.preventDefault();

  var nombre = $("#nom_rol").val();

  const url = 'rolStore';
  const params = {'nombre':nombre};
  
  proccessFunction(url, 'POST', params, callbackStoreRoles);

});

function callbackStoreRoles(status, response){
  if (status != 200){
    console.log(status);
    alert(response);

    return false;
  }
  console.log(response.mensaje);
  $('#alert').html('<div class="alert alert-success alert-dismissible fade show" role="alert">'+response.mensaje+                                    
                      '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                        '<span aria-hidden="true">&times;</span>'+
                      '</button>'+
                    '</div>');
}