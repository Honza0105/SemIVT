<?php
echo'
        <table border=1px>
            <tr>
                <th>èíslo</th>
                <th>faktoriál èísla</th>
            </tr>
    ';   

function bgc($i)
    {
        if ($i%2 == 0) 
            {
             $col = yellow;
            }
        else 
            {
            $col = pink;
            }
    return $col;
    }

function Factorial($max)
    {  
    $sum = 1;
    for ($i = 1; $i <= $max; $i++)
        {
        $sum = $sum * $i;
        }
    return $sum;
    }

for ($i = 0; $i <= 10; $i++) 
    {
    echo'<tr style="background-color: '.bgc($i).'">
                <td align="left">'.$i.'</td>
                <td align="left">'.Factorial($i).'</td>
            </tr>
        ';
    }

echo '</table>';
?>