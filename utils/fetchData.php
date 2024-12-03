<?php
  require '../config/db.php';

  session_start();
  if (!isset($_SESSION['user_name'])) {
      http_response_code(403);
      exit('Unauthorized');
  }

  $type = isset($_GET['type']) ? $_GET['type'] : 'pictures';
  $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
  $itemsPerPage = isset($_GET['itemsPerPage']) ? intval($_GET['itemsPerPage']) : 12;

  $offset = ($page - 1) * $itemsPerPage;

  $data = [];

  $query = "SELECT * FROM vagaexpv_carhandling_content WHERE type = ? LIMIT ? OFFSET ?";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("sii", $type, $itemsPerPage, $offset);
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