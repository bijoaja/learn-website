var search = document.getElementById("search");
var data = document.getElementById("?content");

search.addEventListener("keyup", function () {
  console.log(search.value);
  // inisiasi objek ajax
  var objAjax = new XMLHttpRequest();

  // cek kesiapan ajax
  objAjax.onreadystatechange = function () {
    if ((objAjax.readyState = 4 && objAjax.status == 200)) {
      data.innerHTML = objAjax.responseText;
    }
  };

  objAjax.open("GET", "./data.php?search=" + search.value, "true");
  objAjax.send();
});
