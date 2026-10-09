# School ERP Starter Project

This is an original starter implementation inspired by common school ERP features. It is **not** the source code of inrsedu.com and does not copy its private backend.

## Stack
- PHP 8+
- MySQL 8+
- HTML/CSS/JavaScript (responsive frontend)
- PDO prepared statements and password hashing

## Features included in this starter
- Public homepage with navigation, sections, notices, facilities, gallery and contact form
- Login/logout with role-based sessions (admin, teacher, student, parent)
- Admin dashboard starter with student list and admission/contact submissions
- Student admission form and database persistence
- Contact form and database persistence
- SQL schema and sample demo accounts

## Setup (XAMPP)
1. Install XAMPP with PHP 8+ and MySQL.
2. Copy `inrs_school_erp` into `C:\xampp\htdocs\`.
3. Start Apache and MySQL from XAMPP Control Panel.
4. Open phpMyAdmin at `http://localhost/phpmyadmin`.
5. Import `database/schema.sql`.
6. Edit `config/database.php` if your MySQL username/password differs.
7. Visit `http://localhost/inrs_school_erp/public/`.

## Demo login
After importing `database/schema.sql`, use:
- Username: `admin`
- Password: `password`

**Change the demo password immediately** before any real use. The seed password is for local demonstration only.

## Important production notes
This is a foundation, not a fully audited production ERP. Before real school use, add CSRF protection, password reset, audit logs, backups, rate limiting, email/SMS integration, permissions review, validation, and HTTPS. Never use real student data in a public demo.
