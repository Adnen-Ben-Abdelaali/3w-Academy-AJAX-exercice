'use strict';

/*************************************************************************************************/
/* ***************************************** FONCTIONS ***************************************** */
/*************************************************************************************************/

function onClickExecute()
{
    var radioChoice;

    // Récupération de la valeur du bouton radio qui a été sélectionné.
    radioChoice = $('input[name=what]:checked').val();

    alert(radioChoice);
}