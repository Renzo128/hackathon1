const cancelSubscription = (id) => {

    $.ajax({
        type:'POST',
        url: '../php/privateSubscription.php',
        data: {'sporterID': id},
        success: function (response) {
            window.alert('Je abonnement is geannuleerd.');
        },
        error:function (response) {
            window.alert('Je abonnement is niet geannuleerd probeer het later opnieuw.');
    
        }
    })
}
