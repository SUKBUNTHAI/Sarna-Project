<?php
session_start();

session_unset();
session_destroy();

header("Location: http://localhost/Sarna-Project/QR-Teacher-Attendance/admin/teacher_account/login.php");
