<?php
  $nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";
  $numb = explode(" ", $nilai);
  $average = array_sum($numb) / count($numb);

  

  print_r( "Berikut adalah list nilai : ".$nilai."<br><br>");
  print_r( "1. rata-rata dari nilai diatas adalah " . $average. "<br>" );
  

  function maksimum($maks)
  {
    rsort($maks);
	  for($i = 0;  $i < 7; $i++ ){
 
		echo $maks[$i];
		echo ',';
	  }
  }

  print_r( "2. 7 nilai tertinggi dari nilai diatas adalah ");
  maksimum($numb); print_r("<br>");

  function minimum($min)
  {
    sort($min);
	  for($i = 0;  $i < 7; $i++ ){
 
		echo $min[$i];
		echo ',';
	  }
  }

  print_r( "3. 7 nilai terendah dari nilai diatas adalah ");
  minimum($numb);

  