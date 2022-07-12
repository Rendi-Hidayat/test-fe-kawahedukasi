<?php

// soal ketiga
function segitiga_atki($star){
	for($a=$star;$a>0;$a--){
    for($i=1; $i<=$a; $i++){
      echo " &nbsp";
	  }
    for($a1=$star;$a1>=$a;$a1--){
    	echo"*";
    }
	    echo"<br>";
	}
}

function segitiga_atka($star){
  for($a=$star;$a>0;$a--){
  	for($b=$star;$b>=$a;$b--){
  		echo "*";
  	}
  	echo "<br>";
	}
}

echo "<br><br>";
segitiga_atka(6);
segitiga_atki(6);

?>