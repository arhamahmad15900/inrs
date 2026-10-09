<?php
require_once __DIR__ . '/functions.php';
$pageTitle = $pageTitle ?? 'INRS School ERP';
$user = current_user();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="INRS University — Excellence, Innovation, Knowledge. A premier learning community where students discover their strengths and prepare for tomorrow.">
  <title><?= e($pageTitle) ?></title>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,800;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= e($assetPrefix ?? '') ?>assets/css/style.css">
</head>
<body>

<!-- PAGE LOADER -->
<div id="page-loader">
  <img src="<?= e($assetPrefix ?? '') ?>assets/images/logo.jpg" alt="INRS University" class="loader-logo">
  <div class="loader-bar"></div>
  <span class="loader-text">INRS University</span>
</div>

<!-- CURSOR GLOW is injected by JS on desktop -->

<header class="site-header">
  <div class="container nav-wrap">
    <a class="brand" href="<?= e($homePrefix ?? 'index.php') ?>">
      <img src="<?= e($assetPrefix ?? '') ?>assets/images/logo.jpg" alt="INRS University Logo" class="brand-logo">
      <span class="brand-text">
        <strong>INRS</strong>
        <small>University</small>
      </span>
    </a>
    <button class="nav-toggle" aria-label="Toggle navigation" aria-expanded="false">☰</button>
    <nav class="nav-links">
      <a href="<?= e($homePrefix ?? 'index.php') ?>#home">Home</a>
      <a href="<?= e($homePrefix ?? 'index.php') ?>#about">About</a>
      <a href="<?= e($homePrefix ?? 'index.php') ?>#facilities">Facilities</a>
      <a href="<?= e($homePrefix ?? 'index.php') ?>#notices">Notices</a>
      <a href="<?= e($homePrefix ?? 'index.php') ?>#contact">Contact</a>
      <?php if ($user): ?>
        <a class="nav-cta" href="<?= e($dashboardPrefix ?? 'dashboard.php') ?>">Dashboard</a>
        <a href="<?= e($logoutPrefix ?? 'logout.php') ?>">Logout</a>
      <?php else: ?>
        <a class="nav-cta" href="<?= e($loginPrefix ?? 'login.php') ?>">Login</a>
      <?php endif; ?>
    </nav>
  </div>
</header>
<main>
