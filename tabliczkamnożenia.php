<?php
echo "<table style= 'border:1px black solid'>";
for ($i = 1;$i <=10;$i++)
{echo "<tr>"; 
for ($j = 1;$j <=10;$j++)
{echo "<td>".$i*$j."</td>";}
echo "</tr>";} //koniec wiersza
echo "</table>"
?>