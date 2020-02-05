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
    if(radioChoice == "1") {
        //console.log("hello");
        $.get("php/scriptImporterHTML.php", function(response) {
           
            $("#target").html(response);

        });
    }else if(radioChoice == "2") {

        $.get("php/scriptImporterJSON.php", function(response) {
            $("#target").html(response);
        });

    }else if(radioChoice == "3") {

        $.get("php/scriptImporterFilms.php", function(response) {
            $("#target").html(response);
        });
    }

    



}