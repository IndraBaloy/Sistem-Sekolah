<?php 
    include "koneksi.php"; 
    $nip = $_GET['nip']; 
    $sql = "DELETE From guru where nip='$nip'"; 
    $result = mysqli_query($koneksi, $sql); 
    
    if($result){ 
    header('location:guru_view.php'); 
    }else{ 
    echo "Gagal terhapus"; 
    } 
?>