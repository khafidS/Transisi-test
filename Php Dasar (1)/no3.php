<?php
  $string = 'Jakarta adalah ibukota negara Republik Indonesia';

  // === UNIGRAM === 
  function unigram ($u)
  {
    $newstring = implode(", ", preg_split("/[\s]+/", $u));
    echo "Unigram : ".$newstring."<br>";
  }

  unigram($string);

  // === END UNIGRAM ===

  // === BIGRAM ===

  function bigram ($u)
  {
    $newstring = explode(' ', $u);
    $array=[];
    foreach($newstring as $i => $s)
    {
      if ($i % 2)
        {
          $array[floor($i / 2)] .= ' ' . $s;
        } 
      else
        {
          $array[$i / 2] = $s;
        }
    }

    echo 'bigram : ';
    foreach($array as $a)
    {
      echo($a . ', ');
    }
    echo '<br>';
  }

  bigram($string);

// === END BIGRAM ===

// === TRIGRAM ===
  function trigram ($u)
  {
    $newstring = explode(' ', $u);
    $array=[];
    foreach($newstring as $i => $s)
    {
      if ($i % 3)
        {
          $array[floor($i / 3)] .= ' ' . $s;
        } 
      else
        {
          $array[$i / 3] = $s;
        }
    }

    echo 'trigram : ';
    foreach($array as $a)
    {
      echo($a . ', ');
    }
    echo '<br>';
  }

  trigram($string);

  

  