$("input").on("keyup", function() {
    $("#cari #filter").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf($("input").val().toLowerCase()) > -1);
    })
  })