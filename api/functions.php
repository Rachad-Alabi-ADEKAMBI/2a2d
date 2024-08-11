<?php
session_start();

include 'db.php';

function subscribe() {
    $pdo = getConnexion();
    $email = verifyInput($_POST['email']);

    try {
        $req = $pdo->prepare('INSERT INTO newsletters (email) VALUES (?)');
        $req->execute([$email]);
        ?>
        <script>
            alert('Email ajouté avec succès');
            window.history.back();
        </script>
        <?php
    } catch (PDOException $e) {
        ?>
        <script>
            alert('Une erreur est survenue, merci de réessayer');
            window.history.back();
        </script>
        <?php
    }
}


function newsletters() {
    $pdo = getConnexion();
    $req = $pdo->prepare("SELECT * FROM newsletters ORDER BY id DESC");
    $req->execute();
    $datas = $req->fetchAll();
    $req->closeCursor();

    sendJSON($datas);
}


function logout()
{
    unset($_SESSION['user']);

    header('Location: ../index.php');
}


function sendJSON($infos)
{
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    echo json_encode($infos, JSON_UNESCAPED_UNICODE);
}

function verifyInput($inputContent)
{
    $inputContent = htmlspecialchars($inputContent);
    $inputContent = trim($inputContent);
    return $inputContent;
}

