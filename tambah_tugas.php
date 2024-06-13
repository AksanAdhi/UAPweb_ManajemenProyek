<?php
include 'koneksi.php';

// Check if form is submitted and handle insertion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $idAnggota = $_POST['idAnggota'];
  $namaTugas = $_POST['namaTugas'];
  $tanggalMulai = $_POST['tanggalMulai'];
  $tanggalSelesai = $_POST['tanggalSelesai'];

  // SQL statement to insert tugas
  $sql = "INSERT INTO daftar_tugas (idAnggota, namaTugas, tanggalMulai, tanggalSelesai) VALUES ('$idAnggota', '$namaTugas', '$tanggalMulai', '$tanggalSelesai')";

  if ($conn->query($sql) === TRUE) {
    echo "Tugas berhasil ditambahkan.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
