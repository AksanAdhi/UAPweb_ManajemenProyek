<?php
// Include file koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tujuan = $_POST['tujuan'];
    $anggaran = $_POST['anggaran'];
    $tenggat_waktu = $_POST['tenggat_waktu'];

    // Query untuk update data proyek
    $sql = "UPDATE daftar_proyek 
            SET nama = ?, tujuan = ?, anggaran = ?, tenggat_waktu = ?
            WHERE id = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $nama, $tujuan, $anggaran, $tenggat_waktu, $id);

    if ($stmt->execute()) {
        // Redirect ke halaman yang tepat setelah berhasil update
        header("Location: tabel-proyek.html");
        exit;
    } else {
        // Tangani kesalahan jika query tidak berhasil dieksekusi
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
