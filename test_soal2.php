<?php

// soal kedua
function mengandung_angka($data){
  $true = "Sistem kami menolak untuk inputan berisi angka " . (int) filter_var($data, FILTER_SANITIZE_NUMBER_INT) . " <br>";
  $false = "Sistem memeriksa data anda valid dengan ketentuan kami dengan inputan : " . $data . " <br>";
  return (preg_match('~[0-9]+~', $data)) ? $true : $false;
}

echo "<br><br>";
//MENGANDUNG ANGKA 
$input1 = "hallo jesika24 selamat datang!";
$input2 = "hallo anggun selamat datang!";

echo mengandung_angka($input1);
echo mengandung_angka($input2);

?>