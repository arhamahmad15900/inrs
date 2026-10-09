<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../includes/functions.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') redirect('login.php');
$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';
$stmt = db()->prepare('SELECT id, username, password_hash, full_name, role FROM users WHERE username = ? AND is_active = 1 LIMIT 1');
$stmt->execute([$username]);
$user = $stmt->fetch();
if (!$user || !password_verify($password, $user['password_hash'])) {
    flash('Incorrect username or password.', 'error');
    redirect('login.php');
}
session_regenerate_id(true);
$_SESSION['user'] = ['id' => (int)$user['id'], 'username' => $user['username'], 'full_name' => $user['full_name'], 'role' => $user['role']];
redirect('../admin/dashboard.php');
