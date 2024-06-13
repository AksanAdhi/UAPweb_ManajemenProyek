<?php
// Include file koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan variabel $_POST['id'] sudah ada dan valid
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        // Ambil data ID dari form
        $id = $_POST['id'];

        // Query untuk menghapus proyek berdasarkan ID
        $sql = "DELETE FROM daftar_proyek WHERE id = ?";

        // Mengikat parameter ke dalam query
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            // Redirect ke halaman tabel-proyek.php setelah berhasil menghapus
            header("Location: tabel-proyek.php");
            exit;
        } else {
            // Tangani kesalahan jika query tidak berhasil dieksekusi
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $stmt->close();
    } else {
        echo "ID proyek tidak valid";
    }
}

$conn->close();
?>
