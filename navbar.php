<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<div class="navbar">
    <a href="dashboard.php">🏠 Dashboard</a>
    <a href="search.php">🔍 XSS Search</a>
    <a href="upload.php">📤 File Upload</a>
    <a href="logout.php">🚪 Logout</a>
</div>
