<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }

    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lapor</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/indexStyle.css') }}">
</head>

<body>
    <div class="banner">Simple lapor !</div>
    <div class="atastextarea" text-align="center">   
        <a href="" >Buat Laporan/Komentar</a>
    </div>
    <form method="POST" action="#" accept-charset="UTF-8" data-request="complaint::onCreate" class="complaint-form" data-request-flash=""><input name="_session_key" type="hidden" >
    <div class="container-1">
        <input type="search" id="search" placeholder="Search..." />
    </div>
    <br><br><br><br><br><br><br><br>
    </form>
    
    @foreach($data as $d)  
    <hr width="70%">
    <div class="isi-list">
        <div class="judul">
            {{$d->title}} !
        </div>
        <div class="isi-laporan">
        <?php 
            $limited_string = limit_words($d->report, 50);
            echo $limited_string;
        ?>
            {{$limited_string}}
        </div> 

        <div class="atribut ">
            <a style="float: left">Dokumen : {{$d->file}}</p>
            <a href=""> Lihat Selengkapnya ></a>
            <a href=""> </a>
            <a>  Waktu : {{$d->updated_at}} &ensp; </a>
        </div>
    </div>
    @endforeach
</body>
</html>