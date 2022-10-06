<form action="rumus-trapesium.php" method="POST">
    <h1> Rumus luas dan keliling Trapesium</h1>
    <p>LUAS :</p>
    <p>alasA</p><input type="number" name="alasA"  placehorder="Ex.5"/>
    <p>alasB</p><input type="number" name="alasB"  placehorder="Ex.5"/>
    <p>tinggi</p><input type="number" name="tinggi"  placehorder="Ex.5"/><br>
    <p>KELILING :</p>
    <p>sisiAB<p><input type="number" name="sisiAB"  placehorder="Ex.5"/>
    <p>sisiBC</p><input type="number" name="sisiBC"  placehorder="Ex.5"/>
    <p>sisiCD</p><input type="number" name="sisiCD"  placehorder="Ex.5"/>
    <p>sisiDA</p><input type="number" name="sisiDA"  placehorder="Ex.5"/><br><br>
    <input type="submit" name="proses"  value="hitung luas"
    />
</from>

<?php
if ( isset($_POST["proses"]) ) {
    echo "<hr>";
    $alasA = $_POST["alasA"];
    $alasB = $_POST["alasB"];
    $tinggi = $_POST["tinggi"];
    $sisiAB = $_POST["sisiAB"];
    $sisiBC = $_POST["sisiBC"];
    $sisiCD = $_POST["sisiCD"];
    $sisiDA = $_POST["sisiDA"];
    $luas = 1/2 * ($alasA + $alasB ) * $tinggi;
    $keliling = $sisiAB + $sisiBC + $sisiCD + $sisiDA;
    echo "Luas trapesium : $luas <br>";
    echo "Keliling trapesium : $keliling <br>";
}