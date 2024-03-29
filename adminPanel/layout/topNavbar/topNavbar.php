<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
    <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="<?= SITEURL . PAGEADMINPATH ?>home/index.php">داشبورد</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
            <div class="form-group mb-0">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                    <input class="form-control pr-0 pl-3" placeholder="جستجو" type="text">
                </div>
            </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
            <li class="nav-item dropdown">
                <a class="nav-link pl-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="<?= SITEURL ?>adminPanel/assets/adminPanel/img/theme/team-4-800x800.jpg">
                                </span>
                        <div class="media-body mr-2 d-none d-lg-block">
                            <span class="mb-0 text-sm  font-weight-bold">جسیکا جونس</span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-left text-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">خوش آمدید!</h6>
                    </div>
                    <a href="./examples/profile.html" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>پروفایل من</span>
                    </a>    
                    <div class="dropdown-divider"></div>
                    <a href="#!" class="dropdown-item">
                        <i class="ni ni-user-run"></i>
                        <span>خروج</span>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
