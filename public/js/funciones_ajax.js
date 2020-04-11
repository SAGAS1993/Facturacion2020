
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