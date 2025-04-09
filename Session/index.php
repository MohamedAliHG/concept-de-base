<?php
require_once 'session.php';

$session = Session::getInstance();


if (isset($_POST['delete_session'])) {
    $session->destroy();
    header("Location: index.php");
    exit();
}

$session->incrementerVisites();
$visits = $session->getNbVisites();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Session</title>
    <link rel="icon" href="data:,">
</head>

<body>
    <h1>
        <?php if ($visits === 1): ?>
            Bienvenue à notre plateforme.
        <?php else: ?>
            Merci pour votre fidélité, c'est votre <?= $visits ?> ème visite.
        <?php endif; ?>
    </h1>

    <form method="post">
        <button type="submit" name="delete_session">Supprimer la session</button>
    </form>
</body>

</html>