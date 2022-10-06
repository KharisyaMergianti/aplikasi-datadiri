<?php
    include('./config-kwu.php');
    echo "<a href='input-kwu-tambah.php'>Tambah Data</a>";
    echo "<hr>";

    // READ - Menampilkan data diri dari database
    $tabledata = "";
    $data = mysqli_query($mysqli,"SELECT * FROM transaksi ");
    while($row = mysqli_fetch_array($data)){

        $totalhargabeli = ($row ["qty"] * $row ["hargabeli"]);
        $totalhargajual = ($row ["qty"] * $row ["hargajual"]);
        $laba = ($totalhargajual - $totalhargabeli);

        $tabledata .= "
            <tr>
                <td>".$row["kodebarang"]."</td>
                <td>".$row["tanggal"]."</td>
                <td>".$row["pembeli"]."</td>
                <td>".$row["namabarang"]."</td>
                <td>".$row["qty"]."</td>
                <td>".$row["hargabeli"]."</td>
                <td>".$row["hargajual"]."</td>
                <td>".$totalhargabeli."</td>
                <td>".$totalhargajual."</td>
                <td>".$laba."</td>
                <td>
                    <a href='input-kwu-edit.php?kodebarang=".$row["kodebarang"]."'>Edit</a>
                    &nbsp;-&nbsp;
                    <a href='input-kwu-hapus.php?kodebarang=".$row["kodebarang"]."' onclick='return confirm(\"Yakin Untuk Hapus ?\");'>Hapus</a>
                </td>
            </tr>
        ";
        
    }

    echo "
        <table cellpading=5 border=1 cellspacing=0>
            <tr>
                <th>Kode Barang</th>
                <th>Tanggal</th>
                <th>Pembeli</th>
                <th>Nama Barang</th>
                <th>QTY</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Total Harga Beli</th>
                <th>Total Harga Jual</th>
                <th>Laba</th>
                <th>Aksi</th>
            </tr>
            $tabledata
        </table>
    ";
?>