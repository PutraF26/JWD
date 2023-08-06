<?php
include "config.php";

if (isset($_POST["tambah"])) {
    // cek keberhasilan query
    if (DaftarMahasiswa($_POST) <=3 ) {
        echo "<script>
        alert('data berhasil ditambah');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal diinputkan!');
        document.location.href = 'index.php';
        </script>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pendaftaran beasiswa online</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- External -->
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Logo or Brand -->
            <a class="navbar-brand" href="#">Beasiswa</a>

            <!-- First Navigation Menu for Pemesanan Tiket -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Pendaftaran Beasiswa</a>
                </li>
            </ul>

            <!-- Second Navigation Menu for Daftar Pesanan -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="dp.php">Hasil Pendafatar Beasiswa</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Header -->
    <div class="container">
        <div class="container py-5">
            <h1 class="text-center">DaftarBeasiswa</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
                <div class="col">
                    <div class="card">
                      
                        <div class="card-body">
                            <h5 class="card-title">Beasiswa Akademik</h5>
                            <p class="card-text">akademik merupakan kata sifat yang mengacu kepada ilmu pengetahuan atau segala sesuatu yang bersifat ilmiah.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-around">                       
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservationModal"
                                value="Akademik">Daftar</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
        
                        <div class="card-body">
                            <h5 class="card-title">Beasiswa Non Akademik</h5>
                            <p class="card-text">non akademik merujuk pada kemampuan seseorang yang terlepas dari kecerdasan intelektualnya.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-around">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservationModal"
                                value="Non Akademik">Daftar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Form -->
    <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reservationModalLabel">Form Pendaftaran</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST">
                    <div class="modal-body">
                        <!-- Your form goes here -->
                        <div class="form-group">
                            <label for="nama">Masukan Nama:</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda">
                        </div>
                        <div class="form-group">
                            <label for="email">Masukan Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="nohp">No Hp</label>
                            <input type="number" class="form-control" id="nohp" name="nohp" placeholder="Masukkan nomor hp Anda">
                        </div>

                        <div class="form-group">
                            <label for="semster">Semester Saat Ini:</label>
                         <select name="semester" type="text" class="form-control" id="semster" name="semster" placeholder="Masukkan semester Anda">
                            <option value="">Pilih Semester</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                         </select>
                        </div>

                        <div class="form-group">
                            <label for="ipk">IPK:</label>
                            <input type="text" class="form-control" id="ipk" name="ipk" name="ipk" required>
                        </div>

                        <div class="form-group">
                         <label for="pilihbhs">Pilihan Beasiswa:</label>
                     <select name="pilihbhs" type="text" class="form-control" id="pilihbhs" name="pilihbhs" placeholder="Pilih bahasa Anda">
                            <option value="">Pilih Semester</option>
                            <option value="Beasiswa Akademik">Beasiswa Akademik</option>
                            <option value="Beasiswa Non Akademik">Beasiswa Non Akademik</option>
                    </select>
    </div>

    <div class="form-group">
        <label for="berkas">Upload Berkas Syarat:</label>
        <input type="file" class="form-control" id="berkas" name="berkas" placeholder="">
    </div>
    


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary" name="tambah">Daftar</button>
                        </div>

                </form>
            </div>

        </div>
    </div>
   

    <!-- Footer -->
    <footer class="bg-primary text-light py-3 fixed-bottom">
        <div class="container text-center">
            <p>&copy; 2023 Your Company. All rights reserved.</p>
        </div>
    </footer>




    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="Script.js"></script>
</body>

</html>
