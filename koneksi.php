<?php 

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect('localhost', 'root', '');
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
mysqli_close($conn);

$database = mysqli_select_db($conn,"googlemaps");
if (!$database){
    echo "Tidak Ada Database";
}
?>