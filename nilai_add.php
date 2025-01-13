<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Menambah Data Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384
QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384
YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid mx-3">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Master Data
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="guru_view.php">Guru</a></li>
                            <li><a class="dropdown-item" href="siswa_view.php">Siswa</a></li>
                            <li><a class="dropdown-item" href="komp_view.php">Kompetensi</a></li>
                            <li><a class="dropdown-item" href="nilai_view.php">Nilai</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card m-5">
            <div class="card-body">
                <h2 class="text-center">TAMBAH NILAI</h2>
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Kode nilai</label>
                        <input type="text" class="form-control" name="kd_nilai" placeholder="Masukkan nilai">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">NIS</label>
                        <select class="form-select" name="nis" aria-label="Default select example">
                            <?php
                    $sql = "SELECT * FROM siswa";
                    $p = mysqli_query($koneksi,$sql);
                    while ($row = mysqli_fetch_array($p)){
                        echo "<option value=" . $row['nis'] . ">
                        " . $row['nis'] . " - " . $row['nama_siswa'] . "</option>";
                    }
                    ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kode Matpel</label>
                        <select class="form-select" name="kd_matpel" aria-label="Default select example">
                            <?php
                    $sql = "SELECT * FROM matpel";
                    $p = mysqli_query($koneksi,$sql);
                    while ($row = mysqli_fetch_array($p)){
                        echo "<option value=" . $row['kd_matpel'] . ">
                        " . $row['kd_matpel'] . " - " . $row['nama_matpel'] . "</option>";
                    }
                    ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nilai P</label>
                        <input type="text" class="form-control" name="nilai_p" placeholder="Masukkan nilai P">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nilai K</label>
                        <input type="text" class="form-control" name="nilai_k" placeholder="Masukkan nilai K">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Semester</label>
                        <input type="text" class="form-control" name="semester" placeholder="Masukkan Semester">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tahun Pelajaran</label>
                        <input type="text" class="form-control" name="tapel" placeholder="Masukkan Tahun Pelajaran">
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-center">
                        <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Kirim">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
        if(isset($_POST['submit'])){ 
            $kd_nilai    = $_POST['kd_nilai']; 
            $nis         = $_POST['nis']; 
            $kd_matpel   = $_POST['kd_matpel']; 
            $nilai_p     = $_POST['nilai_p']; 
            $nilai_k     = $_POST['nilai_k']; 
            $semester    = $_POST['semester']; 
            $tapel       = $_POST['tapel']; 
            
            $sql  = "INSERT INTO nilai 
            values('$kd_nilai','$nis','$kd_matpel','$nilai_p','$nilai_k','$semester','$tapel')"; 
            $result = mysqli_query($koneksi,$sql); 
            
            if($result){ 
            header('location:nilai_view.php'); 
            }else{ 
            echo "Gagal tersimpan"; 
            } 
        } 
    ?>

</body>

</html>