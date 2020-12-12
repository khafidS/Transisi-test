<?php

  $arr = [
    ['f', 'g', 'h', 'i'],
    ['j', 'k', 'p', 'q'],
    ['r', 's', 't', 'u']
   ];

  function cari($array, $id) {
    foreach ($array as $val) {
        foreach($val as $i=>$v)
        {
          $a[] = $v;
          
        }
    }

    $ap = 1;
    $string = implode($a);
    $items = str_split($id);
    // var_dump($e);
    foreach ($items as $item)
    {
      if (strpos($string, $item) !== false)
      {
        $ap*=1;
      } else{
        $ap*=0;
      }
    }

    if ($ap == 1)
      return true;
    else
      return false;

  }
 
  $var1 = 'fghi';
  $var2 = 'fghp';
  $var3 = 'fjrstp';
  $var4 = 'fjrstpxz';

  echo '1. Nilai hasil Pencarian kata untuk <b>'.$var1.'</b> adalah <b>'.(boolval(cari($arr, $var1)) ? 'true' : 'false').'</b> <br>';
  echo '1. Nilai hasil Pencarian kata untuk <b>'.$var2.'</b> adalah <b>'.(boolval(cari($arr, $var2)) ? 'true' : 'false').'</b> <br>';
  echo '1. Nilai hasil Pencarian kata untuk <b>'.$var3.'</b> adalah <b>'.(boolval(cari($arr, $var3)) ? 'true' : 'false').'</b> <br>';
  echo '1. Nilai hasil Pencarian kata untuk <b>'.$var4.'</b> adalah <b>'.(boolval(cari($arr, $var4)) ? 'true' : 'false').'</b>';