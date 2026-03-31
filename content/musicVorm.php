<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Muusika Vorm</title>
    <script src="js/MusicJs.js"></script>
    <link rel="stylesheet" type="text/css" href="style/musicCss.css">
</head>
<body>
<h1>Muusika Küsimustik</h1>
<table>
    <tr>
        <td>
            <fieldset>
                <legend>Milliseid muusikuid/ansambleid sa tead?</legend>
                <input type="checkbox" name="valik" id="imdr" value="Big Time Rush" onchange="musicValik()">
                <label for="imdr">Imagine Dragons</label><br>
                <input type="checkbox" name="valik" id="beatles" value="The Beatles!" onchange="musicValik()">
                <label for="beatles">The Beatles</label><br>
                <input type="checkbox" name="valik" id="nirvana" value="Nirvana!" onchange="musicValik()">
                <label for="nirvana">Nirvana</label><br>
                <input type="checkbox" name="valik" id="btr" value="Big Time Rush!" onchange="musicValik()">
                <label for="btr">Big Time Rush</label><br>
            </fieldset>
        </td>
        <td>
            <div id="vastus"></div>
        </td>
    </tr>

    <tr>
        <td>
            <label for="lemmik">Mida arvad muusika kuulamisest koolis?</label><br>
            <input type="text" id="lemmik" placeholder="Sinu arvamus" oninput="lemmikLugemine()">
        </td>
        <td>
            <div id="vastus1"></div>
        </td>
    </tr>

    <tr>
        <td>
            <label for="slider">Mitu tundi päevas sa kuulad muusikat?</label><br>
            0 <input type="range" id="slider" min="0" max="24" onchange="sliderLiigub()"> 24
        </td>
        <td>
            <div id="vastus2"></div>
        </td>
    </tr>

    <tr>
        <td>
            <h4>Kas sa kuulad raadiot?</h4>
            <input type="radio" name="jah" id="jah" value="Jah!" onchange="valiVastus()">
            <label for="jah">Jah!</label>
            <input type="radio" name="ei" id="ei" value="Ei!" onchange="valiVastus()">
            <label for="ei">Ei!</label>
        </td>
        <td>
            <div id="vastus3"></div>
        </td>
    </tr>

    <tr>
        <td>
            <label for="raadiojam">Milliseid raadiojaamu oskad nimetada?</label><br>
            <input type="text" id="raadiojam" placeholder="Sisesta RaadioJaam" oninput="radJamLugemine()">
        </td>
        <td>
            <div id="vastus4"></div>
        </td>
    </tr>

    <tr>
        <td>
            <label for="muusik">Millist muusikat sa kõige rohkem kuulad?</label><br>
            <select name="muusik" id="muusik" onchange="valiMuusik()">
                <option value="...">.......</option>
                <option value="Blinding Light!">Blinding Lights (The Weeknd)</option>
                <option value="Shape of You!">Shape of You (Ed Sheeran)</option>
                <option value="Star Boy!">Starboy (The Weeknd, Daft Punk)</option>
                <option value="Someone You Loved!">Someone You Loved (Lewis Capaldi)</option>
                <option value="As It Was!">As It Was (Harry Styles)</option>
                <option value="Sweater Weather!">Sweater Weather (The Neighbourhood)</option>
            </select>
        </td>
        <td>
            <div id="vastus5"></div>
        </td>
    </tr>

    <tr>
        <td colspan="2">
            <fieldset>
                <legend>Sinu kõik vastused</legend>
                <div id="vastus6"></div>
                <img src="" alt="" id="pilt">
            </fieldset>
        </td>
    </tr>
</table>
<br>
<input type="button" value="Saada" onclick="saada()">
<input type="button" value="Puhasta" onclick="Puhasta()">

</body>
</html>