<?php
require "./Etudiant.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etudiant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
        .bordered {
            border: 1px solid black;
            border-radius: 3px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row align-items-start">
            <?php
            foreach ($etudiants as $etudiant) {
                echo "<div class=\"col\">
                        <div class=\"bg-secondary bg-opacity-50 p-3\" style=\"border: 1px solid black; border-radius: 3px;\">" . $etudiant->getNom() . "</div>";
                foreach ($etudiant->getNotes() as $note) {
                    if ($note < 10) {
                        $class = "bg-danger bg-opacity-50 p-2";
                    } else if ($note == 10) {
                        $class = "bg-warning bg-opacity-50 p-2";
                    } else {
                        $class = "bg-success bg-opacity-50 p-2";
                    }
                    echo "<div class=\"$class\" style=\"border: 1px solid black; border-radius: 3px\">{$note}</div>";
                }
                echo "<div class=\"bg-primary bg-opacity-50 p-2\" style=\"border: 1px solid black; border-radius: 3px;\">Votre moyenne est {$etudiant->calculeMoyenne()}</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>

</html>