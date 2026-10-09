<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../includes/functions.php';
require_role('admin','teacher','student','parent');
$user = current_user();
$counts = ['students'=>0,'admissions'=>0,'messages'=>0,'notices'=>0];
$students = $admissions = $messages = [];
if ($user['role'] === 'admin') {
    foreach (['students'=>'students','admissions'=>'admissions','messages'=>'contact_messages','notices'=>'notices'] as $key=>$table) {
        try { $counts[$key] = (int)db()->query("SELECT COUNT(*) FROM {$table}")->fetchColumn(); } catch (Throwable $e) {}
    }
    try { $students = db()->query('SELECT id, admission_no, full_name, class_name, created_at FROM students ORDER BY id DESC LIMIT 10')->fetchAll(); } catch (Throwable $e) {}
    try { $admissions = db()->query('SELECT id, student_name, parent_name, class_applied, email, created_at FROM admissions ORDER BY id DESC LIMIT 8')->fetchAll(); } catch (Throwable $e) {}
    try { $messages = db()->query('SELECT name,email,subject,created_at FROM contact_messages ORDER BY id DESC LIMIT 5')->fetchAll(); } catch (Throwable $e) {}
}
$pageTitle = 'Dashboard | INRS ERP';
$assetPrefix = '../public/';
$homePrefix = '../public/index.php';
$loginPrefix = '../public/login.php';
$dashboardPrefix = 'dashboard.php';
$logoutPrefix = '../logout.php';
require __DIR__ . '/../includes/header.php';
?>
<section class="dashboard-top"><div class="container dashboard-heading"><div><span class="eyebrow eyebrow-dark">SCHOOL ERP</span><h1>Hello, <?= e($user['full_name']) ?>.</h1><p>Signed in as <b><?= e(ucfirst($user['role'])) ?></b>. This is the starter management dashboard.</p></div><a class="btn btn-primary" href="../public/index.php">View public site ↗</a></div></section>
<section class="section dashboard-section"><div class="container">
<?php if ($user['role'] === 'admin'): ?>
<div class="dashboard-stats"><div class="dash-stat"><span>Total students</span><strong><?= $counts['students'] ?></strong></div><div class="dash-stat"><span>Admission enquiries</span><strong><?= $counts['admissions'] ?></strong></div><div class="dash-stat"><span>Contact messages</span><strong><?= $counts['messages'] ?></strong></div><div class="dash-stat"><span>Notices</span><strong><?= $counts['notices'] ?></strong></div></div>
<div class="panel"><div class="panel-heading"><h2>Recent students</h2><span>Latest 10 records</span></div><div class="table-scroll"><table><thead><tr><th>Admission No.</th><th>Name</th><th>Class</th><th>Added</th></tr></thead><tbody><?php if ($students): foreach ($students as $s): ?><tr><td><?= e($s['admission_no']) ?></td><td><?= e($s['full_name']) ?></td><td><?= e($s['class_name']) ?></td><td><?= e($s['created_at']) ?></td></tr><?php endforeach; else: ?><tr><td colspan="4">No student records yet. Add records through your future student-management module.</td></tr><?php endif; ?></tbody></table></div></div>
<div class="panel"><div class="panel-heading"><h2>Admission enquiries</h2><span>Latest 8 records</span></div><div class="table-scroll"><table><thead><tr><th>Student</th><th>Parent</th><th>Class</th><th>Email</th><th>Date</th></tr></thead><tbody><?php if ($admissions): foreach ($admissions as $a): ?><tr><td><?= e($a['student_name']) ?></td><td><?= e($a['parent_name']) ?></td><td><?= e($a['class_applied']) ?></td><td><?= e($a['email']) ?></td><td><?= e($a['created_at']) ?></td></tr><?php endforeach; else: ?><tr><td colspan="5">No enquiries received yet.</td></tr><?php endif; ?></tbody></table></div></div>
<div class="panel"><div class="panel-heading"><h2>Recent contact messages</h2></div><div class="table-scroll"><table><thead><tr><th>Name</th><th>Email</th><th>Subject</th><th>Date</th></tr></thead><tbody><?php if ($messages): foreach ($messages as $m): ?><tr><td><?= e($m['name']) ?></td><td><?= e($m['email']) ?></td><td><?= e($m['subject']) ?></td><td><?= e($m['created_at']) ?></td></tr><?php endforeach; else: ?><tr><td colspan="4">No contact messages yet.</td></tr><?php endif; ?></tbody></table></div></div>
<?php else: ?>
<div class="panel"><h2>Your <?= e($user['role']) ?> portal</h2><p>This starter has authenticated role sessions. Build out role-specific timetable, attendance, fees and results screens before using it for a real school.</p></div>
<?php endif; ?>
</div></section>
<?php require __DIR__ . '/../includes/footer.php'; ?>
