<?php
// Include file koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $tujuan = $_POST['tujuan'];
    $anggaran = $_POST['anggaran'];
    $tenggat_waktu = $_POST['tenggat_waktu'];

    // Query untuk memasukkan data ke dalam tabel daftar_proyek
    $sql = "INSERT INTO daftar_proyek (nama, tujuan, anggaran, tenggat_waktu)
            VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nama, $tujuan, $anggaran, $tenggat_waktu);

    if ($stmt->execute()) {
        // Redirect ke halaman yang tepat setelah berhasil disimpan
        header("Location: tabel-proyek.php");
        exit;
    } else {
        // Tangani kesalahan jika query tidak berhasil dieksekusi
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
