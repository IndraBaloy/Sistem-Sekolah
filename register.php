<?php
include "koneksi.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
.container-fluid {
    height: 120vh;
    background: rgb(145, 145, 255);
    background: linear-gradient(180deg, rgba(145, 145, 255, 1) 0%, rgba(91, 91, 166, 1) 100%);
}

.card {
    margin-top: 30px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

h4 {
    text-align: center;
}

input {
    margin-top: 5px;
    margin-bottom: 5px;
}

input.btn {
    width: 100%;
    background-color: #9191ff;
    border-radius: 8px;
    margin-top: 15px;
    color: #fff;
}

input.btn:hover {
    border: 2px solid #9191ff;
}

p {
    margin: 0;
    padding-top: 5px;
}

a {
    text-decoration: none;
    color: #000;
}
</style>

<body>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <h4>Login</h4>
                            <form action="loginregis.php" method="POST">
                                <label for="nama_user">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Masukkan Password">
                                <label for="confirm_pass">Konfirmasi Password</label>
                                <input type="password" class="form-control" name="confirm_pass"
                                    placeholder="Masukkan Konfirmasi Password">
                                <input href="#" type="submit" class="btn" name="submitregist" value="Registrasi">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>