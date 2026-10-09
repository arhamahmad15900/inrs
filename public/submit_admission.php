<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../includes/functions.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') redirect('admission.php');

$student = trim($_POST['student_name'] ?? '');
$parent = trim($_POST['parent_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$class = trim($_POST['class_applied'] ?? '');
$dob = trim($_POST['dob'] ?? '');
$address = trim($_POST['address'] ?? '');
$notes = trim($_POST['notes'] ?? '');

if (!$student || !$parent || !filter_var($email, FILTER_VALIDATE_EMAIL) || !$phone || !$class) {
    flash('Please complete all required fields with valid details.', 'error');
    redirect('admission.php');
}
try {
    $stmt = db()->prepare('INSERT INTO admissions (student_name,parent_name,email,phone,class_applied,dob,address,notes) VALUES (?,?,?,?,?,?,?,?)');
    $stmt->execute([$student,$parent,$email,$phone,$class,$dob ?: null,$address,$notes]);
    flash('Thank you. Your admission enquiry has been submitted.', 'success');
} catch (Throwable $e) {
    flash('The form could not be saved. Please check database setup and try again.', 'error');
}
redirect('admission.php');
