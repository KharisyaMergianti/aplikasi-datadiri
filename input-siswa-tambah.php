<h1>Tambah Data</h1>
<form action="input-datadiri-tambah.php" method="POST">
    <label for="nis">Nomor Induk Siswa :</label><br>
    <input type="number" name="nis" placeholder="Ex.12003456"/><br>

    <label for="namalengkap">Nama Lengkap :</label><br>
    <input type="text" name="nama" placeholder="Ex.Kharisya"/><br>

    <label for="kelas">Kelas :</p>
    <input type="text" name="kelas"/>

    <label for="nilai_kehadiran">Nilai Kehadiran</label><br>
    <input type="number" name="nilaikehadiran" placeholder="Ex.99.99" /><br>
    <label for="nilai_tugas">Nilai Tugas</label><br>
    <input type="number" name="nilaitugas" placeholder="Ex.99.99" /><br>
    <label for="nilai_uts">Nilai UTS</label><br>
    <input type="number" name="nilaiuts" placeholder="Ex.99.99" /><br>
    <label for="nilai_uas">Nilai UAS</label><br>
    <input type="number" name="nilaiuas" placeholder="Ex.99.99" /><br>
    <label for="nilaiakhir">Nilai Akhir</label><br>
    <input type="number" name="nilaiakhir" placeholder="Ex.99.99" /><br>
    <input type="submit" name="simpan" value="Simpan Data"/>
    <a href="input-siswakharisya.php">Kembali</a><br>
    
</form>

<?php
    if( isset($_POST["simpan"]) ){
        $nis = $_POST["nis"];
        $namalengkap = $_POST["namalengkap"];
        $kelas = $_POST["kelas"];
        $nilaikehadiran = $_POST["nilaikehadiran"];
        $nilaitugas = $_POST["nilaitugas"];
        $nilaiuts = $_POST["nilaiuts"];
        $nilaiuas = $_POST["nilaiuas"];
        $nilaiakhir = $_POST["nilaiakhir"];

        // CREATE - Menambahkan Data ke Database
        $query = "
                INSERT INTO datadiri VALUES
                ('$nis', '$nama', '$kelas',  '$nilaikehadiran', '$nilaitugas', '$nilaiuts', '$nilaiuas', '$nilaiakhir');
        ";
        
        include ('./input-config.php');
        $insert = mysqli_query($mysqli, $query);

        if ($insert){
            echo "
                <script>
                    alert('Data berhasil ditambahkan');
                    window.location='input-datadiri.php';
                </script>
            ";
        }
    }