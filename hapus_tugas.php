<?php
include 'koneksi.php';

// Periksa apakah ada data yang dikirim dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap idTugas dari form
    $idTugas = $_POST["idTugas"];

    // Query untuk menghapus tugas berdasarkan idTugas
    $sql = "DELETE FROM daftar_tugas WHERE idTugas = $idTugas";

    if ($conn->query($sql) === TRUE) {
        // Jika penghapusan berhasil
        echo "Tugas dengan ID $idTugas berhasil dihapus.";
    } else {
        // Jika terjadi kesalahan saat menjalankan query
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi database
$conn->close();
?>
