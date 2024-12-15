<?php

use Smarty\Smarty;

// $smarty = new Smarty();

class VulnerableApp {
  private $smarty;

  public function __construct() {
    $this->smarty = new Smarty();
  }

  public function route($path)
  {
    switch ($path)
    {
      case '/':
        $this->showLogin();
        break;
      case '/dashboard':
        $this->showDashoard();
        break;
      case '/upload':
        $this->showUploadForm();
        break;
      case '/process_upload':
        $this->processFileUpload();
        break;
      case '/search':
        $this->showSearch();
        break;
      default:
        $this->show404();
        break;
    }
  }

  private function showLogin() {
    // XSS
    $welcomeMessage = isset($_GET['message']) ? $_GET['message'] : 'Welcome!';
    // echo $_GET;
    // echo "Debug: Welcome message is: $welcomeMessage";
    $this->smarty->assign('welcomeMessage', $welcomeMessage);
    $this->smarty->display('login.tpl');
  }

  private function showDashoard() {
    // Przykad wycieku informacji o bledach
    if (!isset($_SESSION['user'])) {
            die('Access denied. Debug info: No session detected.');
        }

        $this->smarty->display('dashboard.tpl');
  }

  private function showUploadForm() {
        $this->smarty->display('upload.tpl');
    }

    private function processFileUpload() {
      // Niezabezpieczony upload plikow
      if (isset($_FILES['file'])) {
        $file = $_FILES['file'];
        $destination = __DIR__ . '/../uploads/' . $file['name'];

        if (move_uploaded_file($file['tmp_name'], $destination)) {
          echo "File uploaded successfully to: $destination.";
        } else {
          echo "Error uploading file.";
        }
      } else {
        echo "No file uploaded.";
      }
    }

    private function showSearch() {
      // Przyklad podatnosci na SQL Injection
      $query = isset($_GET['q']) ? $_GET['q'] : '';

      $conn = $this->connect();

      $sql = "SELECT * FROM users WHERE username = '$query'";
      $result = $conn->query($sql);
      $results = array();
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              $data[] = $row;
          }
      }
      $conn->close();
      
      $this->smarty->assign('results', $data);
      $this->smarty->display('search.tpl');
    }

    private function show404() {
      http_response_code(404);
      echo "404 Not Found";
    }

    private function connect() {
      $host = "db";
      $user = "vulnerable_user";
      $pass = "vulnerable_user_pass";
      $database = "vulnerable_app";
      $port = 3306;

      $conn = new mysqli($host, $user, $pass, $database, 3306);
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      return $conn;
    }
}