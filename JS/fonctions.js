function AfficherLesFilms()
{
    $.ajax
    (
            {
              type:"get",
              url:"AfficherLesFilms.php",
              data:"idCinema="+$('#Test').text(),
              success: function(data)
              {
                  $('#divFilms').empty();
                  $('#divFilms').append(data);
              },
              error:function()
              {
                  alert("Erreur pour récupérer les formations");
              }
            }
    );
}