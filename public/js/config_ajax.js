
$.ajaxSetup({
headers: {'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')}
});

function proccessFunction(url, method, params, callback){
  $.ajax({
    url: url,
    method: method,
    data: params,

    success: function(res){
      callback(200, res);
    },
    error: function(error) {
      callback(500, error);
    }
  });
}



//propiedades de las aletar
toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}