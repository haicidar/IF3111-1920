<html>
<head>

<?php
function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}

?>
    <title>

        Laporan geh !

    </title>

    <link rel="stylesheet" type="text/css" href="{!! asset('css/Style-HalamanUtama.css') !!}">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<div id="navbar">

  <div class="navbar-celah"> 


  </div>
  
        <a href="/Halaman Lapor">LAPORAN</a>
        <a class="active" href="/">BERANDA</a>
        
      </div>
<body>

        <div class="banner">Simple lapor !</div>

        <div class="atastextarea" text-align="center">
            
        <a href="" >Buat Laporan/Komentar</a>

            </div>
    
        <form method="POST" action="#######" accept-charset="UTF-8" data-request="complaint::onCreate" class="complaint-form" data-request-flash=""><input name="_session_key" type="hidden" >


   <div class="container-1">
      
      <input type="search" id="search" placeholder="Search..." />



</div>

<br>
<br>
<br><br><br><br><br><br>

</form>




        @foreach($isi_laporan as $data)
            

<hr width="70%">

<div class="isi-list">

<div class="judul">
 
{{$data->Judul}} !

</div>

<div class=" isi-laporan">

<?php 
$limited_string = limit_words($data->isi, 50);
echo $limited_string;

?>
{{$limited_string}}
</div> 

<div class="atribut ">
<a style="float: left">Dokumen : {{$data->dokumen}}</p>

<a href=""> Lihat Selengkapnya ></a>
<a href=""> </a>

<a ">  Waktu : {{$data->waktu}} &ensp; </a>

</div>

</div>


@endforeach



































</body>
</html>