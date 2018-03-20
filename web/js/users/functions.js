$('.testament').change(function(e)
{
    var select_kn = $(this).val();
    var query = "api_kernel/get_about.php?name="+select_kn;
    $.ajax({
        dataType: 'json',
        url: query,
        success: function(jsondata){
            console.log(jsondata);    
        }
      })
})