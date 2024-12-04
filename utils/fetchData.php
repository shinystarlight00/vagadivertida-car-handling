<?php
  require '../config/db.php';

  session_start();
  if (!isset($_SESSION['user_name'])) {
      http_response_code(403);
      exit('Unauthorized');
  }

  $type = isset($_GET['type']) ? $_GET['type'] : 'pictures';
  $pageName = isset($_GET['pageName']) ? $_GET['pageName'] : 'home';
  $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
  $itemsPerPage = isset($_GET['limit']) ? intval($_GET['limit']) : 12;

  $offset = ($page - 1) * $itemsPerPage;

  $data = [];

  $query = "SELECT * FROM vagaexpv_carhandling_content WHERE type = ? AND page = ? LIMIT ? OFFSET ?";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("ssii", $type, $pageName, $itemsPerPage, $offset);
  $stmt->execute();
  $result = $stmt->get_result();
  while ($row = $result->fetch_assoc()) {
      $data[] = $row;
  }

  header('Content-Type: application/json');

  echo json_encode([
      'success' => true,
      'data' => $data,
  ]);

?>