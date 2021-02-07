<form action="4th_task(1).php" method="POST">
Zadejte polomìr koule: <input type="text" name="r" /> <br /> 
<input type="checkbox" name="povrch"/> povrch<br />
<input type="checkbox" name="objem" /> objem
<input type="submit" value="Odeslat"/>
</form>

<?
$r = intval($_POST["r"]);
$povrch = $_POST["povrch"];
$objem = $_POST["objem"];
$povrch_num = 4*pi()*$r*$r;
$objem_num = (4/3)*pi()*$r*$r*$r;

if ($r > 0 and is_numeric == TRUE)
    {
    if ($povrch and $objem == true)
        {
        echo "Povrch koule je ".$povrch_num.".";
        echo '<br>';
        echo "Objem koule je ".$objem_num.".";        
        }
    elseif ($povrch == True) 
        {
        echo "Povrch koule je ".$povrch_num.".";
        }
    elseif ($objem == True) 
        {
        echo "Objem koule je ".$objem_num.".";
        }

    }


?>