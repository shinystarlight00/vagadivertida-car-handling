<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);

    $response = $_POST['recaptchaResponse'];
    $action = $_POST['recaptchaAction'];
    
    if(grecaptchaVerify($response, $action)) {
      if (empty($name) || empty($email)) {
          echo json_encode(["error" => "All fields are required."]);
          exit;
      }

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo json_encode(["error" => "Invalid email format."]);
          exit;
      }

      $to = "contact@vagadivertida.com";
      $subject = "New Enquiry from $name";


      if($action == "contact") {
        
        $subject = trim($_POST["subject"]);
        $message = trim($_POST["message"]);

        $body = "Name: $name\nEmail: $email\nMessage:\n$message";

      }
      
      $headers = "From: $email\r\n";
      $headers .= "Reply-To: $email\r\n";
      $headers .= "X-Mailer: PHP/" . phpversion();

      if (mail($to, $subject, $body, $headers)) {
          echo json_encode(["success" => "Your email has been sent."]);
      } else {
          echo json_encode(["error" => "Failed to send your email."]);
      }
    } else {
        echo json_encode(["error" => "Verification failed. Please try again."]);
    }
  }

  function grecaptchaVerify($response, $action) {
    $secretKey = '6Lftt4kqAAAAAOyanQeFsYutza80KbFXx20U2Bfa';
    $responseKey = $response;
    $userIP = $_SERVER['REMOTE_ADDR'];

    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret' => $secretKey,
        'response' => $responseKey,
        'remoteip' => $userIP
    ];

    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        ]
    ];
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $response = json_decode($result);

    if ($response->success && $response->action == $action && $response->score >= 0.5) {
        return true;
    } else {
        return false;
    }
  }
?>