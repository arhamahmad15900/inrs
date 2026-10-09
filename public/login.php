<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../includes/functions.php';
if (current_user()) redirect('../admin/dashboard.php');
$pageTitle = 'Login | INRS ERP';
$assetPrefix = '';
$homePrefix = 'index.php';
$loginPrefix = 'login.php';
$dashboardPrefix = '../admin/dashboard.php';
$logoutPrefix = '../logout.php';
require __DIR__ . '/../includes/header.php';
$f = take_flash();
?>
<section class="page-hero"><div class="container"><span class="eyebrow">SECURE ACCESS</span><h1>Welcome <em>back.</em></h1><p>Sign in to the school management portal.</p></div></section>
<section class="section"><div class="container narrow">
<?php if ($f): ?><div class="alert <?= e($f['type']) ?>"><?= e($f['message']) ?></div><?php endif; ?>
<form class="form-card" method="post" action="authenticate.php"><label>Username<input name="username" required autocomplete="username"></label><label>Password<input name="password" type="password" required autocomplete="current-password"></label><button class="btn btn-primary btn-full" type="submit">Sign in <span>→</span></button><p class="form-help">Local demo: username <b>admin</b>, password <b>password</b>. Change this password before any real deployment.</p></form>
</div></section>
<?php require __DIR__ . '/../includes/footer.php'; ?>
