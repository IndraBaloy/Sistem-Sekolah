<?php 
include "koneksi.php"; 

// Periksa apakah 'nip' ada dalam array $_GET
if (isset($_GET["nip"])) {
    $nip = mysqli_real_escape_string($koneksi, $_GET["nip"]);
    
    // Membuat pernyataan SQL
    $sql = "SELECT * FROM guru WHERE nip='$nip'"; 
    
    $result = mysqli_query($koneksi, $sql);  
    
    // Periksa apakah query berhasil
    if (!$result) {
        // Logging error SQL
        echo "Query gagal: " . mysqli_error($koneksi);
        exit;
    }

    $row = mysqli_fetch_array($result);

    // Periksa apakah data ditemukan
    if (!$row) {
        echo "Tidak ada data yang ditemukan.";
    } else {
        // Proses data jika ditemukan
        // Misalnya: echo $row['nama'];
    }
} else {
    echo "NIP tidak ditemukan dalam URL.";
    exit;
}
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
                <h3 class="text-center">EDIT GURU</h3>
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">NIP</label>
                        <input type="text" class="form-control" name="nip" value='<?php echo $row['nip'];?>'
                            placeholder="Masukkan NIM">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama_guru" value='<?php echo $row['nama_guru'];?>'
                            placeholder="Masukkan Nama">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir"
                            value='<?php echo $row['tempat_lahir'];?>' placeholder="Masukkan Tempat Lahir">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tgl Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" value='<?php echo $row['tgl_lahir'];?>'
                            placeholder="Masukkan Tgl Lahir">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <select class="form-select" name="jenkel" aria-label="Default select example">
                            <option selected>Pilih Menu</option>
                            <option <?php echo $row['jenkel']=='L'?"selected":"" ?> value="L">Laki
                                Laki</option>
                            <option <?php echo $row['jenkel']=='P'?"selected":"" ?> value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea class="form-control" rows="3" name="alamat"><?php echo 
$row['alamat']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No HP</label>
                        <input type="text" class="form-control" name="no_hp" value="<?php echo 
$row['no_hp']; ?>" placeholder="No HP">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pendidikan</label>
                        <input type="text" class="form-control" name="pend_akhir" value="<?php echo 
$row['pend_akhir']; ?>" placeholder="Pendidikan">
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

if (isset($_POST['submit'])) { 
    $nip = mysqli_real_escape_string($koneksi, $_POST['nip']); 
    $nama_guru = mysqli_real_escape_string($koneksi, $_POST['nama_guru']); 
    $tempat_lahir = mysqli_real_escape_string($koneksi, $_POST['tempat_lahir']); 
    $tgl_lahir = mysqli_real_escape_string($koneksi, $_POST['tgl_lahir']); 
    $jenkel = mysqli_real_escape_string($koneksi, $_POST['jenkel']); 
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']); 
    $no_hp = mysqli_real_escape_string($koneksi, $_POST['no_hp']); 
    $pend_akhir = mysqli_real_escape_string($koneksi, $_POST['pend_akhir']); 
    
    $sql = "UPDATE guru SET 
            nama_guru='$nama_guru',
            tempat_lahir='$tempat_lahir',
            tgl_lahir='$tgl_lahir',
            jenkel='$jenkel',
            alamat='$alamat',
            no_hp='$no_hp',
            pend_akhir='$pend_akhir' 
            WHERE nip='$nip'"; 

    $result = mysqli_query($koneksi, $sql); 
    
    if ($result) { 
        header('Location: guru_view.php'); 
    } else { 
        echo "Gagal tersimpan: " . mysqli_error($koneksi); 
    } 
} 
?>


</body>

</html>