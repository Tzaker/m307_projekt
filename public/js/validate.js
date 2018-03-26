$(function() {

    $('#add-form').on('submit', function() {

        var isValid = true;

        // Bei einfachen Validierungen kann z. B. auch ein
        // Array für die Felder und Fehlermeldungen
        // verwendet werden. Dieses kann dann in einer forEach
        // Schleife verarbeitet werden.
        var fields = [
            {id: 'surname', message: 'Bitte gib einen Nachnamen ein.'},
            {id: 'firstname', message: 'Bitte gib einen Vornamen ein.'},
            {id: 'email', message: 'Bitte gib eine gültige Email-Adresse ein.'},
            {id: 'phone', message: 'Bitte gib eine gültige Telefonnummer ein.'},
            {id: 'membership', message: 'Bitte wähle eine Mitgliedschaft aus.'},
            {id: 'title', message: 'Bitte wähle einen Film aus.'}
        ];

        // Alle vorhandenen Fehlerklassen entfernen
        $('.has-error').removeClass('error-msg');

        // Alle vorhandenen Fehlermeldungen entfernen
        $('label .error-msg').remove();

        fields.forEach(function(field) {

            var $field = $('#' + field.id);
            console.log($field);
            //Check if input is empty
            if($field.val() === '' || $field.val() == 'Auswählen') {
               
                    isValid = false;

                    // Eine Fehlermeldung generieren
                    var errorMessage = '<span class="error-msg">'
                                    + field.message
                                    + '</span>';

                    // Die .has-error Klasse kann in CSS z. B.
                    // rot formatiert werden, damit die fehlerhaften
                    // Felder direkt ersichtlich sind.
                    $field
                        .parent()
                        .addClass('has-error'); // Fehlerklasse hinzufügen

                    var $label = $('#' + field.id + 'label');
                    console.log($label);
                    $label.append( ' ' + errorMessage); // Fehlermeldung hinzufügen
                
            }

        });

        return isValid;

    });

});