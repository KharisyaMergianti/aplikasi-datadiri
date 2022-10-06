<form action="input-siswa.php" method="POST">
    <label for="nis">Nomor Induk Siswa :</label>
    <input type="number" name="nis" placeholder="Ex.12003456"/><br><br>

    <label for="nama">Nama Lengkap :</label>
    <input type="text" name="nama" placeholder="Ex.Kharisya"/><br><br>

    <label for="jk">Jenis Kelamin :</p>
    <input type="checkbox" name="jk" value="L"/>Laki - Laki
    <input type="checkbox" name="jk" value="P"/>Perempuan<br><br>

    <label for="kelas">Kelas :</label>
    <input type="text" name="kelas" placeholder="Ex. 11 RPL 2"/><br><br>

    <label for="tanggal_lahir">Tanggal Lahir :</p>
    <input type="date" name="tanggal_lahir"/><br><br>

    <label for="alamat">Alamat:</p>
    <textarea name="alamat" placeholder="Ex. Jl.Arief Rahman"></textarea><br><br>

    <label for="eskul">Ekstrakurikuler :</p>
    <select name="eskul">
        <option>Pramuka</option>
        <option>Paskibra</option>
        <option>BTQ</option>
        <option>Futsal</option>
        <option>Basketball</option>
        <option>Marching Band</option>
</select><br><br>

<label for="nilai">Nilai</label>
<input type="number" name="nilai" placeholder="Ex.99.99" /><br><br>

<input type="submit" name="simpan" value="Simpan Data"/>
<input type="reset" name="reset" value="Reset Input"/><br>

</form>    

<?php
if(isset($_POST["simpan"]) ) {
    echo "<hr>";

    // Deklarasi Variabel
    $nis = $_POST["nis"];
    $namalengkap = $_POST["nama"];
    $jeniskelamin = $_POST["jk"];
    $kelas = $_POST["kelas"];
    $tanggal_lahir = date('l, d F Y', strtotime($_POST["tanggal_lahir"]));
    $alamat = $_POST["alamat"];
    $eskul = $_POST["eskul"];
    $nilai = $_POST["nilai"];

    if ($nilai >= 78) {
        $status = "Lulus";
    }else {
        $status = "Belum Lulus";
    }

    //Tampil Data Variabel
    echo "
        Hasil Inputan Sebagai Berikut : <br>
        Nomor Induk Siswa : $nis <br>
        Nama Lengkap : $namalengkap <br>
        Jenis Kelamin : $jeniskelamin <br>
        Kelas : $kelas <br>
        Tanggal Lahir : $tanggal_lahir <br>
        Alamat : $alamat <br>
        Ekstrakurikuler : $eskul <br>
        Nilai : $nilai <br>
        Status Kelulusan : $status <br>
    "; 
}