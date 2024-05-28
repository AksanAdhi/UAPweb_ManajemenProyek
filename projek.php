<?php
include 'config.php';

$stmt = $pdo->query('SELECT * FROM projects');
$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Proyek</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="flex">
        <!-- Sidebar -->
        <div class="bg-blue-900 text-white w-1/4 min-h-screen p-6">
            <div class="flex items-center mb-8">
                <div class="bg-white rounded-full w-16 h-16 flex items-center justify-center">
                    <img src="https://via.placeholder.com/50" alt="User" class="rounded-full">
                </div>
                <span class="ml-4 text-xl">biankaa</span>
            </div>
            <nav class="space-y-4">
                <a href="#" class="block py-2 px-4 rounded hover:bg-blue-700">Anggota</a>
                <a href="#" class="block py-2 px-4 rounded hover:bg-blue-700">Tugas</a>
                <a href="#" class="block py-2 px-4 rounded hover:bg-blue-700">Jadwal</a>
                <a href="#" class="block py-2 px-4 rounded hover:bg-blue-700">Tim</a>
                <a href="#" class="block py-2 px-4 rounded hover:bg-blue-700 bg-blue-700">Dashboard</a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-10">
            <h1 class="text-2xl font-bold mb-6">Proyek</h1>
            <div class="overflow-x-auto mb-4">
                <table class="min-w-full bg-white border border-gray-300">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">ID</th>
                            <th class="py-2 px-4 border-b">Nama</th>
                            <th class="py-2 px-4 border-b">Tujuan</th>
                            <th class="py-2 px-4 border-b">Tenggat Waktu</th>
                            <th class="py-2 px-4 border-b">Anggaran</th>
                            <th class="py-2 px-4 border-b">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($projects as $project): ?>
                        <tr>
                            <td class="py-2 px-4 border-b"><?= htmlspecialchars($project['id']) ?></td>
                            <td class="py-2 px-4 border-b"><?= htmlspecialchars($project['name']) ?></td>
                            <td class="py-2 px-4 border-b"><?= htmlspecialchars($project['purpose']) ?></td>
                            <td class="py-2 px-4 border-b"><?= htmlspecialchars($project['deadline']) ?></td>
                            <td class="py-2 px-4 border-b"><?= htmlspecialchars($project['budget']) ?></td>
                            <td class="py-2 px-4 border-b">
                                <a href="update.php?id=<?= $project['id'] ?>" class="text-blue-600 hover:underline">Edit</a>
                                <a href="delete.php?id=<?= $project['id'] ?>" class="text-red-600 hover:underline ml-2" onclick="return confirm('Apakah yakin ingin menghapus?')">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <a href="add.php" class="bg-blue-600 text-white py-2 px-4 rounded">Tambah Proyek</a>
        </div>
    </div>

</body>
</html>
