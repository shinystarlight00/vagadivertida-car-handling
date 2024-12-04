<?php
  require '../../config/db.php';

  session_start();
              
  $signed = isset($_SESSION['user_name']);
  
  if(!$signed) {
    header("Location: /admin.php");
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
    
    <?php require 'style.php'; ?>

    <script>
        const queryString = window.location.search;

        const params = new URLSearchParams(queryString);

        const pageName = params.get("page");
    </script>
</head>
<body>
    <header>
        <h1>Admin Portal</h1>
        <button class="toggle-sidebar" id="toggle-sidebar">☰</button>
    </header>
    <div class="overlay" id="overlay"></div>
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h2>Admin Panel</h2>
        </div>
        <div class="sidebar-menu">
            <a href="home.php?page=home">Home</a>
            <a href="import.php?page=import">Import</a>
            <a href="export.php?page=export">Export</a>
            <a href="services.php?page=services">Services</a>
            <a href="quote.php?page=quote">Request a quote</a>
            <a href="contact.php?page=contact">Contact</a>
        </div>
        <div class="sidebar-footer">
            <button class="btn-logout" onclick="logout()">Log out</button>
        </div>
    </div>