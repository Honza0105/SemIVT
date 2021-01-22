<!DOCTYPE html>
<html>
<body>
<?php

$list = array();
for ($i=0;$i<5;$i++)
    $list[$i]= rand(0,100);

sort($list);
array_flip($list);

for ($i=0;$i<5;$i++)
    echo $list[4-$i]."<br>";
?>


</body>
</html>