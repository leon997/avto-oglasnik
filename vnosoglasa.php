<html>
<head>
</head>
<body>
<br>
Vnesi avto oglas:<br>
<form action="prikazoglasa.php" method="get">
  <form>
      <label for="znamka">Znamka vozila:</label>
      <select name="znamka" id="znamka">
          <option value="Audi">Audi</option>
          <option value="BMW">BMW</option>
          <option value="Citroen">Citroen</option>
          <option value="Ford">Ford</option>
          <option value="Mercedes">Mercedes-Benz</option>
          <option value="Opel">Opel</option>
          <option value="Peugeot">Peugeot</option>
          <option value="Renault">Renault</option>
          <option value="Škoda">Škoda</option>
          <option value="Volkswagen">Volkswagen</option>
          <option value="Alfa">Alfa Romeo</option>
          <option value="Chevrolet">Chevrolet</option>
          <option value="Dacia">Dacia</option>
          <option value="Fiat">Fiat</option>
          <option value="Ferrari">Ferrari</option>
          <option value="Honda">Honda</option>
          <option value="Hyundai">Hyundai</option>
          <option value="Kia">Kia</option>
          <option value="Lamborghini">Lamborghini</option>
          <option value="Nissan">Nissan</option>
          <option value="Porsche">Porsche</option>
          <option value="Tesla">Tesla</option>
          <option value="Toyota">Toyota</option>
          <option value="Volvo">Volvo</option>
      </select>
  </form>
Model: <input type="text" name="model"><br>
<form>
    <label for="oblika">Obika:</label>
    <select name="oblika" id="oblika">
        <option value="limuzina">limuzina</option>
        <option value="karavan">karavan</option>
        <option value="enoprostorec">enoprostorec</option>
        <option value="terenec">terensko vozilo</option>
        <option value="coupe">coupe</option>
        <option value="cabrio">cabrio</option>
    </select>
</form>
Letnik prve registracije:
<select name="letnik">
<?php
// for (začetna_vr; do_kdaj_delam; kako_spreminjam)
for ($leto = 1970; $leto <= 2022; $leto++) {
    echo '<option value="' .$leto .'">' .$leto .'</option>';
}
?>
</select><br>
Pogonsko gorivo:
<input type="radio" name="gorivo" value="bencin" id="bencin"><label for="bencin">Bencin</label>
<input type="radio" name="gorivo" value="diesel" id="diesel"><label for="diesel">Diesel</label>
<input type="radio" name="gorivo" value="hibrid" id="hibrid"><label for="hibrid">Hibridni pogon</label>
<input type="radio" name="gorivo" value="epogon" id="epogon"><label for="epogon">E-pogon</label>
<input type="radio" name="gorivo" value="plin" id="plin"><label for="plin">LPG avtoplin</label><br>
Prevoženi km: <input type="number" name="kilometri"><br>
<form>
    <label for="menjalnik">Menjalnik:</label>
    <select name="menjalnik" id="menjalnik">
        <option value="ročni">ročni</option>
        <option value="avtomatski">avtomatski</option>
    </select>
</form>
Barva vozila: <input type="text" name="barva"><br>
<form>
    <label for="vrata">Št. vrat:</label>
    <select name="vrata" id="vrata">
        <option value="2vrata">2 vrata</option>
        <option value="3vrata">3 vrata</option>
        <option value="4vrat">4 vrat</option>
        <option value="5 vrat">5 vrat</option>
    </select>
</form>
Št. sedežev: <input type="number" name="sedež"><br>
Cena: <input type="number" name="cena"><br>
<form>
    <label for="file-select">Dodaj fotografijo:</label>
    <input type="file" name="upload" id="file-select">
</form><br>
<form>
    <label for="opombe">Opombe:</label>
    <textarea rows="5" cols="50" name="opombe" id="opombe"></textarea>
</form><br>
<input type="submit" value="Objavi oglas">
</form>
</body>
</html>
