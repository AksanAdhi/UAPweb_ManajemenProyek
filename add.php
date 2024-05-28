<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $purpose = $_POST['purpose'];
    $deadline = $_POST['deadline'];
    $budget = $_POST['budget'];

    $stmt = $pdo->prepare('INSERT INTO projects (name, purpose, deadline, budget) VALUES (?, ?, ?, ?)');
    $stmt->execute([$name, $purpose, $deadline, $budget]);

    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Proyek</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">

    <h1 class="text-2xl font-bold mb-6">Tambah Proyek</h1>
    <form method="post" class="space-y-4">
        <div>
            <label class="block mb-1">Nama</label>
            <input type="text" name="name" class="w-full border px-4 py-2" required>
        </div>
        <div>
            <label class="block mb-1">Tujuan</label>
            <input type="text" name="purpose" class="w-full border px-4 py-2" required>
        </div>
        <div>
            <label class="block mb-1">Tenggat Waktu</label>
            <input type="date" name="deadline" class="w-full border px-4 py-2" required>
        </div>
        <div>
            <label class="block mb-1">Anggaran</label>
            <input type="number" name="budget" class="w-full border px-4 py-2" required>
        </div>
        <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded">Tambah</button>
    </form>

</body>
</html>
