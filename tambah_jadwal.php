<?php
include 'koneksi.php';

// Memproses data dari formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idJadwal = $_POST['idJadwal'];
    $idProyek = $_POST['idProyek'];
    $idTugas = $_POST['idTugas'];
    $statusTugas = $_POST['statusTugas'];

    // Query untuk memasukkan data jadwal baru ke dalam database
    $sql = "INSERT INTO daftar_jadwal (idJadwal, idProyek, idTugas, statusTugas)
            VALUES ('$idJadwal', '$idProyek', '$idTugas', '$statusTugas')";

    if ($conn->query($sql) === TRUE) {
        echo "Jadwal berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi database
$conn->close();
?>
