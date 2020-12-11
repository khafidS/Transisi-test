<?php
  $string = 'TranSISI';
  function hitung($str) 
  { 
      $lower = 0;  
      for ($i = 0; $i < strlen($str); $i++) 
      { 
          if  ($str[$i] >= 'a' && $str[$i] <= 'z') 
              $lower++;
      } 
      echo $str . " mengandung " .$lower. " buah huruf kecil"; 
  } 
  hitung($string); 