<form action="post.php" method="POST">
    <input type="text" name="namalengkap" placeholder="Ex. Kharisya" /><br>
    <input type="text" name="kelas" placeholder="Ex. 11 RPL 2" /><br>
    <input type="number" name="nisn" placeholder="Ex. 00061234" /><br>
    <input type="submit" name="simpan" value="simpan data" />
</form>

<?php
if (isset($_POST ["simpan"]) ) {
    echo "<hr>";

    $nama = $_POST ["namalengkap"];
    $kelas = $_POST ["kelas"];
    $nisn = $_POST ["nisn"];
    echo "Nama Lengkap : $nama <br>";
    echo "Kelasnya : $kelas <br>";
    echo "NISN : $nisn <br>";
}
