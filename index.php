<?php
// Gestion des tâches
$tasks = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['task'])) {
    $tasks[] = $_POST['task'];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>To-Do List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Ma To-Do List</h1>
    <form method="POST">
        <input type="text" name="task" placeholder="Ajouter une tâche...">
        <button type="submit">Ajouter</button>
    </form>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li><?= htmlspecialchars($task) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>