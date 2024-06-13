<?php
// Include file koneksi ke database
include 'koneksi.php';

// Ambil data yang dikirim dari form
$idTim = $_POST['idTim'];
$namaTim = $_POST['namaTim'];
$idProyek = $_POST['idProyek'];

// Query untuk update data tim menggunakan prepared statement
$queryUpdate = "UPDATE daftar_tim SET namaTim = ?, idProyek = ? WHERE idTim = ?";
$stmt = $conn->prepare($queryUpdate);
$stmt->bind_param("ssi", $namaTim, $idProyek, $idTim);

if ($stmt->execute()) {
    echo "Data tim berhasil diupdate.";
} else {
    echo "Error: " . $queryUpdate . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>
