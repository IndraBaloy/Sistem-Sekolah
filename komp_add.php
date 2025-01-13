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
                <h2 class="text-center">TAMBAH KOMPETENSI</h2>
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Kode Kompetensi</label>
                        <input type="text" class="form-control" name="kd_kompetensi"
                            placeholder="Masukkan Kode Kompetensi">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Kompetensi</label>
                        <input type="text" class="form-control" name="nama_kompetensi"
                            placeholder="Masukkan Nama Kompetensi">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Program Keahlian</label>
                        <input type="text" class="form-control" name="prog_keahlian"
                            placeholder="Masukkan Program Keahlian">
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-center">
                        <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Kirim">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php 
        include "koneksi.php"; 
        if(isset($_POST['submit'])){ 
            $kd_kompetensi    = $_POST['kd_kompetensi']; 
            $nama_kompetensi    = $_POST['nama_kompetensi']; 
            $prog_keahlian  = $_POST['prog_keahlian']; 
            
            $sql  = "INSERT INTO kompetensi 
            values('$kd_kompetensi','$nama_kompetensi','$prog_keahlian')"; 
            $result = mysqli_query($koneksi,$sql); 
            
            if($result){ 
            header('location:komp_view.php'); 
            }else{ 
            echo "Gagal tersimpan"; 
            } 
        } 
    ?>

</body>

</html>