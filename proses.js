 function search2(){
  $("#loading2").show(); // Tampilkan loadingnya
  
  $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "carikasir2.php", // Isi dengan url/path file php yang dituju
        data: {qcari2 : $("#qcari2").val()}, // data yang akan dikirim ke file proses
        dataType: "json",
        beforeSend: function(e) {
            if(e && e.overrideMimeType) {
                e.overrideMimeType("application/json;charset=UTF-8");
            }
    },
    success: function(response){ // Ketika proses pengiriman berhasil
            $("#loading2").hide(); // Sembunyikan loadingnya
            
            if(response.status == "success"){ // Jika isi dari array status adalah success
        $("#nama2").val(response.nama2); // set textbox dengan id nama
        $("#satuan").val(response.satuan); // set textbox dengan id nama
        $("#harga").val(response.harga); // set textbox dengan id nama
      }else{ // Jika isi dari array status adalah failed
        alert("Data Tidak Ditemukan");
      }
    },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
      alert(xhr.responseText);
        }
    });
}
$(document).ready(function(){
  $("#loading").hide(); // Sembunyikan loadingnya
  
    $("#btn-search2").click(function(){ // Ketika user mengklik tombol Cari
        search2(); // Panggil function search
    });
    
    $("#qcari").keyup(function(){ // Ketika user menekan tombol di keyboard
    if(event.keyCode == 13){ // Jika user menekan tombol ENTER
      search2(); // Panggil function search
    }
  });
});