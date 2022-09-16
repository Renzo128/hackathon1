const applyForCoach = (id, sporter) => {
  // ajax post request voor het aanmelden bij een persoonlijke coach

  $.ajax({
    type: "POST",
    url: "../php/privateCoach.php",
    data: { coachID: id, sporterID: sporter },
    success: function (response) {
      window.alert("Je afspraak is aangemaakt.");
    },
    error: function (response) {
      window.alert("Je afspraak is niet aangemaakt probeer het later opnieuw.");
    },
  });
};
