<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

<h1>Ini adalah Halaman Home</h1>

<a href="profile">Profile</a>
<a href="profile">Login</a>
<?php

$mahasiswa = [
    [
        "nama" => "Nurul",
        "nim" => "20200040079",
        "jurusan" => "Teknik Informatika",
        "email" => "nurul@gmail.com",
        "nilai"=> 90,
    ],
    [
        "nama" => "Siti Nurzehan",
        "nim" => "20211700980",
        "jurusan" => "Teknik Mesin",
        "email" => "zehan@gmail.com",
        "nilai"=> 80,
    ],
    [
        "nama" => "Annisa Yulianti",
        "nim" => "20200090043",
        "jurusan" => "Manajemen",
        "email" => "annisa@gmail.com",
        "nilai"=> 60,
    ],
];

?>

<table style="width:100%; border:1px solid black">


<tr>
    <th style="border:1px solid black">Nama</th>
    <th style="border:1px solid black">NIM</th>
    <th style="border:1px solid black">Jurusan</th>
    <th style="border:1px solid black">Email</th>
    <th style="border:1px solid black">Nilai</th>
    <th style="border:1px solid black">Status</th>
  </tr>

  <?php

  foreach ($mahasiswa as $mhs) { 
    echo "<trs>" ;

    echo "<td style='text-align: center; border:1px solid black'>";
    echo "<br> {$mhs['nama']}";
    echo "</td>";

    echo "<td style=' text-align: center; border:1px solid black'>";
    echo "<br> {$mhs['nim']}";
    echo "</td>";

    echo "<td style='text-align: center; border:1px solid black'>";
    echo "<br> {$mhs['jurusan']}";
    echo "</td>";

    echo "<td style='text-align: center; border:1px solid black'>";
    echo "<br> {$mhs['email']}";
    echo "</td>";

    echo "<td style='text-align: center; border:1px solid black'>";
    echo "<br> {$mhs['nilai']}";
    echo "</td>";


    if ($mhs['nilai'] >75  ) {
        echo "<td style=' text-align: center;border:1px solid black'> Lulus </td>";
    } 
    else {
        echo "<td style=' text-align: center;border:1px solid black'> Tidak Lulus </td>";
    }

    echo "</tr>";
} 
  ?>
  </table>
</body>
</html>