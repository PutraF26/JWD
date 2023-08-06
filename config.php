<?php 
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "", "jwddaftarbeasiswa") or die("koneksi gagal");
  return $conn;
}
function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);
  $rows = array();
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
function DaftarMahasiswa(){
    $conn = koneksi();



    // Menangkap data yang di kirim dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $semster = $_POST['semster'];
    $ipk = $_POST['ipk'];
    $pilihbhs = $_POST['pilihbhs'];
    $berkas = $_POST['berkas'];


  // insert data ke database
  $query = "INSERT INTO daftarmhs
   VALUES ('', '$nama', '$email', '$nohp', '$semster', '$ipk', '$pilihbhs', '$berkas')";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}
?>