<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2"/>
<form action="4th_task(2).php" method="POST">
Číslo: <input type="text" name="number"/><br /><br />
Z jaké soustavy?
<select name="from">
    <option value="10">desítková</option>
    <option value="16">hexadecimální</option>
    <option value="2">binární</option>
</select>
<br /><br />
Do jaké soustavy?
<select name="to">
    <option value="10">desítková</option>
    <option value="16">hexadecimální</option>
    <option value="2">binární</option>
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
    echo 'Číslo '.$num.' v soustavě ';
    if ($from == '10')
        {echo 'desítkové';}
    elseif ($from == '2')
        {echo 'binární';}
    elseif ($from == '16')
        {echo 'hexadecimální';}
    echo ' je <span style="background-color:yellow">'.$final.'</span> v soustavě ';
    if ($to == '10')
        {echo 'desítkové';}
    elseif ($to == '2')
        {echo 'binární';}
    elseif ($to == '16')
        {echo 'hexadecimální';}
    echo '.';
}    

?>