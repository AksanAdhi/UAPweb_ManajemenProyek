<?php
// Include file koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirimkan melalui form
    $namaTim = $_POST['namaTim'];
    $idProyek = $_POST['idProyek']; // Ini adalah ID Proyek yang dipilih dari dropdown

    // Query untuk menyimpan data tim ke dalam tabel daftar_tim
    $sql = "INSERT INTO daftar_tim (namaTim, idProyek) VALUES (?, ?)";

    // Mengikat parameter ke dalam query
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $namaTim, $idProyek); // i untuk integer, s untuk string

    if ($stmt->execute()) {
        // Jika penyimpanan berhasil, redirect kembali ke halaman tabel-proyek.php atau ke halaman lain yang sesuai
        header("Location: tabel-tim.php");
        exit;
    } else {
        // Tangani kesalahan jika query tidak berhasil dieksekusi
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
