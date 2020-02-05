'use strict';

/*************************************************************************************************/
/* ***************************************** FONCTIONS ***************************************** */
/*************************************************************************************************/

function onClickExecute(event)
{
    let radioChoice;

    event.preventDefault();

    // Récupération de la valeur du bouton radio qui a été sélectionné.
    radioChoice = $('input[name=what]:checked').val();

    alert(radioChoice);

    //récupération des données à partir du choix de l'utilisateur 
   
    switch(radioChoice) {
        case "1":
            $.get("php/scriptImporterHTML.php", function(response) {
                 $("#target").html(response);
            });
            break;

        case "2":
            $.get("php/scriptImporterJSON.php", function(response) {
                $("#target").html(response);
            });
            break;

        case "3":
            $.get("php/scriptImporterFilms.php", function(response) {
                $("#target").html(response);
            });
            break;

        case "4":
            $.get("php/scriptImporterFilmsJSON.php",  function(response) {
                $("#target").html(response);
            });
            break;

        case "5":
            $.get("php/", function(response) {
                $("#target").html(response);
            });
            break;
            
        case "6":
            $.get("php/", function(response) {
                $("#target").html(response);
            });
            break;

        default:
            alert("ereeur aucune valeur valable n'a été choisie.");
    }
    



}