<?php
include 'koneksi.php';

// Retrieve form data
$idAnggota = $_POST['idAnggota'];
$namaAnggota = $_POST['namaAnggota'];
$namaTim = $_POST['namaTim'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO daftar_anggota (idAnggota, namaAnggota, namaTim) VALUES (?, ?, ?)");
$stmt->bind_param("iss", $idAnggota, $namaAnggota, $namaTim);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>
