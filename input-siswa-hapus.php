<?php
    if ( isset($_GET["nis"]) ){
        $nis = $_GET["nis"];

            //DELETE - Menghapus Data 

        $query = "
            DELETE FROM datadiri
            WHERE nis = '$nis';
        ";
        
        include('./input-config.php');
        $delete = mysqli_query($mysqli, $query);

        if ($delete){
            echo "
                <script>
                alert('Data berhasil dihapus');
                window.location='input-siswakharisya.php';
                </script>
            ";
        }else{
            echo " 
            <script>
            alert('Data berhasil dihapus');
            window.location='input-siswakharisya.php';
            </script>
        ";
            "
        }
          }
?>