<?php
declare(strict_types=1);

// Redirect root requests to the public directory
header('Location: public/index.php');
exit;
