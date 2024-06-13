<?php
include 'koneksi.php';

// Check if form is submitted and handle deletion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $idAnggota = $_POST['idAnggota'];

  // SQL statement to delete anggota
  $sql = "DELETE FROM daftar_anggota WHERE idAnggota = '$idAnggota'";

  if ($conn->query($sql) === TRUE) {
    echo "Anggota berhasil dihapus.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
