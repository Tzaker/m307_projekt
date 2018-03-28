$(function() {

    $('#add-form').on('submit', function() {

        var isValid = true;

        var fields = [
            {id: 'surname', message: 'Bitte gib einen Nachnamen ein.'},
            {id: 'firstname', message: 'Bitte gib einen Vornamen ein.'},
            {id: 'email', message: 'Bitte gib eine Email-Adresse ein.'},            
            {id: 'membership', message: 'Bitte wähle eine Mitgliedschaft aus.'},
            {id: 'movieid', message: 'Bitte wähle einen Film aus.'},

        ];

        // Alle vorhandenen Fehlerklassen entfernen
        $('.has-error').removeClass('error-msg');

        // Alle vorhandenen Fehlermeldungen entfernen
        $('label .error-msg').remove();

        fields.forEach(function(field) {

            var $field = $('#' + field.id);
            
            //Check if input is empty
            //.trim()
            if($field.val() === '') {
               
                    isValid = false;

                    // Eine Fehlermeldung generieren
                    var errorMessage = '<span class="error-msg">'
                                    + field.message
                                    + '</span>';

                    var $label = $('#' + field.id + 'label');
                    console.log($label);
                    $label.append( ' ' + errorMessage); // Fehlermeldung hinzufügen
                
            }

            //check for correct phone number input
            var $phonevalue = $('#phone');
            var $phone = $('#phonelabel');
            var reg = "[^\+\/\(\)\-\d\s]";

            if($phonevalue.val().match(reg)){
                isValid = false;
                console.log("invalid phone");
                // Eine Fehlermeldung generieren
                var error = '<span class="error-msg">'
                                + "Telefonnummer ungültig"
                                + '</span>';

                $phone.append( ' ' + error);
            }

        });

        return isValid;

    });

});