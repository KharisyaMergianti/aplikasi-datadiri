<?php
    if ( isset($_GET["kodebarang"]) ){
        $kodebarang = $_GET["kodebarang"];
        $check_kodebarang = "SELECT * FROM transaksi WHERE kodebarang = '$kodebarang'; ";
        include('./config-kwu.php');
        $query = mysqli_query($mysqli, $check_kodebarang);
        $row = mysqli_fetch_array($query);
    }
?>
<h1>Edit Data</h1>
<form action="input-kwu-edit.php" method="POST">
    <label for="kodebarang">Kode Barang :</label><br>
    <input value="<?php echo $row["kodebarang"]; ?>" type="number" name="kodebarang" placeholder="Ex.12003456" readonly/><br>

    <label for="tanggal">Tanggal :</label><br>
    <input value="<?php echo $row["tanggal"]; ?>" type="date" name="tanggal"/><br>

    <label for="pembeli">Pembeli :</p>
    <input value="<?php echo $row["pembeli"]; ?>" type="text" name="pembeli"/><br>

    <label for="namabarang">Nama Barang :</label><br>
    <input value="<?php echo $row["namabarang"]; ?>" type="text" name="namabarang" placeholder="Ex.sabun" /><br>

    <label for="qty">QTY</label><br>
    <input value="<?php echo $row["qty"]; ?>" type="number" name="qty" /><br>

    <label for="hargabeli">Harga Beli</label><br>
    <input value="<?php echo $row["hargabeli"]; ?>" type="number" name="hargabeli"/><br>

    <label for="hargajual">Harga Jual</label><br>
    <input value="<?php echo $row["hargajual"]; ?>" type="number" name="hargajual"/><br>
    <br>
    <input type="submit" name="edit" value="Edit Data"/>
    <a href="input-kwu.php">Kembali</a><br>
    
</form>

<?php
    if( isset($_POST["edit"]) ){
        $kodebarang = $_POST["kodebarang"];
        $tanggal = $_POST["tanggal"];
        $pembeli = $_POST["pembeli"];
        $namabarang = $_POST["namabarang"];
        $qty = $_POST["qty"];
        $hargabeli = $_POST["hargabeli"];
        $hargajual = $_POST["hargajual"];

        // EDIT - Membaharui Data 
        $query = "
                UPDATE transaksi SET tanggal = '$tanggal',
                pembeli = '$pembeli',
                namabarang = '$namabarang',
                qty = '$qty',
                hargabeli = '$hargabeli',
                hargajual = '$hargajual'
                WHERE kodebarang = '$kodebarang'
        ";
        

        include ('./config-kwu.php');
        $update = mysqli_query($mysqli, $query);

        if ($update){
            echo "
                <script>
                alert('Data berhasil ditambahkan');
                window.location='input-kwu.php?kodebarang=$kodebarang';
                </script>
            ";
        }else{
            echo "
                <script>
                alert('Data gagal');
                window.location='input-kwu-edit.php?kodebarang=$kodebarang';
                </script>
            ";
        }
    }