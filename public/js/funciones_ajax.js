
// Insertar rol
$('#roles').click(function(e) {
  e.preventDefault();
  var nombre = $("#nom_rol").val();
  const url = 'roles';
  const params = {'nombre':nombre};
  proccessFunction(url, 'POST', params, callbackStoreRoles);
});
function callbackStoreRoles(status, response){
  if (status != 200){
toastr.error(response.responseJSON.errors.nombre);
    return false;
  };
  toastr.success(response.mensaje);
   $("#nom_rol").val('');
  listroles();
}

// ListarRol();
$(document).ready(function() {
listroles();
});
var listroles = function(){
$.ajax({
  type:'get',
  url:('roleslist'),
  success: function(data){
    $('#list-roles').empty().html(data);
  }
});
};

