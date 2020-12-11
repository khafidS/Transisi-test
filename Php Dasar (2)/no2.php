<?php
  $kata = "DFHKNQ";
  $key = 2;
  for($i=0;$i<strlen($kata);$i++)
  {
  $kode[$i]=ord($kata[$i]); //perubahan dari ASCII ke desimal
  $b[$i]=($kode[$i] + $key ) % 256; //proses enkripsi
  $c[$i]=chr($b[$i]); //perubahan dari desimal ke ASCII
  }
  echo "kata ASLI : ";
  for($i=0;$i<strlen($kata);$i++)
  {
  echo $kata[$i];
  }
  echo "<br>";
  echo "hasil enkripsi =";
  $hsl = '';
  for ($i=0;$i<strlen($kata);$i++)
  {
  echo $c[$i];
  $hsl = $hsl . $c[$i];
  }
  echo "<br>";
  //simpan data di file
  $fp = fopen ("enkripsi.txt","w");
  fputs ($fp,$hsl);
  fclose($fp);
?> 