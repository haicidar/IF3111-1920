<html>
<head>


    <title>

        Buat laporan 

    </title>

    <link rel="stylesheet" type="text/css" href="Style-HalamanLapor.css">
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
        <form method="POST" action="#######" accept-charset="UTF-8" data-request="complaint::onCreate" class="complaint-form" data-request-flash=""><input name="_session_key" type="hidden" >


  


            <div class="style">

            
            <input type="text" name="judul"  placeholder="Masukan judul laporan anda...">  
<textarea name="isi-laporan" id="" cols="83" rows="10" class="form-control textarea-flex autosize" placeholder="Ketik laporan Anda..."></textarea>
<div class="hrtextarea" >
<br>
</div>
</div>
<div class="styled-select">

<select placeholder="Pilih Kategori" value="" >
<option value="">   --Pilih Aspek Pelaporan/Komentar-- </option>
<option value="Pelecehan Seksual">Pelecehan Seksual</option>

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

</form>


</div>












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