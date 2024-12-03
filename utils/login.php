<?php
session_start();

require '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, name, password FROM vagaexpv_user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $user_name, $db_password);
        $stmt->fetch();

        if ($password == $db_password) {
            $_SESSION['user_id'] = $user_id;
            $_SESSION['email'] = $email;
            $_SESSION['user_name'] = $user_name;

            echo "Success";
            
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "User not found.";
    }

    $stmt->close();
    $conn->close();
}
?>