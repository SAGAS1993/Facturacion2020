
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
