<?php
// Include file koneksi.php untuk menghubungkan ke database
include 'koneksi.php';

// Check if form is submitted and handle update
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from POST submission
    $idJadwal = $_POST['idJadwal'];
    $idProyek = $_POST['idProyek'];
    $idTugas = $_POST['idTugas'];
    $statusTugas = $_POST['statusTugas'];

    // SQL statement to update schedule data
    $sql = "UPDATE jadwal SET idProyek = '$idProyek', idTugas = '$idTugas', statusTugas = '$statusTugas' WHERE idJadwal = $idJadwal";

    if ($conn->query($sql) === TRUE) {
        echo "Data jadwal berhasil diupdate.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>