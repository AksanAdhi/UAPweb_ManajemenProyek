<?php
// Include file koneksi.php untuk menghubungkan ke database
include 'koneksi.php';

// Check if form is submitted and handle update
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from POST submission
    $idAnggota = $_POST['idAnggota'];
    $namaAnggota = $_POST['namaAnggota'];
    $idTim = $_POST['idTim'];

    // SQL statement to update member data
    $sql = "UPDATE daftar_anggota SET namaAnggota = '$namaAnggota', idTim = $idTim WHERE idAnggota = $idAnggota";

    if ($conn->query($sql) === TRUE) {
        echo "Data anggota berhasil diupdate.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>