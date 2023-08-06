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

     <!-- Header -->
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
<head>
    <!-- Include the necessary CSS, JavaScript, and other meta tags if needed -->
</head>

    <!-- Display the "Daftar Pesanan" table -->
    <div class="container mt-5">
        <h2>Daftar Beasiswa</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Hp</th>
                    <th scope="col">Semester</th>
                    <th scope="col">IPK</th>
                    <th scope="col">beasiswa</th>
                    <th scope="col">Berkas</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Include the 'config.php' to use the query function
                include "config.php";

                // Get the daftarmhs data from the database
                $DaftarMahasiswa = query("SELECT * FROM daftarmhs");

                // Loop through each daftarmhs and display it in the table
                foreach ($DaftarMahasiswa as $pesanan) {
                    echo "<tr>";
                    echo "<td>" . $pesanan['nama'] . "</td>";
                    echo "<td>" . $pesanan['email'] . "</td>";
                    echo "<td>" . $pesanan['nohp'] . "</td>";
                    echo "<td>" . $pesanan['semster'] . "</td>";
                    echo "<td>" . $pesanan['ipk'] . "</td>";
                    echo "<td>" . $pesanan['pilihbhs'] . "</td>";
                    echo "<td>" . $pesanan['berkas'] . "</td>";
                    echo "<td>" . $pesanan['Status'] . " belum di verifikasi</td>";

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>

