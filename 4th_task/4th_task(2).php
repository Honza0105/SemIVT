<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2"/>
<form action="4th_task(2).php" method="POST">
��slo: <input type="text" name="number"/><br /><br />
Z jak� soustavy?
<select name="from">
    <option value="10">des�tkov�</option>
    <option value="16">hexadecim�ln�</option>
    <option value="2">bin�rn�</option>
</select>
<br /><br />
Do jak� soustavy?
<select name="to">
    <option value="10">des�tkov�</option>
    <option value="16">hexadecim�ln�</option>
    <option value="2">bin�rn�</option>
</select>
<br /><br />
<input type="submit" value="Odeslat"/>
</form>

<?php
$num = $_POST["number"];
$from = $_POST['from'];
$to = $_POST['to'];
if (isset($num)==TRUE and $num >= 0)
{
    $final = base_convert($num,$from,$to);
    echo '��slo '.$num.' v soustav� ';
    if ($from == '10')
        {echo 'des�tkov�';}
    elseif ($from == '2')
        {echo 'bin�rn�';}
    elseif ($from == '16')
        {echo 'hexadecim�ln�';}
    echo ' je <span style="background-color:yellow">'.$final.'</span> v soustav� ';
    if ($to == '10')
        {echo 'des�tkov�';}
    elseif ($to == '2')
        {echo 'bin�rn�';}
    elseif ($to == '16')
        {echo 'hexadecim�ln�';}
    echo '.';
}    

?>