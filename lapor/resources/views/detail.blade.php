<html>
<head>

<?php
function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}

?>
    <title>

        Detail Laporan

    </title>

    <link rel="stylesheet" type="text/css" href="Style-HalamanDetail.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>



<body>

        <div class="banner">Simple lapor !</div>

        <div class="atastextarea" text-align="center">
            
        <a href="" >Buat Laporan/Komentar</a>

            </div>
    
        <div class="tandahalaman" >
          DETAIL LAPORAN
</div>

       

  

<br>







        @foreach($isi_laporan as $data)
            

<hr width="70%">

<div class="detail-list">

<div class="judul">
 
<!-- {{$data->Judul}} ! -->

Ini Judulnya Bos !

</div>

<div class="atribut ">
 
<a class="tombol"  href=""> Hapus </a>
<a class="tombol"  href=""> Edit </a>

</div>
<br><br>

 
<div class=" isi-laporan">

<!-- <?php 
// $limited_string = limit_words($data->isi, 50);
// echo $limited_string;

?>
    {{$limited_string}}
     -->

     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum blanditiis ex ad placeat quae distinctio error! Quidem aut, esse, repellendus dicta eius atque exercitationem, assumenda commodi quaerat nesciunt neque saepe.
     Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda modi odit minima repellendus tempora mollitia eos ratione totam beatae vitae ducimus impedit obcaecati consequuntur nobis incidunt, similique ad natus sapiente!
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus debitis provident eveniet fugit, tempora voluptas repellat animi ad ea incidunt quam perferendis quo dolores quod corrupti facere et! Nulla, distinctio.
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat pariatur, consequatur laboriosam ex voluptatibus eos perferendis! Eaque corporis velit et fugiat! Perspiciatis magni inventore numquam nisi aut error officia veniam.
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt suscipit natus culpa cumque voluptas. Esse hic dolore nesciunt beatae, minima commodi, sit inventore atque molestiae possimus voluptate dolores consectetur fuga!
     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum blanditiis ex ad placeat quae distinctio error! Quidem aut, esse, repellendus dicta eius atque exercitationem, assumenda commodi quaerat nesciunt neque saepe.
     Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda modi odit minima repellendus tempora mollitia eos ratione totam beatae vitae ducimus impedit obcaecati consequuntur nobis incidunt, similique ad natus sapiente!
     <br>
     <br>
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus debitis provident eveniet fugit, tempora voluptas repellat animi ad ea incidunt quam perferendis quo dolores quod corrupti facere et! Nulla, distinctio.
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat pariatur, consequatur laboriosam ex voluptatibus eos perferendis! Eaque corporis velit et fugiat! Perspiciatis magni inventore numquam nisi aut error officia veniam.
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt suscipit natus culpa cumque voluptas. Esse hic dolore nesciunt beatae, minima commodi, sit inventore atque molestiae possimus voluptate dolores consectetur fuga!
     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum blanditiis ex ad placeat quae distinctio error! Quidem aut, esse, repellendus dicta eius atque exercitationem, assumenda commodi quaerat nesciunt neque saepe.
     Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda modi odit minima repellendus tempora mollitia eos ratione totam beatae vitae ducimus impedit obcaecati consequuntur nobis incidunt, similique ad natus sapiente!
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus debitis provident eveniet fugit, tempora voluptas repellat animi ad ea incidunt quam perferendis quo dolores quod corrupti facere et! Nulla, distinctio.
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat pariatur, consequatur laboriosam ex voluptatibus eos perferendis! Eaque corporis velit et fugiat! Perspiciatis magni inventore numquam nisi aut error officia veniam.
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt suscipit natus culpa cumque voluptas. Esse hic dolore nesciunt beatae, minima commodi, sit inventore atque molestiae possimus voluptate dolores consectetur fuga!
     
</div>  

<div class="dokumen">

Lampiran :

<br>
<br>
      <img src="bg/bg2.jpg " style="width: 600px;height: 400px;" >

    </div>


<div class="atribut ">

<a >  Waktu : {{$data->waktu}} &ensp; </a>
<a >  Aspek : {{$data->aspek}} </a>

</div>



<br>
<br>

<hr width="70%">


@endforeach



































</body>
</html>