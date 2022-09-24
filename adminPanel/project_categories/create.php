<?php include_once('../layout/header-style.php') ?>
<body>
<!-- Sidenav -->
<?php include_once('../layout/sidenav/sidenav.php') ?>

<div class="main-content">
    <div class="header bg-gradient-primary pb-3 pt-4 text-right">
        <div class="container-fluid">
            <div class="header-body">
                <!-- Card stats -->
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">افزودن دسته بندی پروژه ها</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item active">افزودن دسته بندی پروژه ها</li>
                        <li class="breadcrumb-item"><a href="<?= SITEURL.PAGEADMINPATH ?>project_categories/index.php">دسته بندی پروژه ها</a></li>
                        </ol>
                    </div><!-- /.col--->
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- @if(session('message'))
                        <div class="alert alert-success col-sm-3">
                            <li>{{Session::get('message')}}</li>
                        </div>
                    @endif
                    @if(session ('error'))
                        <div class="alert alert-danger col-sm-3">
                            <li>{{Session::get('error')}}</li>
                        </div>
                    @endif
                    @if(session ('warning'))
                        <div class="alert alert-warning col-sm-3">
                            <li>{{Session::get('warning')}}</li>
                        </div>
                    @endif -->
                </div>
                <div class="card text-right">
                    <div class="card-header">
                        <div class="card-title">مشخصات دسته بندی پروژه جدید</div>
                    </div>

                    <div class="card-body">
                        <form action="" role="form" method="post">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable>تیتر دسته بندی پروژه</lable>
                                        <input type="text" class="form-control" name="title"
                                               placeholder="تیتر دسته بندی پروژه را وارد کنید ...">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable>آیکن دسته بندی پروژه</lable>
                                        <input type="text" class="form-control" name="icon_image"
                                               placeholder="آیکن دسته بندی پروژه را وارد کنید ...">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <lable>توضیحات دسته بندی پروژه</lable>
                                        <textarea rows="5" type="text" class="form-control" name="description"
                                               placeholder="توضیحات دسته بندی پروژه را وارد کنید ...">
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="ذخیره">
                                        <a class="btn btn-danger" href="{{ route('adminPanel.home') }}">لغو عملیات</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include_once('../layout/footer-scripts.php') ?>
