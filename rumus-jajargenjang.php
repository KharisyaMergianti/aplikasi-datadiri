<form action="rumus-jajargenjang.php" method="POST">
    <h1> Rumus luas dan keliling Jajargenjang</h1>
    <p>luas :</p>
    <input type="number" name="alas"  placehorder="Ex. 5"/>
    <input type="number" name="tinggi"  placehorder="Ex. 5"/><br>
    <p>Keliling :</p><br>
    <input type="number" name="panjang"  placehorder="Ex. 5"/>
    <input type="number" name="lebar"  placehorder="Ex. 5"/><br><br>
    <input type="submit" name="proses"  value="hitung luas & keliling"
    />
</from>

<?php
if ( isset($_POST["proses"]) ) {
    echo "<hr>";
    $alas = $_POST["alas"];
    $tinggi = $_POST["tinggi"];
    $panjang = $_POST["panjang"];
    $lebar = $_POST["lebar"];
    $luas = $alas * $tinggi;
    $keliling = (2 * $panjang) + (2 * $lebar);
    echo "Luas Jajargenjang : $luas <br>";
    echo "Keliling Jajargenjang : $keliling <br>";
}
