<?php
session_start();
require_once ('conn.php');

// Inizializzazione sessioni per la paginazione
if (!isset($_SESSION['nColoriPerPagina'])) {
    $_SESSION['nColoriPerPagina'] = 10; // Default 10 record per pagina
}

if (!isset($_SESSION['paginaCorrente'])) {
    $_SESSION['paginaCorrente'] = 1;
}

if (isset($_POST['opz'])) {
    $_SESSION['nColoriPerPagina'] = ($_POST['opz'] === 'all') ? 'all' : intval($_POST['opz']);
    $_SESSION['paginaCorrente'] = 1; // Reset alla prima pagina quando cambia la quantità per pagina
}

// Gestione navigazione pagine
if (isset($_POST['rightArrow'])) {
    $_SESSION['paginaCorrente']++;
}

if (isset($_POST['leftArrow']) && $_SESSION['paginaCorrente'] > 1) {
    $_SESSION['paginaCorrente']--;
}

// Determinazione LIMIT e OFFSET
$nColoriPerPagina = $_SESSION['nColoriPerPagina'];
$paginaCorrente = $_SESSION['paginaCorrente'];

$limit = ($nColoriPerPagina === 'all') ? '' : "LIMIT $nColoriPerPagina OFFSET " . (($paginaCorrente - 1) * $nColoriPerPagina);

// Query per recuperare i dati
$query = "SELECT * FROM Colori $limit;";
$result = mysqli_query($db, $query);

// Controllo per i pulsanti di navigazione
$prevQuery = "SELECT COUNT(*) as total FROM Colori WHERE id < (SELECT MIN(id) FROM Colori $limit);";
$nextQuery = "SELECT COUNT(*) as total FROM Colori WHERE id > (SELECT MAX(id) FROM Colori $limit);";

$prevResult = mysqli_query($db, $prevQuery);
$nextResult = mysqli_query($db, $nextQuery);

$hasPrev = $prevResult && mysqli_fetch_assoc($prevResult)['total'] > 0;
$hasNext = $nextResult && mysqli_fetch_assoc($nextResult)['total'] > 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colori</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="" method="post">
        <p>Scegli quanti colori vedere:&nbsp;</p>
        <select name="opz">
            <option value="10" <?php echo $nColoriPerPagina === 10 ? 'selected' : ''; ?>>10</option>
            <option value="25" <?php echo $nColoriPerPagina === 25 ? 'selected' : ''; ?>>25</option>
            <option value="50" <?php echo $nColoriPerPagina === 50 ? 'selected' : ''; ?>>50</option>
            <option value="all" <?php echo $nColoriPerPagina === 'all' ? 'selected' : ''; ?>>Tutti</option>
        </select>
        <button type="submit" name="Invia">Mostra</button>
        <button type="submit" name="leftArrow" >&lt;</button>
        <button type="submit" name="rightArrow">&gt;</button>
    </form>

    <div class="colori-container">
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="divIntero">
                <h3><?php echo $row['id']; ?></h3>
                <div class="coloreCella" style="background-color: <?php echo $row['colore']; ?>;"></div>
                <h4>Colore: #<?php echo $row['colore']; ?></h4>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>
