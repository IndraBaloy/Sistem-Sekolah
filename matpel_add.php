<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Menambah Data</title>
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
                <li><a class="dropdown-item" href="#">SISWA</a></li>
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
        <h2>TAMBAH MATA PELAJARAN</h2>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Kode Mata Pelajaran</label>
                <input type="text" class="form-control" name="kd_matpel" placeholder="Masukkan 
Matpel">
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Matpel</label>
                <input type="text" class="form-control" name="nama_matpel" placeholder="Masukkan 
Nama matpel">
            </div>
            <div class="mb-3">
                <label class="form-label">jumlah jam</label>
                <input type="text" class="form-control" name="jumlah_jam" placeholder="Masukkan jumlah jam">
            </div>
            <div class="mb-3">
                <label class="form-label">tingkat</label>
                <input type="text" class="form-control" name="tingkat" placeholder="Masukkan tingkat">
            </div>
            <div class="mb-3">
                <label class="form-label">Kode Kompetensi</label>
                <select class="form-select" name="kd_kompetensi" aria-label="Default select example">
                    <?php
                    $sql = "SELECT * FROM kompetensi";
                    $p = mysqli_query($koneksi,$sql);
                    while ($row = mysqli_fetch_array($p)){
                        echo "<option value=" . $row['kd_kompetensi'] . ">
                        " . $row['kd_kompetensi'] . " - " . $row['nama_kompetensi'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">NIP</label>
                <select class="form-select" name="nip" aria-label="Default select example">
                    <?php
                    $sql = "SELECT * FROM guru";
                    $p = mysqli_query($koneksi,$sql);
                    while ($row = mysqli_fetch_array($p)){
                        echo "<option value=" . $row['nip'] . ">
                        " . $row['nip'] . " - " . $row['nama_guru'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Kirim">
            </div>
        </form>
    </div>
    <?php
    if(isset($_POST['submit'])){ 
        $kd_matpel    = $_POST['kd_matpel']; 
        $nama_matpel    = $_POST['nama_matpel']; 
        $jumlah_jam    = $_POST['jumlah_jam']; 
        $tingkat    = $_POST['tingkat']; 
        $kd_kompetensi    = $_POST['kd_kompetensi']; 
        $nip    = $_POST['nip']; 
        
        $sql  = "INSERT INTO matpel 
        values('$kd_matpel','$nama_matpel','$jumlah_jam','$tingkat','$kd_kompetensi','$nip')"; 
        $result = mysqli_query($koneksi,$sql); 
        
        if($result){ 
          header('location:matpel_view.php'); 
        }else{ 
          echo "Gagal tersimpan"; 
        } 
      } 
    ?>

</body>

</html>