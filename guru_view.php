<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container pt-5">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center">DATA GURU</h2>
                <table class="table table-hover">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tgl Lahir</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No HP</th>
                            <th scope="col">Pendidikan</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php 
            include "koneksi.php"; 
            $sql    = "Select * From guru"; 
            $result = mysqli_query($koneksi, $sql); 
        
            while ($row=mysqli_fetch_array($result)) { 
                echo "<tr> 
                <td>$row[nip]</td> 
                <td>$row[nama_guru]</td> 
                <td>$row[tempat_lahir]</td> 
                <td>$row[tgl_lahir]</td> 
                <td>$row[jenkel]</td> 
                <td>$row[alamat]</td> 
                <td>$row[no_hp]</td> 
                <td>$row[pend_akhir]</td> 
                <td><a href='guru_edit.php?nip=$row[nip]'>EDIT</a> | <a href='guru_delete.php?nip=$row[nip]'>DELETE</a></td> 
                </tr>"; 
            } 
            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="d-grid gap-2 col-2 m-4 mx-auto">
        <a class="btn btn-primary p-2" href="guru_add.php" role="button">Tambah Data</a>
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>