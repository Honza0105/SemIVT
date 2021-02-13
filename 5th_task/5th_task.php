<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2"/>
<form action="5th_task.php" method="post">
Zadejte hledaný rok: 
<input type="text" name="year"/>
<input type="submit" value="odeslat"/>
</form>

<?php 
if (isset($year)==TRUE and $year>0)
    {
    $year = $_POST["year"];
    $set = array("Krysy","Buvola","Tygra","Zajíce","Draka","Hada","Koně","Kozy","Opice","Kohouta","Psa","Prasete");
    $img = array(
        'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f7/Roofrat_Hagenbeck_02.jpg/1024px-Roofrat_Hagenbeck_02.jpg',
        'https://stanleybradley.eu/wp-content/uploads/2020/08/unnamed.jpg',
        'http://www.chovzvirat.cz/images/zvirata/tygr_ogb46hx.jpg',
        'https://zoomagazin.cz/wp-content/uploads/2016/08/zajic-polni.jpg',
        'https://img.myloview.cz/fototapety/cinsky-drak-400-117957276.jpg',
        'https://g.denik.cz/1/b6/had-ilustracni-snimek_denik-630-16x9.jpg',
        'https://equilist.cz/wp-content/uploads/2020/06/859585_10151311195980848_2015067014_o-300x275.jpg',
        'https://www.magazinelita.cz/files/clanky/6687.jpg',
        'https://ebschool.cz/data/photo/52/1.jpg',
        'https://g.denik.cz/62/67/kohout_ptak_2908_denik-630-16x9.jpg',
        'https://www.colosus.cz/projekt/public/mutace/souborovy_system/magazin_obrazky/pes.jpeg',
        'https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/Pig_USDA01c0116.jpg/236px-Pig_USDA01c0116.jpg'
    );
    echo "Rok ".$year." odpovídá v čínském kalendáři roku ".$set[($year+8)%12].".<br /><br />";
    echo '<img src='.$img[($year+8)%12].'>';
    }
?>
