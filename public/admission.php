<?php
require_once __DIR__ . '/../includes/functions.php';
$pageTitle = 'Admission Enquiry | INRS';
$assetPrefix = '';
$homePrefix = 'index.php';
$loginPrefix = 'login.php';
$dashboardPrefix = '../admin/dashboard.php';
$logoutPrefix = '../logout.php';
require __DIR__ . '/../includes/header.php';
$f = take_flash();
?>
<section class="page-hero"><div class="container"><span class="eyebrow">ADMISSIONS</span><h1>Admission <em>enquiry</em></h1><p>Share your details and the school office can contact you.</p></div></section>
<section class="section"><div class="container narrow">
<?php if ($f): ?><div class="alert <?= e($f['type']) ?>"><?= e($f['message']) ?></div><?php endif; ?>
<form class="form-card" method="post" action="submit_admission.php">
<div class="form-row"><label>Student full name *<input name="student_name" required maxlength="150"></label><label>Parent/guardian name *<input name="parent_name" required maxlength="150"></label></div>
<div class="form-row"><label>Parent email *<input type="email" name="email" required maxlength="190"></label><label>Phone number *<input name="phone" required maxlength="25"></label></div>
<div class="form-row"><label>Class applying for *<select name="class_applied" required><option value="">Choose class</option><?php foreach (['Nursery','LKG','UKG','Class 1','Class 2','Class 3','Class 4','Class 5','Class 6','Class 7','Class 8','Class 9','Class 10','Class 11','Class 12'] as $c): ?><option><?= e($c) ?></option><?php endforeach; ?></select></label><label>Date of birth<input type="date" name="dob"></label></div>
<label>Address<textarea name="address" rows="3" maxlength="1000"></textarea></label><label>Additional information<textarea name="notes" rows="3" maxlength="2000"></textarea></label>
<button class="btn btn-primary" type="submit">Submit enquiry <span>→</span></button>
</form></div></section>
<?php require __DIR__ . '/../includes/footer.php'; ?>
