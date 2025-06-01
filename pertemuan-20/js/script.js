$(document).ready(function () {
  // menghilangkan tombol cari
  $("#tombol-cari").hide();

  // evnet ketika keyword ditulis
  $("#keyword").keyup(function (e) {
    // munculkan icon loading
    $(".loader").show();

    // ajax menggunakan load
    // $("#container").load("ajax/film.php?keyword=" + $("#keyword").val());
    // // setTimeout untuk menghilangkan icon loading setelah 500ms
    // setTimeout(function () {
    //   $(".loader").hide();
    // }, 500);

    // ajax menggunkana $.get()
    $.get("ajax/film.php", { keyword: $("#keyword").val() }, function (data) {
      $("#container").html(data);
      $(".loader").hide();
    });
  });
});
