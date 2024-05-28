<?php
include 'config.php';

$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM projects WHERE id = ?');
$stmt->execute([$id]);
$project = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $purpose = $_POST['purpose'];
    $deadline = $_POST['deadline'];
    $budget = $_POST['budget'];

    $stmt = $pdo->prepare('UPDATE projects SET name = ?, purpose = ?, deadline = ?, budget = ? WHERE id = ?');
    $stmt->execute([$name, $purpose, $deadline, $budget, $id]);

    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Proyek</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">

    <h1 class="text-2xl font-bold mb-6">Edit Proyek</h1>
    <form method="post" class="space-y-4">
        <div>
            <label class="block mb-1">Nama</label>
            <input type="text" name="name" class="w-full border px-4 py-2" value="<?= htmlspecialchars($project['name']) ?>" required>
        </div>
        <div>
            <label class="block mb-1">Tujuan</label>
            <input type="text" name="purpose" class="w-full border px-4 py-2" value="<?= htmlspecialchars($project['purpose']) ?>" required>
        </div>
        <div>
            <label class="block mb-1">Tenggat Waktu</label>
            <input type="date" name="deadline" class="w-full border px-4 py-2" value="<?= htmlspecialchars($project['deadline']) ?>" required>
        </div>
        <div>
            <label class="block mb-1">Anggaran</label>
            <input type="number" name="budget" class="w-full border px-4 py-2" value="<?= htmlspecialchars($project['budget']) ?>" required>
        </div>
        <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded">Update</button>
    </form>

</body>
</html>
