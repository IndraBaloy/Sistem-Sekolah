<?php 
include "koneksi.php"; 
$kd_matpel = $_GET['kd_matpel']; 
$sql = "Select * From matpel where kd_matpel='$kd_matpel'"; 
$result = mysqli_query($koneksi, $sql); 
 
$row = mysqli_fetch_array($result); 
 
?>


<!DOCTYPE html>
<html>

<head>
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384
QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384
YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                aria-expanded="false">Master Data</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="guru_view.php">GURU</a></li>
                <li><a class="dropdown-item" href="siswa_view.php">SISWA</a></li>
                <li><a class="dropdown-item" href="komp_view.php">Kompetensi</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Nilai</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Logout.php">Logout</a>
        </li>
    </ul>
    <div class="container">
        <h2>EDIT KOMPETENSI</h2>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Kode matpel</label>
                <input type="text" class="form-control" name="kd_matpel" value='<?php echo $row['kd_kompetensi'];?>'
                    placeholder="Masukkan Kode matpel" readonly>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Matpel</label>
                <input type="text" class="form-control" name="nama_matpel" value='<?php echo $row['nama_matpel'];?>'
                    placeholder="Masukkan nama matpel">
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah Jam</label>
                <input type="text" class="form-control" name="jumlah_jam" value='<?php echo $row['jumlah_jam'];?>'
                    placeholder="Masukkan jumlah Jam">
            </div>
            <div class="mb-3">
                <label class="form-label">Tingkat</label>
                <input type="text" class="form-control" name="tingkat" value='<?php echo $row['tingkat'];?>'
                    placeholder="Masukkan tingkat">
            </div>
            <div class="mb-3">
                <label class="form-label">Kode Kompetensi</label>
                <input type="text" class="form-control" name="kd_kompetensi" value='<?php echo $row['kd_kompetensi'];?>'
                    placeholder="Masukkan Kode matpel">
            </div>
            <div class="mb-3">
                <label class="form-label">NIP</label>
                <input type="text" class="form-control" name="nip" value='<?php echo $row['nip'];?>'
                    placeholder="Masukkan Kode matpel">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Kirim">
            </div>
        </form>
    </div>
    <?php 
include "koneksi.php"; 

if (isset($_POST['submit'])) { 
    $kd_kompetensi = mysqli_real_escape_string($koneksi, $_POST['kd_kompetensi']); 
    $nama_kompetensi = mysqli_real_escape_string($koneksi, $_POST['nama_kompetensi']);  
    $prog_keahlian = mysqli_real_escape_string($koneksi, $_POST['prog_keahlian']); 
    
    $sql = "UPDATE kompetensi SET nama_kompetensi='$nama_kompetensi', prog_keahlian='$prog_keahlian' WHERE kd_kompetensi='$kd_kompetensi'"; 
    $result = mysqli_query($koneksi, $sql); 
    
    if ($result) { 
        header('Location: komp_view.php'); 
    } else { 
        echo "Gagal tersimpan: " . mysqli_error($koneksi); 
    } 
} 
?>


</body>

</html>