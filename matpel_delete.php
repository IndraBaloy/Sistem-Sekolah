<?php 
include "koneksi.php"; 
$kd_matpel = $_GET['kd_matpel']; 
$sql = "DELETE From matpel where kd_matpel='$kd_matpel'"; 
$result = mysqli_query($koneksi, $sql); 
 
if($result){ 
 header('location:matpel_view.php'); 
}else{ 
 echo "Gagal terhapus"; 
} 
?>