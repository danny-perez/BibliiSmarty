$('.testament').change(function(e)
{
    var select_kn = $(this).val();
    $('#title_a_b').show();
    var query = "api_kernel/get_about.php?name="+select_kn;
    $('#history_period').html('Исторический период - ');
    $('#place_event').html('Место событий - ');
    $('#persons').html('Персонаж Библии - ');
    $('#title_about_book').empty();
    $('#start_chapter').empty();
    $.ajax({
        dataType: 'json',
        url: query,
        success: function(jsondata){
            // console.log(jsondata);
            $('#history_period').append(jsondata.year);
            $('#place_event').append(jsondata.mesto);
            $('#persons').append(jsondata.name);
            for(var i=1;i<=jsondata.chapters;i++){$('#start_chapter').append("<a href='/bible/"+jsondata.kn+i+"'>"+i+"</a> ");}
        }
      })
    $('#title_about_book').html(select_kn);
})