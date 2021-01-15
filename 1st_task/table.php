<?php

//phpinfo();

$t = 'The number is: '  ;
echo'
        <table style="background-image: linear-gradient(blue, aqua)")>
            <tr style="background-color: white">
                <th>øada s krokem +1</th>
                <th>druhá mocnina</th>
                <th>øada s krokem -1</th>
                                    
            </tr>
    ';   
for ($i = 0; $i <= 10; $i++) 
    {
    echo
        '
            <tr>
                <th>'.$t.$i.'</th>
                <th>'.$t.$i*$i.'</th>
                <th>'.$t.-$i.'</th>            
            </tr>
        ';
    }
echo '</table>';



?>