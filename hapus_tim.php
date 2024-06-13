<?php
include 'koneksi.php';

// Check if form is submitted and handle deletion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $idTim = $_POST['idTim'];

  // SQL statement to delete the team
  $sql = "DELETE FROM daftar_tim WHERE idTim = $idTim";

  if ($conn->query($sql) === TRUE) {
    echo "Tim berhasil dihapus.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
