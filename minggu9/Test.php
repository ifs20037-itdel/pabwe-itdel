<?php
  $data = array(
      ["id"=> "11S3109", "Nama Mata Kuliah"=> "Pengembangan Aplikasi Berbasis Web", "SKS" => "4"],
      ["id"=> "11S3101", "Nama Mata Kuliah"=> "Analisis dan Perancangan Perangkat Lunak", "SKS" => "3"],
      ["id"=> "10S3109", "Nama Mata Kuliah"=> "Kecerdasan Buatan", "SKS" => "3"],
      ["id"=> "11S3116", "Nama Mata Kuliah"=> "Teori Bahasa Formal dan Automata", "SKS" => "3"],
      ["id"=> "11S3112", "Nama Mata Kuliah"=> "Pengujian dan Penjaminan Mutu Perangkat Lunak", "SKS" => "3"],
      ["id"=> "11S3105", "Nama Mata Kuliah"=> "Kriptografi dan Keamanan Informasi", "SKS" => "3"],
      
  );
  $sks = array(
    4,
    3,
    3,
    3,
    3,
    3,
);

$hitung = 0;
for($i = 0; $i<sizeof($sks); $i++){
    $hitung+=$sks[$i];
}
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>KRS_11S20037</title>
  </head>
  
  <body>
  <h2>Kartu Rencana Studi (KRS)</h2>
    <hr>
  <table cellspacing="5">
        <tr>
            <td width="52%">NIM</td>
            <td>11S20037</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>Fastoria Ginting</td>
        </tr>
    </table>
    <br><br><br>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">Kode Mata Kuliah</th>
      <th scope="col">Nama Mata Kuliah</th>
      <th scope="col">SKS</th>
    </tr>
  </thead>

<tbody>

    <?php for($i=0; $i<sizeof($data); $i++){ ?>
    <tr>
      <th scope="row"><?= $data[$i]["id"] ?></th>
      <td><?= $data[$i]["Nama Mata Kuliah"] ?></td>
      <td><?= $data[$i]["SKS"] ?></td>
    </tr>
    <?php } 
    ?>
  </tbody>

  <tr>
      <td colspan="2">TOTAL</td>
      <td>
      <?php  echo($hitung); ?>
      </td>
  </tr>
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>