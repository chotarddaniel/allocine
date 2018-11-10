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
                  $('#divActeurs').empty();
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

function AfficherLesActeurs(codeActeur)
{
    $.ajax
    (
            {
              type:"get",
              url:"AfficherLesActeurs.php",
              data:"idFilm="+codeActeur,
              success: function(data)
              {
                  
                  $('#divActeurs').empty();
                  $('#divActeurs').append(data);
              },
              error:function()
              {
                  alert("Erreur pour récupérer les formations");
              }
            }
    );
}