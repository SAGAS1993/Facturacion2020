// Insertar rol
$('#roles').click(function(e) {
  e.preventDefault();

  var nombre = $("#nom_rol").val();
  var token = $("#token").val();

  $.ajax({
    url: 'rolStore',
    headers:  {'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    data: {Nombre:nombre},

    success: function(res){
      
      console.log(res.mensaje);
        $('#alert').html('<div class="alert alert-success alert-dismissible fade show" role="alert">'+res.mensaje+                                    
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                              '<span aria-hidden="true">&times;</span>'+
                            '</button>'+
                          '</div>');
    },
    error: function(error) {
      // body...
    }
  });
});