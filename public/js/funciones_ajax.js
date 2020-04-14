
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
}
//listar rol

//iniciacion de tabls de roles
  $(function () {
     $("#tabla-roles").DataTable({
      "responsive": true,
      "autoWidth": false,
    });

  });
