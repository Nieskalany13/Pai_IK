<?php 
/* 1.
$a = 0;
$b = 20;
$x = rand($a,$b);
echo $x;
*/ 

// A
$a = 0;
$b = 20;
for ($i = $a; $i <= $b; ++$i) 
{
    $tab[] = rand($a,$b);
}
$s = array_sum($tab);
echo $s;

echo "<br>";

// B

$a = 0;
$b = 30;
$licznik4 = 0;
for ($i = $a; $i <= $b; ++$i) 
{
    $tab[] = rand($a,$b);
    if ($tab[$i]%4==0) {$licznik4++;}
}
$s = array_sum($tab);
echo "ilość elementów podzielnych w tablicy przez 4 = ".$licznik4."<br>";

echo "<br>";

// C

$a = 0;
$b = 30;
$licznik8 = 0;
for ($i = $a; $i <= $b; ++$i) 
{
    $tab[] = rand($a,$b);
    if ($tab[$i]>8) {$licznik8++;}
}
$s = array_sum($tab);
echo "ilość elementów większych w tablicy od 8 = ".$licznik8."<br>";


// 2
?>