<?php
// Include file koneksi.php untuk menghubungkan ke database
include 'koneksi.php';

// Check if form is submitted and handle update
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from POST submission
    $idTim = $_POST['idTim'];
    $namaTim = $_POST['namaTim'];
    $namaProyek = $_POST['nama'];

    // SQL statement to update team data
    $sql = "UPDATE daftar_tim SET namaTim = '$namaTim', idProyek = (SELECT id FROM daftar_proyek WHERE nama = '$namaProyek') WHERE idTim = $idTim";

    if ($conn->query($sql) === TRUE) {
        echo "Data tim berhasil diupdate.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
