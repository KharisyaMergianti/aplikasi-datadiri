<form action="rumus-persegipanjang.php" method="POST">
    <h1> Rumus luas dan keliling persegi panjang</h1>
    <p>panjang&lebar :</p>
    <input type="number" name="panjang" placehorder="Ex. 5"/>
    <input type="number" name="lebar" placehorder="Ex. 5"/><br>
    <input type="submit" name="proses"  value="hitung luas & keliling"
    />
</from>

<?php
if ( isset($_POST["proses"]) ) {
    echo "<hr>";
    $panjang = $_POST["panjang"];
    $lebar = $_POST["lebar"];
    $luas = $panjang * $lebar;
    $keliling = 2 * ($panjang + $lebar) ;
    
    echo "Luas persegi panjang : $luas <br>";
    echo "keliling persegi panjang : $keliling <br>";
}