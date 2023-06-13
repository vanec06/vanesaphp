<?php
echo "<table>";

for ($i=1; $i <= 10 ; $i++) { 
echo "<tr>";

    for ($a=1; $a <= 10 ; $a++) { 
        $multipli = $i * $a;
        echo "<td>" . $multipli . "</td>";

    }
    echo "</tr>";

}
echo "</table>";
?>