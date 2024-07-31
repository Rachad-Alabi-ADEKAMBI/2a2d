<?php
session_start();

include 'db.php';

function newDoc() {
    $pdo = getConnexion();

    $name = verifyInput($_POST['name']);
    $category = verifyInput($_POST['category']);
    $subcategory = verifyInput($_POST['subcategory']);
    $description = verifyInput($_POST['description']);

    try {
        $req = $pdo->prepare('INSERT INTO documents (name, category, subcategory, description) VALUES (?, ?, ?, ?)');
        $req->execute(array($name, $category, $subcategory, $description));

        $doc_id = $pdo->lastInsertId();

        // pic
        $file_field = 'file';
        $base_dir = '../public/documents/';
        if (isset($_FILES[$file_field]) && $_FILES[$file_field]['error'] == 0) {
            // Check file type
            $file_type = $_FILES[$file_field]['type'];
            $allowed_types = ['application/pdf'];
            if (in_array($file_type, $allowed_types)) {
                $file_name = time() . '_' . $_FILES[$file_field]['name'];
                $target = $base_dir . $file_name;

                if (move_uploaded_file($_FILES[$file_field]['tmp_name'], $target)) {
                    $update_req = $pdo->prepare("UPDATE documents SET file = ? WHERE id = ?");
                    $update_req->execute([$file_name, $doc_id]);
                    ?>
                    <script>
                        alert('Документ додано');
                        window.location.replace('../index.php?action=dashboard_adminPage');
                    </script>
                    <?php
                }
            } else {
                ?>
                <script>
                    alert('Only PDF files are allowed.');
                    window.history.back();
                </script>
                <?php
            }
        }
    } catch (PDOException $e) {
        echo 'Database error: ' . $e->getMessage();
    }
}


function getAllDocs() {
    $pdo = getConnexion();
    $req = $pdo->prepare("SELECT * FROM documents ORDER BY id DESC");
    $req->execute();
    $datas = $req->fetchAll();
    $req->closeCursor();

    sendJSON($datas);
}

function getSimpleDocs() {
    $pdo = getConnexion();
    $req = $pdo->prepare("SELECT * FROM documents
     WHERE category = 'docs' 
        ORDER BY id DESC");
    $req->execute();
    $datas = $req->fetchAll();
    $req->closeCursor();

    sendJSON($datas);
}

function getGasDocs() {
    $pdo = getConnexion();
    $req = $pdo->prepare("SELECT * FROM documents
     WHERE category = 'gas' 
        ORDER BY id DESC");
    $req->execute();
    $datas = $req->fetchAll();
    $req->closeCursor();
    sendJSON($datas);
}

function getElectricityDocs() {
    $pdo = getConnexion();
    $req = $pdo->prepare("SELECT * FROM documents
     WHERE category = 'electricity' 
        ORDER BY id DESC");
    $req->execute();
    $datas = $req->fetchAll();
    $req->closeCursor();
    sendJSON($datas);
}

function login()
{
    if (!empty($_POST)) {
        $pdo = getConnexion();
        $errors = [];

        if (
            isset($_POST['username'], $_POST['password']) &&
            !empty($_POST['username'] && !empty($_POST['password']))
        ) {
            $sql = 'SELECT * FROM `users` WHERE `username` = ?';

            $query = $pdo->prepare($sql);

            $query->execute([verifyInput($_POST['username'])]);

            $user = $query->fetch();

            $pass = verifyInput($_POST['password']);

            if (!$user) {
                $errors['user'] = 'Veuillez vérifier les identifiants';
            }

            if ($user['password'] != $pass) {
                $errors['pass'] = 'Veuillez vérifier les identifiants';
            }
            
           
            if (!empty($errors)) {
                $_SESSION['login'] = [
                    'username' => verifyInput($_POST['username']),
                ]; 
                ?>

                <script>
               alert('Veuillez vérifier les identifiants');
                window.location.replace('../index.php?action=loginPage')
                </script>
                <?php
                            }

            if (empty($errors)) {
                $_SESSION['user'] = [
                    'username' => $user['username'],
                    'role' => $user['role'],
                    'id' => $user['id'],
                ];

               if($_SESSION['user']['role'] == 'user'){
                ?>
                    <script>
                        window.location.replace('../index.php?action=dashboardPage');
                    </script>
                <?php
                
               } else if($_SESSION['user']['role'] == 'admin'){
                ?>
                <script>
                    window.location.replace('../index.php?action=dashboard_adminPage');
                </script>
            <?php

               } else{
                header('../index.php?action=loginPage');
               }
            }
        }
    } else{
        ?>
            <script>
                alert('Merci de remplir le formulaire !!');
                window.history.back();
                exit();
            </script>
        <?php
    }
}


function register() {
    $pdo = getConnexion();

    $email = verifyInput($_POST['email']);
    $phone = verifyInput($_POST['phone']);
    $first_name = verifyInput($_POST['first_name']);
    $last_name = verifyInput($_POST['last_name']);
    $pass = verifyInput($_POST['password']);
    $password_2 = verifyInput($_POST['password_2']);
    $ads = 0;
    $featured = 0;
    $situation = 'Disponible';

    //check for the same user
    $req = $pdo->prepare('SELECT * FROM users WHERE email = ?');
    $req->execute(array($email));
    $datas = $req->fetcH();

    if ($pass != $password_2) {
        $_SESSION['register'] = [
            'email' => $email,
            'phone' => $phone,
            'first_name' => $first_name,
            'last_name' => $last_name
        ];
    
     ?>
        <script>
            alert('Les mots de passe ne correspondent pas !');
            window.location.replace('../index.php?action=registerPage');
        </script>"
        
    <?php 
    }

    else if($datas != '' ){ ?>
             <script>
            alert('Cet email est déjà enregistré, merci de changer ou de faire une demande de réinitialisation de mot de passe si nécéssaire');
            window.location.replace('../index.php?action=registerPage');
        </script>"
        <?php
    }

    else{
        $username = $last_name . ' ' . substr($first_name, 0, 3) . rand(10, 99);
        $ip = $_SERVER['REMOTE_ADDR']; // Get the user's IP address

        try {
            $stmt = $pdo->prepare("INSERT INTO users (email, phone, first_name, last_name, 
            pass, username, ip, role, date_of_insertion, ads, featured, situation) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), 0, ?, ?)");

            $stmt->execute([$email, $phone, $first_name, $last_name, $pass, $username, $ip, 'user', $featured, $situation]);

            $_SESSION['user'] = [
                'email' => $email,
                'role' => 'user',
                'id' => $pdo->lastInsertId(),
                'first_name' => $first_name,
                'last_name' => $last_name,
                'situation' => 'Disponible'
            ];

            ?>
            
            <script>
                    alert('Compte creé avec succès !! Bienvenue sur Immobilier Bénin');
                    window.location.replace('../index.php?action=dashboardPage');
            </script>

            <?php
        } catch (PDOException $e) {
            echo 'Database error: ' . $e->getMessage();
            ?>
                <script>
                    alert('Une erreur est survenue, merci de reéssayer ou de nous contacter si elle persiste');
                    window.location.replace('../index.php?action=registerPage');
                    exit();
                </script>
            <?php
        }
    }   
}


function deleteDoc($id){
    $pdo = getConnexion();
    $id = verifyInput($_GET['id']);

    
    if (!is_numeric($id) || $id <= 0) { ?>
        <script>
            alert('Une erreur est survenue, merci de vérifier cette url');
        </script>
        <?php
        exit(); 
    } else {
       

        try {
            // Update user's situation to 'Deleted'
            $reqUpdateUser = $pdo->prepare("DELETE from documents WHERE id = ?");
            $reqUpdateUser->execute(array($id));

             ?>
            
            <script>
                alert("Документ видалено");
                window.location.replace('../index.php?action=dashboard_adminPage');
            </script>

            <?php 
        } catch (PDOException $e) {
             echo 'Database error: ' . $e->getMessage();
            ?>
                <script>
                  //  alert('Une erreur est survenue, merci de reéssayer ou de nous contacter si elle persiste');
                   // window.location.replace('../index.php?action=dashboard_adminPage');
                    exit();
                </script>
            <?php
        }
    }
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

