<?php
session_start();
require_once ('conn.php');
if(!isset($_SESSION['nColoriPerPagina'])){
    $_SESSION['nColoriPerPagina'] = null;
}

if(!isset($_SESSION['opzioneCorrente'])){
    $_SESSION['opzioneCorrente'] = null;
}

if(!isset($_SESSION['paginaCorrente'])){
    $_SESSION['paginaCorrente'] = 1;
}

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

            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="all">Tutti</option>
            
        </select>

        <button type="submit" name="Invia">Mostra</button>

        <button type="submit" name="leftArrow" <?php echo $_SESSION['paginaCorrente'] == 1 ? 'disabled' : ''; ?>><</button>

        <button type="submit" name="rightArrow">></button>

    </form>

    <?php

    if(isset($_POST['Invia'])){

        if($_POST['opz'] != 'all'){

            $query = 'SELECT * FROM Colori LIMIT '.$_POST['opz'].';';
            $r = mysqli_query($db, $query);

            while($a=mysqli_fetch_array($r)){

                echo '<div class="divIntero"><h3>'.$a['id'].'</h3><div class="coloreCella" style="background-color:'.$a['colore'].'"></div><h4>Colore: '.$a['colore'].'</h4></div>';
                
                $_SESSION['nColoriPerPagina'] = $a['id'];
            }

            $_SESSION['opzioneCorrente'] = $_POST['opz'];

        } else {

            $query = 'SELECT * FROM Colori;';
            $r = mysqli_query($db, $query);

            while($a=mysqli_fetch_array($r)){

                echo '<div class="divIntero"><h3>'.$a['id'].'</h3><div class="coloreCella" style="background-color:'.$a['colore'].'"></div><h4>Colore: '.$a['colore'].'</h4></div>';
            }

        }
    }

    if(isset($_POST['rightArrow'])){

        $offset = $_SESSION['paginaCorrente'] * $_SESSION['opzioneCorrente'];
        $query = 'SELECT * FROM Colori WHERE id > '.$_SESSION['nColoriPerPagina'].' LIMIT '.$_SESSION['opzioneCorrente'].';';
        $r = mysqli_query($db, $query);

        $resultCount = 0;
        while($a=mysqli_fetch_array($r)){

            echo '<div class="divIntero"><h3>'.$a['id'].'</h3><div class="coloreCella" style="background-color:'.$a['colore'].'"></div><h4>Colore: '.$a['colore'].'</h4></div>';
            
            $resultCount++;
        }

        if ($resultCount > 0) {
            $_SESSION['paginaCorrente']++;
        }
    }


    if(isset($_POST['leftArrow'])){

        $offset = $_SESSION['paginaCorrente'] * $_SESSION['opzioneCorrente'];
        $query = 'SELECT * FROM Colori WHERE id > '.$_SESSION['nColoriPerPagina'].' LIMIT '.$_SESSION['opzioneCorrente'].';';
        $r = mysqli_query($db, $query);

        $resultCount = 0;
        while($a=mysqli_fetch_array($r)){

            echo '<div class="divIntero"><h3>'.$a['id'].'</h3><div class="coloreCella" style="background-color:'.$a['colore'].'"></div><h4>Colore: '.$a['colore'].'</h4></div>';
            
            $resultCount--;
        }

        if ($resultCount > 0) {
            $_SESSION['paginaCorrente']--;
        }
    }

    // if(isset($_POST['leftArrow']) && $_SESSION['paginaCorrente'] > 1){

    //     $_SESSION['paginaCorrente']--;
    //     $offset = ($_SESSION['paginaCorrente'] - 1) * $_SESSION['opzioneCorrente'];
    //     $query = 'SELECT * FROM Colori LIMIT '.$_SESSION['opzioneCorrente'].' OFFSET '.$offset.';';
    //     $r = mysqli_query($db, $query);

    //     while($a=mysqli_fetch_array($r)){

    //         echo '<div class="divIntero"><h3>'.$a['id'].'</h3><div class="coloreCella" style="background-color:'.$a['colore'].'"></div><h4>Colore: '.$a['colore'].'</h4></div>';
    //     }
    // }

    ?>

</body>
</html>
