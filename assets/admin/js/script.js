function jam(){
      var waktu = new Date();
      var jam = waktu.getHours();
      var menit = waktu.getMinutes();
      var detik = waktu.getSeconds();
       
      if (jam < 10){ jam = "0" + jam; }
      if (menit < 10){ menit = "0" + menit; }
      if (detik < 10){ detik = "0" + detik; }
      var jam_div = document.getElementById('jam');
      jam_div.innerHTML = jam + ":" + menit + ":" + detik;
      setTimeout("jam()", 1000);
} jam();

$( document ).ready(function() {
      $('#status').on('change', function() {
            if (this.value == "Masuk") {
                  $('#tujuan').html("Dari");
            }else{
                  $('#tujuan').html("Tujuan");
            }
      });
});
