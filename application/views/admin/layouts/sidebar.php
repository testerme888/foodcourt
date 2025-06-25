<?php
$CI =& get_instance();
$current_uri = $CI->uri->segment(2);
?>

<div class="sidebar" id="sidebar">
    <a href="<?= admin_url('dashboard') ?>" class="<?= ($current_uri == 'dashboard') ? 'active' : '' ?>">
        <i class="fa-solid fa-house"></i> <span class="link-text">Dashboard</span>
    </a>
      <a href="<?= admin_url('home') ?>" class="<?= ($current_uri == 'home') ? 'active' : '' ?>">
        <i class="fa-solid fa-file-text"></i> <span class="link-text">Home Page</span>
    </a>

    <!-- Expenses Menu -->
    <a href="#pageMenu" data-bs-toggle="collapse" aria-expanded="false" class="d-flex justify-content-between align-items-center menu-toggle <?= ($current_uri == 'page') ? 'active' : '' ?>">
        <div><i class="fa-solid fa-coins"></i> <span class="link-text">Page</span></div>
        <i class="fa-solid fa-chevron-left toggle-icon"></i>
    </a>
    <div class="menu collapse <?= ($current_uri == 'page') ? 'show' : '' ?>" id="pageMenu">
        <a href="<?= admin_url('page') ?>" class="ps-4 d-block <?= ($this->uri->segment(2) == 'page' && $this->uri->segment(3) == '') ? 'active' : '' ?>">
            <i class="fa fa-list"></i> Country
        </a>
        <a href="<?= admin_url('page/category') ?>" class="ps-4 d-block <?= ($this->uri->segment(3) == 'category') ? 'active' : '' ?>">
            <i class="fa fa-tags"></i> Category
        </a>
    </div>
    <a href="#contactMenu" data-bs-toggle="collapse" aria-expanded="false" class="d-flex justify-content-between align-items-center menu-toggle <?= ($current_uri == 'contact') ? 'active' : '' ?>">
        <div><i class="fa-solid fa-coins"></i> <span class="link-text">contact</span></div>
        <i class="fa-solid fa-chevron-left toggle-icon"></i>
    </a>
    <div class="menu collapse <?= ($current_uri == 'contact') ? 'show' : '' ?>" id="contactMenu">
        <a href="<?= admin_url('contact') ?>" class="ps-4 d-block <?= ($this->uri->segment(2) == 'contact' && $this->uri->segment(3) == '') ? 'active' : '' ?>">
            <i class="fa fa-list"></i> Country
        </a>
        <a href="<?= admin_url('contact/category') ?>" class="ps-4 d-block <?= ($this->uri->segment(3) == 'category') ? 'active' : '' ?>">
            <i class="fa fa-tags"></i> Category
        </a>
    </div>

    <a href="<?= admin_url('logout') ?>">
        <i class="fa-solid fa-right-from-bracket"></i> <span class="link-text">Logout</span>
    </a>
</div>
