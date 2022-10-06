<form action="rumus-lingkaran.php" method="POST">
    <h1> Rumus luas dan keliling lingkaran </h1>
    <p>jari jari :</p>
    <input type="number" name="r"  placehorder="Ex. 5"/>
    <input type="submit" name="proses"  value="hitung luas & keliling"
    />
</from>

<?php
if ( isset($_POST["proses"]) ) {
    echo "<hr>";
    $r = $_POST["r"];
    $luas = 3.14 * ($r * $r);
    $keliling = 2 * 3.14 * $r;

    echo "Luas lingkaran : $luas <br>";
    echo "keliling lingkaran : $keliling <br>";
}