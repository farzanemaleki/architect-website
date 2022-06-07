<nav class="navbar navbar-vertical fixed-right navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="<?= SITEURL.PAGEADMINPATH ?>home/index.php">
            <img src="<?= SITEURL ?>adminPanel/assets/adminPanel/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
        <!-- Collapse -->
        <div class="collapse navbar-collapse text-right" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{route('adminPanel.home')}}">
                            <img src="<?= SITEURL ?>adminPanel/assets/adminPanel/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close text-left">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
                <form class="mt-4 mb-3 d-md-none">
                    <div class="input-group input-group-rounded input-group-merge">
                        <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="جستجو" aria-label="Search">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fa fa-search"></span>
                            </div>
                        </div>
                    </div>
                </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('adminPanel.home')}}">
                        <i class="ni ni-tv-2 text-primary"></i> داشبورد
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="titles" href="{{route('admin.title.index')}}">
                        <i class="ni ni-planet text-blue"></i> تیترها
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./examples/maps.html">
                        <i class="ni ni-pin-3 text-orange"></i> نقشه ها
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./examples/profile.html">
                        <i class="ni ni-single-02 text-yellow"></i> پروفایل کاربر
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./examples/tables.html">
                        <i class="ni ni-bullet-list-67 text-red"></i> جداول
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./examples/login.html">
                        <i class="ni ni-key-25 text-info"></i> ورود
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./examples/register.html">
                        <i class="ni ni-circle-08 text-pink"></i> عضویت
                    </a>
                </li>
            </ul>
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading text-muted">مستندات قالب را ببینید:</h6>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                    <a class="nav-link" href="docs/documentation.html">
                        <i class="ni ni-single-copy-04"></i> مستندات
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

