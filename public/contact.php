<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../includes/functions.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') redirect('index.php#contact');
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');
if (!$name || !filter_var($email, FILTER_VALIDATE_EMAIL) || !$message) {
    flash('Please provide your name, a valid email and a message.', 'error');
    redirect('index.php#contact');
}
try {
    $stmt = db()->prepare('INSERT INTO contact_messages (name,email,subject,message) VALUES (?,?,?,?)');
    $stmt->execute([$name,$email,$subject,$message]);
    flash('Thanks for contacting us. Your message has been received.', 'success');
} catch (Throwable $e) {
    flash('Your message could not be saved. Please check database setup and try again.', 'error');
}
redirect('index.php#contact');
