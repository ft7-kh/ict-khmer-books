<?php
session_start();

$STATIC_PASSWORD = "ICTSMC2026";  // ✅ CHANGE THIS

if ($_POST['password'] === $STATIC_PASSWORD) {
    $_SESSION['logged_in'] = true;
    header("Location: index.php");
    exit();
}

echo "Wrong password";
?>
