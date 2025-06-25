<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= isset($title) ? $title : 'Admin Panel' ?></title>
    <link rel="icon" href="<?= base_url('uploads/admin/favicon.jpg') ?>" type="image/x-icon">

    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/toastr.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid d-flex justify-content-start align-items-center">
        <a class="navbar-brand d-flex align-items-center ms-2 logo" href="<?= admin_url('dashboard') ?>">
            <img src="<?= base_url('uploads/admin/logo.jpg') ?>" alt="Logo" class="logo-img" id="sidebar-logo">
        </a>
        <span class="toggle-btn" onclick="toggleSidebar()">
            <i class="fa-solid fa-bars"></i>
        </span>
    </div>
</nav>

