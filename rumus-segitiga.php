<form action="rumus-segitiga.php" method="POST">
    <h1> Rumus luas dan keliling segitiga </h1>
    <p>Luas :</p>
    <input type="number" name="alas"  placehorder="Ex. 5"/>
    <input type="number" name="tinggi"  placehorder="Ex. 5"/><br>
    <p>Keliling :</p>
    <input type="number" name="sisi"  placehorder="Ex. 5"/><br><br>
    <input type="submit" name="proses"  value="hitung keliling"/>
</from>

<?php
if ( isset($_POST["proses"]) ) {
    echo "<hr>";
    $alas = $_POST["alas"];
    $tinggi = $_POST["tinggi"];
    $sisi = $_POST["sisi"];
    $luas =  1/2 * ($alas * $tinggi);
    $keliling = $sisi + $sisi + $sisi ;
    echo "Luas Segitiga : $luas <br>";
    echo "Keliling Segitiga : $keliling <br>";
}
