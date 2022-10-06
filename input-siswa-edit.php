<?php
    if ( isset($_GET["nis"]) ){
        $nis = $_GET["nis"];
        $check_nis = "SELECT * FROM nilai WHERE nis = '$nis'; ";
        include('./siswa-config.php');
        $query = mysqli_query($mysqli, $check_nis);
        $row = mysqli_fetch_array($query);
    }
?>
<h1>Edit Data</h1>
<form action="input-siswa-edit.php" method="POST">
    <label for="nis">Nomor Induk Siswa :</label><br>
    <input value="<?php echo $row["nis"]; ?>" type="number" name="nis" placeholder="Ex.12003456" readonly/><br>

    <label for="nama_lengkap">Nama Lengkap :</label><br>
    <input value="<?php echo $row["nama_lengkap"]; ?>" type="text" name="nama_lengkap" placeholder="Ex.Kharisya"/><br>

    <label for="kelas">Kelas :</p>
    <input value="<?php echo $row["kelas"]; ?>" type="text" name="kelas"/><br>

    <label for="nilai">Nilai Kehadiran</label><br>
    <input value="<?php echo $row["nilai_kehadiran"]; ?>" type="number" name="nilai_kehadiran" placeholder="Ex.99.99" /><br>

    <label for="nilai">Nilai Tugas</label><br>
    <input value="<?php echo $row["nilai_tugas"]; ?>" type="number" name="nilai_tugas" placeholder="Ex.99.99" /><br>

    <label for="nilai">Nilai UTS</label><br>
    <input value="<?php echo $row["nilai_uts"]; ?>" type="number" name="nilai_uts" placeholder="Ex.99.99" /><br>

    <label for="nilai">Nilai UAS</label><br>
    <input value="<?php echo $row["nilai_uas"]; ?>" type="number" name="nilai_uas" placeholder="Ex.99.99" /><br>
    <br>
    <input type="submit" name="edit" value="Edit Data"/>
    <a href="input-siswakharisya.php">Kembali</a><br>
    
</form>

<?php
    if( isset($_POST["edit"]) ){
        $nis = $_POST["nis"];
        $nama_lengkap = $_POST["nama_lengkap"];
        $kelas = $_POST["kelas"];
        $nilai_kehadiran = $_POST["nilai_kehadiran"];
        $nilai_tugas = $_POST["nilai_tugas"];
        $nilai_uts = $_POST["nilai_uts"];
        $nilai_uas = $_POST["nilai_uas"];

        // EDIT - Membaharui Data 
        $query = "
                UPDATE nilai SET nama_lengkap = '$nama_lengkap',
                kelas = '$kelas',
                nilai_kehadiran = '$nilai_kehadiran',
                nilai_tugas = '$nilai_tugas',
                nilai_uts = '$nilai_uts',
                nilai_uas = '$nilai_uas'
                WHERE nis = '$nis';
        ";
        

        include ('./siswa-config.php');
        $update = mysqli_query($mysqli, $query);

        if ($update){
            echo "
                <script>
                alert('Data berhasil ditambahkan');
                window.location='input-siswakharisya.php?nis=$nis';
                </script>
            ";
        }else{
            echo "
                <script>
                alert('Data gagal');
                window.location='input-siswa-edit.php?nis=$nis';
                </script>
            ";
        }
    }