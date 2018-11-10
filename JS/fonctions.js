function AfficherLesFilms(codeFilm)
{
    $.ajax
    (
            {
              type:"get",
              url:"AfficherLesFilms.php",
              data:"idCinema="+codeFilm,
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