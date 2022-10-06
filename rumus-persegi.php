<form action="rumus-persegi.php" method="POST">
    <h1> Rumus luas dan keliling persegi </h1>
    <p>sisi :</p>
    <input type="number" name="Sisi"  placehorder="Ex. 5"/>
    <input type="submit" name="proses"  value="hitung luas & keliling"
    />
</from>

<?php
if ( isset($_POST["proses"]) ) {
    echo "<hr>";
    $sisi = $_POST["Sisi"];
    $luas = $sisi * $sisi;
    $keliling = 4 * $sisi;

    echo "Sisi : $sisi <br>";
    echo "Luas persegi : $keliling <br>";
    echo "keliling persegi : $keliling <br>";
}
    