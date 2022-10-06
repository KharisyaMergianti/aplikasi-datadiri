<?php
    include('./siswa-config.php');
    echo "<a href='input-siswa-tambah.php'>Tambah Data</a>";
    echo "<hr>";

    // READ - Menampilkan data diri dari database
    $tabledata = "";
    $data = mysqli_query($mysqli,"SELECT * FROM nilai ");
    while($row = mysqli_fetch_array($data)){

        $nilai_akhir=(
            $row["nilai_kehadiran"] +
            $row ["nilai_tugas"] + 
            $row["nilai_uts"] + 
            $row["nilai_uas"])/4;
        $tabledata .= "
            <tr>
                <td>".$row["nis"]."</td>
                <td>".$row["nama_lengkap"]."</td>
                <td>".$row["kelas"]."</td>

                <td>".$row["nilai_kehadiran"]."</td>
                <td>".$row["nilai_tugas"]."</td>
                <td>".$row["nilai_uts"]."</td>
                <td>".$row["nilai_uas"]."</td>

                <td>".$nilai_akhir."</td>
                <td>
                    <a href='input-siswa-edit.php?nis=".$row["nis"]."'>Edit</a>
                    &nbsp;-&nbsp;
                    <a href='input-siswa-edit.php?nis=".$row["nis"]."' onclick='return confirm_delete(/'Yakin Dek?=".$row["nis"]."'>Hapus</a>
                </td>
            </tr>
        ";
        
    }

    echo "
        <table cellpading=5 border=1 cellspacing=0>
            <tr>
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Kelas</th>
                <th>Nilai Kehadiran</th>
                <th>Nilai Tugas</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Akhir</th>
                <th>Aksi</th>
            </tr>
            $tabledata
        </table>
    ";
?>