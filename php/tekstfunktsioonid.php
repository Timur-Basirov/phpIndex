<?php
function clearVarsExpept($url, $varname){
    $url=basename($url);
    if(str_starts_with($url,"?")){
        return "?$varname=".$_REQUEST[$varname];
    }
    return strtok($url, "?")."?$varname=".$_REQUEST[$varname];
}

echo "<h2>Tekstfunktsioonid</h2>";
echo "<div class ='section'>";
$tekst='PHP on skriptikeel serveripoolne';
echo $tekst;
echo "<br>";
echo "teksti pikkus -strlen() =".strlen($tekst). " tähemärgi";
echo "<br>";
echo "Esimesed 6 tähte -substr() =".substr($tekst, 0,6);
echo "<br>";
echo "Alates 6 tähest =".substr($tekst,6);
echo "Sõnade arv lauses - .str_word_count =".str_word_count($tekst). "sõnat lauses";
echo "<br>";
echo "Kõik tähed on suured ".strtoupper($tekst);
echo "<br>";
echo "Kõik tähed on väikesed ".strtolower($tekst);
echo "<br>";
echo "Iga sõna algab suure tähega ".ucwords($tekst);
echo "<br>";
echo ucwords(strtolower($tekst));
echo "<br>";
$tekst2='    PHP on skriptikeel serveripoolne        ';
//trim, ltrim , rtrim
echo "<br>";
echo "</div>";
echo "<div class ='section'>";
echo "|".$tekst2. "|";
echo "<br>";
echo "trim()- eemaldab tekstist tühikuid paremalt ja vasakult - ".trim($tekst2);
echo "<br>";
echo "<br>";
echo "ltrim()- eemaldab tekstist tühikuid vasakult - ".ltrim($tekst2);
echo "<br>";
echo "<br>";
echo "trim()- eemaldab tekstist tühikuid paremalt - ".rtrim($tekst2);
echo "<br>";
echo "</div>";
echo "<div class ='section'>";
echo "<h3>Tekst kui massiiv</h3>";
echo "($)tekst[0] - 1. täht massiivist  ".$tekst[0];
echo "<br>";
echo "5. täht massiivist  ".$tekst[4];
echo "<br>";
// määrab iga sõna nagu eraldi element
print_r(str_word_count($tekst, 1)); // Array ( [0] => PHP [1] => on [2] => skriptikeel [3] => serveripoolne )
$syna=str_word_count($tekst, 1);
echo "<br>";
echo "massivist 2 sõna - ".$syna[2];
echo "<br>";
// määrab mis sümbool on iga sõna alguses
print_r(str_word_count($tekst, 2)); //Array ( [0] => PHP [4] => on [7] => skriptikeel [19] => serveripoolne )
echo "<br>";
echo "</div>";
echo "<div class ='section'>";
echo "<h2>Teksti asendamine - replace</h2>";
$asendus='Javascript';
echo substr_replace($tekst,$asendus, 0, 3);
echo "<br>";
//ise vaheta serveripoolne - kliendipoolne
$otsi=array('PHP', 'serveripoolne');
$asendav=array('Javascript', 'kliendipoolne');
echo str_replace($otsi, $asendav, $tekst);
echo "<br>";
echo "</div>";
echo "<div class ='section'>";
echo "<h2>Mõistatus. Arva ära Eesti linnanimi</h2>";
// tee 5-6 tekstifunktsiooni mis aitavad aru saada milline linnanimi oli.
$omasyna='Narva';
echo "Kokku tähti on: ".strlen($omasyna);
echo "<br>";
echo "Esimene 2 tähtid on: ".substr($omasyna, 0, 2);
echo "<br>";
echo "Kolmas täht on: ".$omasyna[2];
echo "<br>";
echo "Viimased 2 tähtid on ".substr($omasyna, 3, 3);
echo "<br>";
$narvalause='Narva on linn Venemaa piiri ääres.';
$otsinarva=array('Narva');
$replacesyna=array('...');
echo str_replace($otsinarva, $replacesyna, $narvalause);
echo "<br>";
echo "Linn oli: "."|".strtoupper($omasyna). "|";
echo "</div>";
echo "<br>";
?>
<form name ="tekstkontroll" action="<?=clearVarsExpept($_SERVER['REQUEST_URI'], "link")?>" method="post">
    <label for ="linn">Sisesta linnanimi:</label>
    <input type="text" id="linn" name="linn">
    <input type="submit" value="Kontrolli">
</form>
<?php
if (isset($_REQUEST["linn"])) {
    if($_REQUEST["linn"]=="Narva") {
        echo $_REQUEST["linn"]." on õige!";
    }
    else {
        echo $_REQUEST["linn"]." on vale!";
    }
}
