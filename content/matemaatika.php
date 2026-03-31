<?php
echo "<h2>Matemaatilised funktsioonid</h2>";

function keskmine($massiv) {
    if (count($massiv) === 0) return 0;
    return array_sum($massiv) / count($massiv);
}

function maksimum($massiv) {
    return !empty($massiv) ? max($massiv) : 0;
}

function miinimum($massiv) {
    return !empty($massiv) ? min($massiv) : 0;
}

function ruut($arv) {
    return $arv * $arv;
}

function ruutjuur($arv) {
    return $arv >= 0 ? sqrt($arv) : "Viga!";
}

function juhuslikArv($min, $max) {
    return rand($min, $max);
}

function protsent($arv, $protsent) {
    return ($arv * $protsent) / 100;
}

$arvud = [4, 8, 15, 16, 23, 42];

echo "<div class='section'>";
echo "<h3>Kasutame massiivi: [" . implode(", ", $arvud) . "]</h3>";
echo "Keskmine: <strong>" . keskmine($arvud) . "</strong><br>";
echo "Maksimum: <strong>" . maksimum($arvud) . "</strong><br>";
echo "Miinimum: <strong>" . miinimum($arvud) . "</strong><br>";
echo "</div>";

echo "<div class='section'>";
$arv = 9;
echo "<h3>Ruut ja ruutjuur</h3>";
echo "Arv: <strong>$arv</strong><br>";
echo "Ruut: <strong>" . ruut($arv) . "</strong><br>";
echo "Ruutjuur: <strong>" . ruutjuur($arv) . "</strong><br>";
echo "</div>";

echo "<div class='section'>";
echo "<h3>Juhuslik arv</h3>";
echo juhuslikArv(1, 100);
echo "</div>";

echo "<div class='section'>";
$hind = 200;
$allahindlus = 15;
echo "<h3>Protsent</h3>";
echo "Allahindlus: " . protsent($hind, $allahindlus) . " €<br>";
echo "Lõpphind: " . ($hind - protsent($hind, $allahindlus)) . " €";
echo "</div>";
?>