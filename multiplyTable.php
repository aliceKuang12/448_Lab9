<?php
echo "<h1> Multiplication Table</h1> <br>";
echo "<table>";
        $s = " ";
    echo'<td>' .$s.'</td>';
    for ($z =1; $z <= 100; $z++)
    {
       echo'<td><b>' .$z.'</b></td>';
    }

    for ($r =1; $r <= 100; $r++)
        {
        echo'<tr>';
        echo '<th>' .$r.'</th>';

       for ($c = 1; $c <= 100; $c++)
       {
                        echo '<td>' .$c*$r.'</td>';
       }
       echo '</tr>'; // close tr tag here
    }

  echo"</table>";

?>