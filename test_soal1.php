<?php

// soal pertama
function modus($data){
  $reduce = array_count_values($data);
  arsort($reduce);
  $return = $reduce;
  $angka = array_keys($return);
  $jumlah = array_values($return);
  //$re = ['angka' => $angka[0], 'jumlah' => $jumlah[0]];
  return "total data paling banyak keluar adalah $angka[0] dengan jumlah $jumlah[0] <br>";
}

$data1 = [1, 4, 3, 4, 4, 3, 1, 4, 4, 4, 4, 5, 4, 4, 4 ];
echo modus($data1);

?>