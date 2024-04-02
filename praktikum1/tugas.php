<?php
// data nilai 1
$nilai1 = ["id" => 1, "nim" => "010231", "uas" => 90, "uts" => 100, "tugas" => 90];
$nilai2 = ["id" => 2, "nim" => "022181", "uas" => 80, "uts" => 100, "tugas" => 90];
$nilai3 = ["id" => 3, "nim" => "026423", "uas" => 50, "uts" => 100, "tugas" => 90];
$nilai4 = ["id" => 4, "nim" => "021237", "uas" => 60, "uts" => 100, "tugas" => 90];

// buat array multi
$kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NIM</th>
      <th scope="col">Tugas</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      
    </tr>
  </thead>
  <tbody>
    <?php  foreach ($kumpulan_nilai as $nilai): ?>
     <tr>
            <td> <?php echo $nilai1["id"]; ?> </td>
            <td> <?php echo $nilai1["nim"]; ?> </td>
            <td> <?php echo $nilai1["tugas"]; ?> </td>
            <td> <?php echo $nilai1["uts"]; ?> </td>
            <td> <?php echo $nilai1["uas"]; ?> </td>       
    </tr>
    <?php endforeach; ?> 
  </tbody>
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>