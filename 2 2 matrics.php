<?php
$a1 = array(
    array(4, 6),
    array(3, 9)
    
);
$a2 = array(
    array(6, 7),
    array(9, 2)
);

echo "First matrix: \n";
for ($i = 0; $i < 2; $i++)
{
    for ($j = 0; $j < 2; $j++) 
    {
        echo $a1[$i][$j] . " ";
    }
    echo "\n";
}
echo "Second matrix: \n";
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 2; $j++)
    {
        echo $a2[$i][$j] . " ";
    }
    echo "\n";
} 
$sum = array();
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 2; $j++) {
        $sum[$i][$j] = $a1[$i][$j] + $a2[$i][$j];
    }
}
echo "Addition of two matrices: \n";
for ($i = 0; $i < 2; $i++) 
{
    for ($j = 0; $j < 2; $j++)
    {
        echo $sum[$i][$j] . " ";
    }
    echo "\n";
}

for ($i = 0; $i < 2; $i++) 
    { 
        for ($j = 0; $j < 2; $j++) 
        { 
            $res[$i][$j] = 0; 
            for ($x = 0; $x < 2; $x++) 
            { 
                $res[$i][$j] += $a1[$i][$x] * 
                                $a2[$x][$j]; 
            } 
        } 
    } 
    
echo "Matrix Multiplication"."\n";    
for ($i = 0; $i < 2; $i++) 
    { 
        for ($j = 0; $j < 2; $j++) 
        { 
            echo $res[$i][$j] . " "; 
        } 
        echo "\n"; 
    } 

?>

