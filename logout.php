<?php

session_start();

$sessionId = "admin";
session_id($sessionId);

// Destroy the session
session_destroy();

header("Location: ./login.php");
exit();
?>