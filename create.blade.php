<html>
<head>


    <title>

        Buat laporan 

    </title>

    <link rel="stylesheet" type="text/css" href="laporStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    


</head>

<body>

<div class="tombol-kembali">

    <a href="" >< Kembali</a>

</div>


        <div class="banner">Simple lapor !</div>

        <div class="atastextarea">Buat Laporan/Komentar</div>
    <div class="lapor">
        <form method="POST"  action="#######" onSubmit="return validasi()" id="formtambah" >


  


            <div class="style">

            
            <input type="text" name="judul"  placeholder="Masukan judul laporan anda...">  
<textarea name="isi-laporan"  cols="83" rows="10" class="form-control textarea-flex autosize" placeholder="Ketik laporan Anda..."></textarea>
<div class="hrtextarea" >
<br>
</div>
</div>
<div class="styled-select">

<select placeholder="Pilih Kategori" value="" name="aspek">
<option value="">   --Pilih Aspek Pelaporan/Komentar-- </option>
<option value="Mahasiswa">Mahasiswa</option>
<option value="Dosen">Dosen</option>
<option value="Staff">Staff</option>
<option value="Pengajaran">Pengajaran</option>
<option value="Infrastruktur">Infrastruktur</option>

</select>

</div>
<br>

<div class="upload-btn-bungkus">
    <button class="btn">Upload a file</button>
    <input type="file" name="myfile" />
  </div>

<br>


<div class="style-submit">
    
<input type="submit" id="submit"></button>

</div>
<br>
<br>


<?php
//perintah untuk menjalankan aksi ketika form disubmit disini
?>



</form>


</div>







<script type="text/javascript">
// fungsi yang dipanggil ketika form di submit
// lihat baris 5 onSubmit
function validasi()
    {

        var judul=document.forms["formtambah"]["judul"].value;
        var isi=document.forms["formtambah"]["isi-laporan"].value;
        var aspek=document.forms["formtambah"]["aspek"].value;
        
//        membuat variabel numbers bernilai angka 0 s/d 9

//        validasi nip tidak boleh kosong (required)

        if (judul==null || judul=="")
          {
          alert("Judul tidak boleh kosong !");
          return false;
          };
          
//        validasi nip harus berupa angka
//        dengan membandingkan dengan variabel number yang dibuat pada baris 21

        if (judul.length >= 100)
          {
          alert("Judul harus kurang dari 100 karakter");
          return false;
          };
//         jika ada validasi untuk inputan lain letakkan disini
//       
     

    
//       

     if ( isi==null || isi=="")
          {
          alert("Isi laporan tidak boleh kosong !");
          return false;
          };
          
//        validasi nip harus berupa angka
//        dengan membandingkan dengan variabel number yang dibuat pada baris 21

        if (isi.length >= 255)
          {
          alert("Isi laporan harus kurang dari 255 karakter");
          return false;
          };
//         jika ada validasi untuk inputan lain letakkan disini
//       
     

     if (aspek == "" || aspek == null)
          {
          alert("Aspek Harus dipilih !");
          return false;
          };
//         jika ada validasi untuk inputan lain letakkan disini
//       
     }


    

</script>




<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>