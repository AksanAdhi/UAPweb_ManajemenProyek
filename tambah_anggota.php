<?php
include 'koneksi.php';

// Check if form is submitted and handle addition
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $idAnggota = $_POST['idAnggota'];
  $namaAnggota = $_POST['namaAnggota'];
  $idTim = $_POST['idTim'];

  // SQL statement to insert new anggota
  $sql = "INSERT INTO daftar_anggota (namaAnggota, idTim) VALUES ('$namaAnggota', '$idTim')";

  if ($conn->query($sql) === TRUE) {
    echo "Anggota berhasil ditambahkan.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
