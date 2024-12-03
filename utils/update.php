<?php
  require '../config/db.php';
  require '../config/constant.php';

  session_start();
  if (!isset($_SESSION['user_name'])) {
      http_response_code(403);
      exit('Unauthorized');
  }

  // Check if the form is submitted and file is uploaded
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST["id"];
    $type = $_POST["type"];
    $description = $_POST["description"];
    $url = $_POST["url"];

    if($type === 'pictures') {
      if (isset($_FILES['image'])) {
        $file = $_FILES['image'];
        
        $targetFile = '../assets/'.$url;

        // Check for errors during upload
        if ($file['error'] !== UPLOAD_ERR_OK) {
            die('Error during file upload.');
        }

        // Validate file type (allow only images)
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($file['type'], $allowedTypes)) {
            die('Only JPG, PNG, and GIF files are allowed.');
        }

        $maxFileSize = 10 * 1024 * 1024;
        if ($file['size'] > $maxFileSize) {
            die('File size exceeds 10MB.');
        }

        // Move the uploaded file to the target directory
        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
          $sql = "UPDATE vagaexpv_carhandling_content SET description=? WHERE id=?";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param("si", $description, $id);
          
          header('Content-Type: application/json');

          if($stmt->execute()) {
            echo json_encode([
                'success' => true
            ]);
          } else {
            echo json_encode([
                'success' => false,
                'message' => 'Error while updating content'
            ]);
          }
        } else {
          echo json_encode([
              'success' => false,
              'message' => 'Failed to move the uploaded file.'
          ]);
        }
      } else {
        $sql = "UPDATE vagaexpv_carhandling_content SET description=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $description, $id);
        
        header('Content-Type: application/json');

        if($stmt->execute()) {
          echo json_encode([
              'success' => true
          ]);
        } else {
          echo json_encode([
              'success' => false,
              'message' => 'Error while updating content'
          ]);
        }
      }
    } else {

      $sql = "UPDATE vagaexpv_carhandling_content SET description=? WHERE id=?";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("si", $description, $id);
      
      header('Content-Type: application/json');

      if($stmt->execute()) {
        echo json_encode([
            'success' => true
        ]);
      } else {
        echo json_encode([
            'success' => false,
            'message' => 'Error while updating content'
        ]);
      }
    }
  }

?>