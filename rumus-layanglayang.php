<form action="rumus-layanglayang.php" method="POST">
    <h1> Rumus luas dan keliling layang - layang</h1>
    <p>luas :</p>
    <input type="number" name="d1"  placehorder="Ex. 5"/>
    <input type="number" name="d2"  placehorder="Ex. 5"/><br>
    <p>Keliling :</p><br>
    <input type="number" name="a"  placehorder="Ex. 5"/><br><br>
    <input type="number" name="b"  placehorder="Ex. 5"/><br><br>
    <input type="submit" name="proses"  value="hitung luas & keliling"
    />
</from>

<?php
if ( isset($_POST["proses"]) ) {
    echo "<hr>";
    $d1 = $_POST["d1"];
    $d2 = $_POST["d2"];
    $a = $_POST["a"];
    $b = $_POST["b"];
    $luas = 1/2 * $d1 * $d2 ;
    $keliling = 2 * ($a + $b);
    echo "Luas belah ketupat : $luas <br>";
    echo "Keliling belah ketupat : $keliling <br>";
}
