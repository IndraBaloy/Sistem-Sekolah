<?php 
    include "koneksi.php"; 
    $kd_kompetensi = $_GET['kd_kompetensi']; 
    $sql = "DELETE From kompetensi where kd_kompetensi='$kd_kompetensi'"; 
    $result = mysqli_query($koneksi, $sql); 
    
    if ($result){
        echo "
        <script>
        alert ('Berhasil Hapus data!');
        document.location.href = 'komp_view.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert ('Gagal Hapus data!');
        document.location.href = 'komp_view.php';
        </script>
        ";
    }
?>