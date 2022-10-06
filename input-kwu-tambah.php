<h1>Tambah Data</h1>
<form action="input-kwu-tambah.php" method="POST">
    <label for="kodebarang">Kode Barang :</label><br>
    <input type="number" name="kodebarang" placeholder="Ex.12003456"/><br>

    <label for="tanggal">Tanggal :</label><br>
    <input type="date" name="tanggal"/><br>

    <label for="pembeli">Pembeli :</p>
    <input type="text" name="pembeli" placeholder="Ex.kharisya"/><br>

    <label for="namabarang">Nama Barang</label><br>
    <input type="text" name="namabarang" placeholder="Ex.sabun" /><br>
    <label for="qty">QTY</label><br>
    <input type="number" name="qty" /><br>
    <label for="hargabeli">Harga Beli</label><br>
    <input type="number" name="hargabeli"/><br>
    <label for="hargajual">Harga Jual</label><br>
    <input type="number" name="hargajual"/><br>
    
    <input type="submit" name="simpan" value="Simpan Data"/>
    <a href="input-kwu.php">Kembali</a><br>
    
</form>

<?php
    if( isset($_POST["simpan"]) ){
        $kodebarang = $_POST["kodebarang"];
        $tanggal = $_POST["tanggal"];
        $pembeli = $_POST["pembeli"];
        $namabarang = $_POST["namabarang"];
        $qty = $_POST["qty"];
        $hargabeli = $_POST["hargabeli"];
        $hargajual = $_POST["hargajual"];
        

        // CREATE - Menambahkan Data ke Database
        $query = "
                INSERT INTO transaksi VALUES
                ('$kodebarang', '$tanggal', '$pembeli',  '$namabarang', '$qty', '$hargabeli', '$hargajual');
        ";
        
        include ('./config-kwu.php');
        $insert = mysqli_query($mysqli, $query);

        if ($insert){
            echo "
                <script>
                    alert('Data berhasil ditambahkan');
                    window.location='input-kwu.php';
                </script>
            ";
        }
    }