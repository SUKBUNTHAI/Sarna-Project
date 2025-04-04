<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Admin Dashboard</title>
    <meta
        content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
        name="viewport" />
    <link
        rel="icon"
        href="../assets/img/school-logo.png"
        type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["../assets/css/fonts.min.css"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/plugins.min.css" />
    <link rel="stylesheet" href="../assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../assets/css/demo.css" />

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="../dashboard.php" class="logo">
                        <img src="../assets/img/school-logo.png" alt="navbar brand" class="navbar-brand" height="60" />
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary">
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Teacher Management</h4>
                        </li>
                        <li class="nav-item active">
                            <a data-bs-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                                <i class="fas fa-user"></i>
                                <p>Teacher</p>
                                <span class="caret"></span>
                            </a>

                            <div class="collapse" id="dashboard">
                                <ul class="nav nav-collapse">

                                    <li>
                                        <a href="../admin/teacher/add.php">
                                            <span class="sub-item">Add Teacher</span>
                                        </a>
                                    </li>


                                    <li>
                                        <a href="../admin/teacher/teacher_list.php">
                                            <span class="sub-item">Teacher List</span>
                                        </a>
                                    </li>


                                    <li>
                                        <a href="../admin/teacher_attendance/attendance.php">
                                            <span class="sub-item">Attendance</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../admin/teacher/qr_code.php">
                                            <span class="sub-item">QR Code</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../admin/teacher/report.php">
                                            <span class="sub-item">Report</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./teacher_account/account.php">
                                            <span class="sub-item">Account</span>
                                        </a>
                                    </li>
                                </ul>


                            </div>







                        </li>

                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Components</h4>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#base">
                                <i class="fas fa-layer-group"></i>
                                <p>Department</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="base">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Add Department</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">View All Department</span>
                                        </a>
                                    </li>



                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarLayouts">
                                <i class="fas fa-th-list"></i>
                                <p>Major</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="sidebarLayouts">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Add Major</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">View All Majors</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#forms">
                                <i class="fas fa-pen-square"></i>
                                <p>Subject</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="forms">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Add Subject</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">View All Subjects</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#tables">
                                <i class="fas fa-table"></i>
                                <p>Rooms</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="tables">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Add Room</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">View All Rooms</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>




                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Teacher Attendance</h4>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#teacher-attendance">
                                <i class="fas fa-layer-group"></i>
                                <p>Teacher Attendance</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="teacher-attendance">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Add Attendance</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">View All Attendance</span>
                                        </a>
                                    </li>



                                </ul>
                            </div>
                        </li>



                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="../dashboard.php" class="logo">
                            <img
                                src="../assets/img/school-logo.png"
                                alt="navbar brand"
                                class="navbar-brand"
                                height="60" />
                        </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                    <!-- End Logo Header -->
                </div>
                <!-- Navbar Header -->
                <nav
                    class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                    <div class="container-fluid">
                        <nav
                            class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pe-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input
                                    type="text"
                                    placeholder="Search ..."
                                    class="form-control" />
                            </div>
                        </nav>

                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <li
                                class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                                <a
                                    class="nav-link dropdown-toggle"
                                    data-bs-toggle="dropdown"
                                    href="#"
                                    role="button"
                                    aria-expanded="false"
                                    aria-haspopup="true">
                                    <i class="fa fa-search"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-search animated fadeIn">
                                    <form class="navbar-left navbar-form nav-search">
                                        <div class="input-group">
                                            <input
                                                type="text"
                                                placeholder="Search ..."
                                                class="form-control" />
                                        </div>
                                    </form>
                                </ul>
                            </li>
                            <li class="nav-item topbar-icon dropdown hidden-caret">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    id="messageDropdown"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-envelope"></i>
                                </a>
                                <ul
                                    class="dropdown-menu messages-notif-box animated fadeIn"
                                    aria-labelledby="messageDropdown">
                                    <li>
                                        <div
                                            class="dropdown-title d-flex justify-content-between align-items-center">
                                            Messages
                                            <a href="#" class="small">Mark all as read</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-notif-scroll scrollbar-outer">
                                            <div class="notif-center">
                                                <a href="#">
                                                    <div class="notif-img">
                                                        <img
                                                            src="../assets/img/jm_denis.jpg"
                                                            alt="Img Profile" />
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="subject">Jimmy Denis</span>
                                                        <span class="block"> How are you ? </span>
                                                        <span class="time">5 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-img">
                                                        <img
                                                            src="../assets/img/chadengle.jpg"
                                                            alt="Img Profile" />
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="subject">Chad</span>
                                                        <span class="block"> Ok, Thanks ! </span>
                                                        <span class="time">12 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-img">
                                                        <img
                                                            src="../assets/img/mlane.jpg"
                                                            alt="Img Profile" />
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="subject">Jhon Doe</span>
                                                        <span class="block">
                                                            Ready for the meeting today...
                                                        </span>
                                                        <span class="time">12 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-img">
                                                        <img
                                                            src="../assets/img/talha.jpg"
                                                            alt="Img Profile" />
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="subject">Talha</span>
                                                        <span class="block"> Hi, Apa Kabar ? </span>
                                                        <span class="time">17 minutes ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item topbar-icon dropdown hidden-caret">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    id="notifDropdown"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-bell"></i>
                                    <span class="notification">4</span>
                                </a>
                                <ul
                                    class="dropdown-menu notif-box animated fadeIn"
                                    aria-labelledby="notifDropdown">
                                    <li>
                                        <div class="dropdown-title">
                                            You have 4 new notification
                                        </div>
                                    </li>
                                    <li>
                                        <div class="notif-scroll scrollbar-outer">
                                            <div class="notif-center">
                                                <a href="#">
                                                    <div class="notif-icon notif-primary">
                                                        <i class="fa fa-user-plus"></i>
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="block"> New user registered </span>
                                                        <span class="time">5 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-icon notif-success">
                                                        <i class="fa fa-comment"></i>
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="block">
                                                            Rahmad commented on Admin
                                                        </span>
                                                        <span class="time">12 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-img">
                                                        <img
                                                            src="../assets/img/profile2.jpg"
                                                            alt="Img Profile" />
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="block">
                                                            Reza send messages to you
                                                        </span>
                                                        <span class="time">12 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-icon notif-danger">
                                                        <i class="fa fa-heart"></i>
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="block"> Farrah liked Admin </span>
                                                        <span class="time">17 minutes ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item topbar-icon dropdown hidden-caret">
                                <a
                                    class="nav-link"
                                    data-bs-toggle="dropdown"
                                    href="#"
                                    aria-expanded="false">
                                    <i class="fas fa-layer-group"></i>
                                </a>
                                <div class="dropdown-menu quick-actions animated fadeIn">
                                    <div class="quick-actions-header">
                                        <span class="title mb-1">Quick Actions</span>
                                        <span class="subtitle op-7">Shortcuts</span>
                                    </div>
                                    <div class="quick-actions-scroll scrollbar-outer">
                                        <div class="quick-actions-items">
                                            <div class="row m-0">
                                                <a class="col-6 col-md-4 p-0" href="#">
                                                    <div class="quick-actions-item">
                                                        <div class="avatar-item bg-danger rounded-circle">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </div>
                                                        <span class="text">Calendar</span>
                                                    </div>
                                                </a>
                                                <a class="col-6 col-md-4 p-0" href="#">
                                                    <div class="quick-actions-item">
                                                        <div
                                                            class="avatar-item bg-warning rounded-circle">
                                                            <i class="fas fa-map"></i>
                                                        </div>
                                                        <span class="text">Maps</span>
                                                    </div>
                                                </a>
                                                <a class="col-6 col-md-4 p-0" href="#">
                                                    <div class="quick-actions-item">
                                                        <div class="avatar-item bg-info rounded-circle">
                                                            <i class="fas fa-file-excel"></i>
                                                        </div>
                                                        <span class="text">Reports</span>
                                                    </div>
                                                </a>
                                                <a class="col-6 col-md-4 p-0" href="#">
                                                    <div class="quick-actions-item">
                                                        <div
                                                            class="avatar-item bg-success rounded-circle">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <span class="text">Emails</span>
                                                    </div>
                                                </a>
                                                <a class="col-6 col-md-4 p-0" href="#">
                                                    <div class="quick-actions-item">
                                                        <div
                                                            class="avatar-item bg-primary rounded-circle">
                                                            <i class="fas fa-file-invoice-dollar"></i>
                                                        </div>
                                                        <span class="text">Invoice</span>
                                                    </div>
                                                </a>
                                                <a class="col-6 col-md-4 p-0" href="#">
                                                    <div class="quick-actions-item">
                                                        <div
                                                            class="avatar-item bg-secondary rounded-circle">
                                                            <i class="fas fa-credit-card"></i>
                                                        </div>
                                                        <span class="text">Payments</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item topbar-user dropdown hidden-caret">
                                <a
                                    class="dropdown-toggle profile-pic"
                                    data-bs-toggle="dropdown"
                                    href="#"
                                    aria-expanded="false">
                                    <div class="avatar-sm">
                                        <img
                                            src="../assets/img/admin.jpg"
                                            alt="..."
                                            class="avatar-img rounded-circle" />
                                    </div>
                                    <span class="profile-username">
                                        <span class="op-7">Hi,</span>
                                        <span class="fw-bold">Suk Bunthai</span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <div class="user-box">
                                                <div class="avatar-lg">
                                                    <img
                                                        src="../assets/img/admin.jpg"
                                                        alt="image profile"
                                                        class="avatar-img rounded" />
                                                </div>
                                                <div class="u-text">
                                                    <h4>Suk Bunthai</h4>
                                                    <p class="text-muted">hello@example.com</p>
                                                    <a
                                                        href="#"
                                                        class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">My Profile</a>
                                            <a class="dropdown-item" href="#">My Balance</a>
                                            <a class="dropdown-item" href="#">Inbox</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Account Setting</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="../logout.php">Logout</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>

            <div class="container">
                <div class="page-inner">
                    <div class="page-header">
                        <h3 class="fw-bold mb-3">Teacher List</h3>
                        <ul class="breadcrumbs mb-3">
                            <li class="nav-home">
                                <a href="../dashboard.php">
                                    <i class="icon-home"></i>
                                </a>
                            </li>

                            <li class="separator">
                                <i class="icon-arrow-right"></i>
                            </li>
                            <li class="nav-item">
                                <a href="add.php">Add Teacher</a>
                            </li>
                            <li class="separator">
                                <i class="icon-arrow-right"></i>
                            </li>
                            <li class="nav-item">
                                <a href="teacher_list.php">Teacher List</a>
                            </li>
                            <li class="separator">
                                <i class="icon-arrow-right"></i>
                            </li>
                            <li class="nav-item">
                                <a href="../teacher_attendance/attendance.php">Attendance</a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">

                        <div class="ms-md-auto py-2 py-md-0">
                            <a href="../teacher/teacher.php" class="btn btn-label-info btn-round me-2">Manage</a>
                            <a href="../teacher/add.php" class="btn btn-primary btn-round">Add New</a>
                        </div>
                    </div>



                    <div class="table-responsive">
                        <table class=" table  table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Sex</th>
                                    <th>Age</th>
                                    <th>Date of Birth</th>
                                    <th>Place of Birth</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Image</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                                <?php
                                include('../database/connection.php');
                                global $conn;
                                $sql = 'SELECT * FROM teachers';

                                foreach ($conn->query($sql) as $row) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['teacher_id']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['sex']; ?></td>
                                        <td><?php echo $row['age']; ?></td>
                                        <td><?php echo $row['dob']; ?></td>
                                        <td><?php echo $row['pob']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
                                        <td><img src="Images_Upload/<?php echo $row["image"] ?>" alt="" class="avatar-sm avatar-img rounded-circle"></td>
                                        <!-- <td class="avatar-img rounded-circle"><?php echo $row['image']; ?></td> -->



                                        <td>


                                            <a href='edit.php?id=<?php echo $row['teacher_id']; ?>'>
                                                <i class="fas fa-edit p-2 text-edit"></i>
                                            </a>
                                            <a href='delete.php?id=<?php echo $row['teacher_id']; ?>' id="delete">
                                                <i class="fas fa-trash p-2 text-danger"></i>
                                            </a>

                                        </td>
                                    </tr>
                                <?php
                                } ?>


                    </div>
                </div>
            </div>
            </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>


    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    </div>

    <!-- Custom template | don't include it in your project! -->

    </div>
    <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>
    <!-- <script src="./teacher.js"></script> -->
    <!-- jQuery Scrollbar -->
    <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- Datatables -->
    <!--<script src="../assets/js/plugin/datatables/datatables.min.js"></script>-->
    <!-- Kaiadmin JS -->
    <script src="../assets/js/kaiadmin.min.js"></script>


    <script>
        $("#alert_demo_5").click(function(e) {
            swal({
                title: "Input Something",
                html: '<br><input class="form-control" placeholder="Input Something" id="input-field">',
                content: {
                    element: "input",
                    attributes: {
                        placeholder: "Input Something",
                        type: "text",
                        id: "input-field",
                        className: "form-control",
                    },
                },
                buttons: {
                    cancel: {
                        visible: true,
                        className: "btn btn-danger",
                    },
                    confirm: {
                        className: "btn btn-success",
                    },
                },
            }).then(function() {
                swal("", "You entered : " + $("#input-field").val(), "success");
            });
        });
    </script>

</body>

</html>