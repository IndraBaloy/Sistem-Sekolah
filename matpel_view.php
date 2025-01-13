<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--bootstrap icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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

    <h2>DATA Mata Pelajaran</h2>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Kode MAtpel</th>
                <th scope="col">Nama matpel</th>
                <th scope="col">jumlah jam</th>
                <th scope="col">tingkat</th>
                <th scope="col">kode kompetensi</th>
                <th scope="col">nip</th>
        </thead>
        <tbody>
            <?php 
      include "koneksi.php"; 
      $sql    = "Select * From matpel"; 
      $result = mysqli_query($koneksi, $sql); 
  
      while ($row=mysqli_fetch_array($result)) { 
        echo "<tr> 
        <td>$row[kd_matpel]</td> 
        <td>$row[nama_matpel]</td> 
        <td>$row[jumlah_jam]</td>  
        <td>$row[tingkat]</td>  
        <td>$row[kd_kompetensi]</td>  
        <td>$row[nip]</td>  
        <td><a href='matpel_edit.php?kd_matpel=$row[kd_matpel]'>EDIT</a> | <a 
  href='matpel_delete.php?kd_matpel=$row[kd_matpel]'>DELETE</a></td> 
        </tr>"; 
      } 
      ?>
        </tbody>
    </table>
    <div class="d-grid gap-2 col-6 mx-auto">
        <a class="btn btn-primary" href="matpel_add.php" role="button">Tambah Data</a>
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>