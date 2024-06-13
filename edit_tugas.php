<?php
// Include file koneksi.php untuk menghubungkan ke database
include 'koneksi.php';

// Check if form is submitted and handle update
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from POST submission
    $idTugas = $_POST['idTugas'];
    $idAnggota = $_POST['idAnggota'];
    $namaTugas = $_POST['namaTugas'];
    $tanggalMulai = $_POST['tanggalMulai'];
    $tanggalSelesai = $_POST['tanggalSelesai'];

    // SQL statement to update task data
    $sql = "UPDATE daftar_tugas SET idAnggota = '$idAnggota', namaTugas = '$namaTugas', tanggalMulai = '$tanggalMulai', tanggalSelesai = '$tanggalSelesai' WHERE idTugas = $idTugas";

    if ($conn->query($sql) === TRUE) {
        echo "Data tugas berhasil diupdate.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>