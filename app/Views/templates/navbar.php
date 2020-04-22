<nav class="main-header navbar navbar-expand-md navbar-dark navbar-primary" <?php if(isset($isPortal)){?>style="background-color: #4343433d;border-bottom:none;"<?php }?>>
    <div class="container">
    <a href="<?=base_url()?>" class="navbar-brand">
        <img src="<?=getenv('RES_URL')?>lte/common/img/logo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-light sr-only"><?=getenv('SCHOOL_NAME')?></span>
    </a>

    <div class="collapse navbar-collapse order-3 font-weight-bold" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
        <li class="nav-item">
            <a href="https://smkbintarjalancagak.sch.id" class="nav-link">Portal</a>
        </li>
        <li class="nav-item">
            <a href="<?=base_url('login')?>" class="nav-link">Login Pengguna</a>
        </li>
        </ul>

        <!-- SEARCH FORM -->
        <!-- <form class="form-inline ml-0 ml-md-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
            </button>
            </div>
        </div>
        </form> -->
    </div>

    <!-- Right navbar links -->
    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    </ul>
    </div>
</nav>