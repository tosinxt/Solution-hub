<?php
// index.php
session_start();
if (isset($_SESSION['user_id'])) {
    if ($_SESSION['role'] == 'admin') {
        header('Location: admin/index.php');
    } else {
        header('Location: user/index.php');
    }
    exit;
} else {
    header('Location: auth/login.php');
    exit;
}
?>
