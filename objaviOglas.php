<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avto-oglasnik</title>
    <link rel="stylesheet" href="css/vnosOglasa.css">
</head>
<body>
    <?php include "navbar.php" ?>

    <div class="header2">
        <h2>Vnesite osnovne podatke o vozilu</h2>
    </div>

    <form method="post" action="objaviOglas.php">
 
        <div>
        <label>Znamka vozila:</label>
            <select name="znamka" id="znamka">
                <option value="Alfa">Alfa Romeo</option>
                <option value="Audi">Audi</option>
                <option value="BMW">BMW</option>
                <option value="Chevrolet">Chevrolet</option>
                <option value="Citroen">Citroen</option>
                <option value="Dacia">Dacia</option>
                <option value="Ferrari">Ferrari</option>
                <option value="Fiat">Fiat</option>
                <option value="Ford">Ford</option>
                <option value="Honda">Honda</option>
                <option value="Hyundai">Hyundai</option>
                <option value="Kia">Kia</option>
                <option value="Lamborghini">Lamborghini</option>
                <option value="Mazda">Mazda</option>
                <option value="Mercedes">Mercedes-Benz</option>
                <option value="Nissan">Nissan</option>
                <option value="Opel">Opel</option>
                <option value="Peugeot">Peugeot</option>
                <option value="Porsche">Porsche</option>
                <option value="Renault">Renault</option>
                <option value="Škoda">Škoda</option>
                <option value="Tesla">Tesla</option>
                <option value="Toyota">Toyota</option>
                <option value="Volkswagen">Volkswagen</option>
                <option value="Volvo">Volvo</option>
            </select>
        </div>
        <div>
            <label>Model</label>
            <input type="text" name="model">
        </div>
        <div>
            <label>Karoserijska oblika</label>
            <select name="oblika" id="oblika">
                <option value="limuzina">limuzina</option>
                <option value="karavan">karavan</option>
                <option value="enoprostorec">enoprostorec</option>
                <option value="terenec">terensko vozilo</option>
                <option value="coupe">coupe</option>
                <option value="cabrio">cabrio</option>
            </select>
        </div>
        <div>
            <label>Letnik vozila</label>
            <select name="letnik">
                <?php
                // for (začetna_vr; do_kdaj_delam; kako_spreminjam)
                for ($leto = 1970; $leto <= 2022; $leto++) {
                    echo '<option value="' .$leto .'">' .$leto .'</option>';
                }
                ?>
            </select><br>
        </div>
        <div>
            <label>Pogonsko gorivo</label>
            <input type="radio" name="gorivo" value="bencin" id="bencin"><label for="bencin">Bencin</label>
            <input type="radio" name="gorivo" value="diesel" id="diesel"><label for="diesel">Diesel</label>
            <input type="radio" name="gorivo" value="hibrid" id="hibrid"><label for="hibrid">Hibridni pogon</label>
            <input type="radio" name="gorivo" value="epogon" id="epogon"><label for="epogon">E-pogon</label>
            <input type="radio" name="gorivo" value="plin" id="plin"><label for="plin">LPG avtoplin</label><br>
        </div>
        <div>
            <label> Prevoženi km</label>
            <input type="number" name="kilometri">
        </div>
        <div>
            <label>Menjalnik</label>
            <select name="menjalnik" id="menjalnik">
                <option value="ročni">ročni</option>
                <option value="avtomatski">avtomatski</option>
            </select>
        </div>
        <div>
            <label for="file-select">Dodaj fotografijo</label>
            <input type="file" name="upload_img" id="file-select">
        </div>
        <div>
            <label for="opombe">Opombe</label>
            <textarea rows="5" cols="50" name="opombe" id="opombe"></textarea>
        </div>
        <button type="submit" value="objavi">Objavi</button>
    </form>
    
</body>
</html>