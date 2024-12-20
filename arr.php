<?php 
session_start(); // Start the session

// Inizializza $_SESSION['student'] come array se non è già definito
if (!isset($_SESSION['student'])) {
    $_SESSION['student'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['invia'])) {
    // Recupera i dati dal form
    $student_name = $_POST['student_name'] ?? '';
    $student_city = $_POST['city_id'] ?? '';

    // Aggiunge un nuovo elemento all'array della sessione
    if ($student_name && $student_city) {
        $_SESSION['student'][] = [
            'student_name' => $student_name,
            'city_id' => $student_city
        ];
    }
}

// Debug per verificare i dati
echo "<pre>SESSION DATA:\n";
print_r($_SESSION['student']);
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test array</title>
</head>
<body>
    <form action="" method="post">
        <p><input type="text" name="student_name" required /> Nome studente</p>
        <p><input type="number" name="city_id" required /> Id città</p>
        <button type="submit" name="invia">Aggiungi</button>
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>Nome Studente</th>
                <th>ID Città</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($_SESSION['student'])): ?>
                <?php foreach ($_SESSION['student'] as $student): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($student['student_name']); ?></td>
                        <td><?php echo htmlspecialchars($student['city_id']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="2">Nessun dato disponibile</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
