//=====================================bible.tpl================================================
//==============================================================================================
var URLroating = document.location.pathname.split('/');
var URImain = URLroating[1];
if(URImain=='bible')
{
    $('.testament').change(function(e)
    {
        var select_kn = $(this).val();
        $('#title_a_b').show();
        var query = "/api_kernel/get_about.php?name="+select_kn;
        $('#history_period').html('Исторический период - ');
        $('#place_event').html('Место событий - ');
        $('#persons').html('Персонаж Библии - ');
        $('#title_about_book').empty();
        $('#start_chapter').empty();
        $.ajax({
            dataType: 'json',
            url: query,
            success: function(jsondata)
            {
                // console.log(jsondata);
                $('#history_period').append(jsondata.year);
                $('#place_event').append(jsondata.mesto);
                $('#persons').append(jsondata.name);
                for(var i=1;i<=jsondata.chapters;i++){$('#start_chapter').append("<a href='/book/"+jsondata.kn+i+"/"+jsondata.chapters+"'>"+i+"</a> ");}
            }
        })
        $('#title_about_book').html(select_kn);
    })
}
//=========================================================================================================
//=====================================book.tpl============================================================
//=========================================================================================================
var URLroating = document.location.pathname.split('/');
var URImain = URLroating[1];
var URIkn = URLroating[2];
if(URLroating!=undefined) var URIverse = URLroating[3]; else var URIverse=0;
if(URImain=='book')
{
/*************************************************************************************************** */
load_stih = 'api_kernel/get_stih.php?stih='+URIkn+'&verse='+URIverse;
$.ajax({
    url: 'test.php',
    success: function(jsondata)
    {
        console.log(jsondata);
        //$('#history_period').append(jsondata.year);
        //$('#place_event').append(jsondata.mesto);
        //$('#persons').append(jsondata.name);
        //for(var i=1;i<=jsondata.chapters;i++){$('#start_chapter').append("<a href='/book/"+jsondata.kn+i+"/"+jsondata.chapters+"'>"+i+"</a> ");}
    }
})
/*************************************************************************************************** */
    var uri_page = document.location.pathname;
    var uri_book_array = uri_page.split('/');
    var uri_kn = uri_book_array[2];
    var only_kn_array = uri_kn.match(/[0-9]?[a-z]+/);
    var only_kn = only_kn_array[0];
    var uri_chapters = uri_book_array[3];
    for(var i=1;i<=uri_chapters;i++)
    {
        $("#select_chapter").append( $('<option value="'+only_kn+i+'">Глава '+i+'</option>'));
    }
/****************************************************************************************************** */
}