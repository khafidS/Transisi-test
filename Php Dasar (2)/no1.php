<?php
  $num = 64;

  echo "<table border = 1 style='border-collapse: collapse; text-align : center;background : #000000; color : #ffffff;'>";
	for ($row=0; $row < 8; $row++) { 
    echo "<tr> \n";
    for ($col=0; $col < 8; $col++) 
        { 
          if( ($row == 1 && $col == 0) or 
              ($row == 4 && $col == 0) or 
              ($row == 7 && $col == 0) or
              ($row == 2 && $col == 1) or
              ($row == 5 && $col == 1) or
              ($row == 0 && $col == 2) or
              ($row == 3 && $col == 2) or
              ($row == 6 && $col == 2) or
              ($row == 2 && $col == 4) or
              ($row == 5 && $col == 4) or
              ($row == 0 && $col == 5) or
              ($row == 3 && $col == 5) or
              ($row == 6 && $col == 5) or
              ($row == 1 && $col == 6) or
              ($row == 4 && $col == 6) or
              ($row == 7 && $col == 6))
          {
            echo "<td style='background : #ffffff; color : #000000'>";
          } 
          elseif(($col == 3) or ($col == 7))
          {
            echo "<td style='background : #ffffff; color : #000000'>";
          }
          else
          {
            echo "<td>";
          }
            echo ($col + 1 + ($row * 8))."</td> \n";
        }
	  echo "</tr>";
	}
	echo "</table>";