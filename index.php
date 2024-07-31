<?php
session_start();

// Set the error reporting level to exclude warnings
error_reporting(E_ALL & ~E_WARNING);

// Disable displaying errors
ini_set('display_errors', 0);

require_once 'src/controller/front/home.php';
require_once 'src/controller/front/about.php';
require_once 'src/controller/front/team.php';
require_once 'src/controller/front/career.php';
require_once 'src/controller/front/documents.php';
require_once 'src/controller/front/blog.php';
require_once 'src/controller/front/faq.php';
require_once 'src/controller/front/login.php';
require_once 'src/controller/front/gas.php';
require_once 'src/controller/front/electricity.php';
require_once 'src/controller/front/register.php';

require_once 'src/controller/back/admin/dashboard_admin.php';

if (isset($_GET['action']) && $_GET['action'] !== '') {

    if ($_GET['action'] === 'loginPage') {
      if (isset($_SESSION['user'])) {
        dashboard_adminPage();
    } else {
        loginPage();
        }
    }

    if ($_GET['action'] === 'registerPage') {
      registerPage();
  }

    
    elseif ($_GET['action'] === 'teamPage') {
        teamPage();
    }
    

    elseif ($_GET['action'] === 'aboutPage') {
        aboutPage();
    }

    elseif ($_GET['action'] === 'careerPage') {
      careerPage();
    }

    elseif ($_GET['action'] === 'documentsPage') {
      documentsPage();
    }

    elseif ($_GET['action'] === 'blogPage') {
      blogPage();
    }

    elseif ($_GET['action'] === 'faqPage') {
      faqPage();
    }

    elseif ($_GET['action'] === 'gasPage') {
      gasPage();
    }

    elseif ($_GET['action'] === 'electricityPage') {
      electricityPage();
    }

    elseif ($_GET['action'] === 'dashboard_adminPage') {
      if (!isset($_SESSION['user'])) {
        loginPage();
      } else {
          dashboard_adminPage();
      }
    }

    elseif ($_GET['action'] === 'home') {
      home();
    }
    
    else {
       ?>
            <script>
              alert('URL-адреса недійсна, перевірте її!');
              window.history.back();
              exit();
            </script>
       <?php
    }
} else {
    home();
}