const applyForClinic = (id,sporter) =>{
    $.ajax({
        type:'POST',
        url: '../php/groupCursus.php',
        data: {'clinicID': id, 'sporterID': sporter},
        success: function (response) {
            window.alert('Je afspraak is aangemaakt.');
        },
        error:function (response) {
            window.alert('Je afspraak is niet aangemaakt probeer het later opnieuw.');

        }
    })
}