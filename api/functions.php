<?php
session_start();

include 'db.php';

function subscribe()
{
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


function newSurvey()
{
    // Assuming `getConnexion()` returns a PDO instance connected to your database
    $pdo = getConnexion();

    // Sanitize and retrieve input values
    $last_name = verifyInput($_POST['last_name']);
    $first_name = verifyInput($_POST['first_name']);
    $phone = verifyInput($_POST['phone']);
    $birth_date = verifyInput($_POST['birth_date']);
    $sex = verifyInput($_POST['sex']);
    $category = verifyInput($_POST['category']);
    $status = verifyInput($_POST['status']);
    $area = verifyInput($_POST['area']);
    $household_size = verifyInput($_POST['household_size']);
    $vegetables_in_diet = verifyInput($_POST['vegetables_in_diet']);
    $vegetable_list = verifyInput($_POST['vegetable_list']);
    $land_space = verifyInput($_POST['land_space']);
    $alternative_space = verifyInput($_POST['alternative_space']);
    $space_size = verifyInput($_POST['space_size']);
    $space_observation = verifyInput($_POST['space_observation']);
    $nutritional_importance = verifyInput($_POST['nutritional_importance']);
    $interested_in_production = verifyInput($_POST['interested_in_production']);
    $interested_in_installation = verifyInput($_POST['interested_in_installation']);
    $available_time = verifyInput($_POST['available_time']);
    $waste_management = verifyInput($_POST['waste_management']);
    $gardener_experience = verifyInput($_POST['gardener_experience']);
    $gardening_tools = verifyInput($_POST['gardening_tools']);
    $tools_list = verifyInput($_POST['tools_list']);
    $weekly_hours = verifyInput($_POST['weekly_hours']);
    $objectives = verifyInput($_POST['objectives']);
    $composting = verifyInput($_POST['composting']);
    $cooking_fuel = verifyInput($_POST['cooking_fuel']);
    $cooking_frequency = verifyInput($_POST['cooking_frequency']);
    $monthly_budget = verifyInput($_POST['monthly_budget']);
    $biogas_pack_interest = verifyInput($_POST['biogas_pack_interest']);

    try {
        // Prepare the SQL statement
        $sql = $pdo->prepare('INSERT INTO survey (
            last_name, first_name, birth_date, sex, area, phone, category, status,
            household_size, vegetables_in_diet, vegetable_list, land_space, alternative_space, space_size, space_observation, nutritional_importance,
            interested_in_production, interested_in_installation, available_time, waste_management, gardener_experience, gardening_tools, tools_list, weekly_hours,
            objectives, composting, cooking_fuel, cooking_frequency, monthly_budget, biogas_pack_interest
        ) VALUES (
            ?, ?, ?, ?, ?, ?, ?, ?,
            ?, ?, ?, ?, ?, ?, ?, ?,
            ?, ?, ?, ?, ?, ?, ?, ?,
            ?, ?, ?, ?, ?, ?
        );');

        // Execute the statement with parameters
        $sql->execute([
            $last_name,
            $first_name,
            $birth_date,
            $sex,
            $area,
            $phone,
            $category,
            $status,
            $household_size,
            $vegetables_in_diet,
            $vegetable_list,
            $land_space,
            $alternative_space,
            $space_size,
            $space_observation,
            $nutritional_importance,
            $interested_in_production,
            $interested_in_installation,
            $available_time,
            $waste_management,
            $gardener_experience,
            $gardening_tools,
            $tools_list,
            $weekly_hours,
            $objectives,
            $composting,
            $cooking_fuel,
            $cooking_frequency,
            $monthly_budget,
            $biogas_pack_interest
        ]);

        echo '<script>
            alert("Formulaire enregistré avec succès !");
            window.history.back();
        </script>';
    } catch (PDOException $e) {
        echo '<script>
            alert("Une erreur est survenue: ' . addslashes($e->getMessage()) . '");
            window.history.back();
        </script>';
    }
}

function surveys()
{
    $pdo = getConnexion();
    $req = $pdo->prepare("SELECT * FROM survey ORDER BY id DESC");
    $req->execute();
    $datas = $req->fetchAll();
    $req->closeCursor();

    sendJSON($datas);
}

function newsletters()
{
    $pdo = getConnexion();
    $req = $pdo->prepare("SELECT * FROM newsletters ORDER BY id DESC");
    $req->execute();
    $datas = $req->fetchAll();
    $req->closeCursor();

    sendJSON($datas);
}

function login()
{
    // Establish database connection
    $pdo = getConnexion();

    // Retrieve and sanitize the input
    $email = verifyInput($_POST['email']);
    $password = verifyInput($_POST['password']);

    $req = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $req->execute(array($email));
    $user = $req->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Verify the password using bcrypt
        if (password_verify($password, $user['password'])) {
            session_start();
            // start a session called user
            $_SESSION['user'] = [
                'user_id' => $user['id']
            ];
            header("Location: ../index.php?action=dashboard_adminPage");
            exit();
        } else {
            $_SESSION['login']['email'] = $email;

        ?>
            <script>
                alert('Identifiants incorrects !');
                window.history.back();
            </script>
        <?php
        }
    } else {
        $_SESSION['login']['email'] = $email;
        ?>
        <script>
            alert('Identifiants incorrects !');
            window.history.back();
        </script>
<?php
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
