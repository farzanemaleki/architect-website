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
                        <h1 class="m-0 text-dark">دسته بندی پروژه ها</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item active">دسته بندی پروژه ها</li>
                        <li class="breadcrumb-item"><a href="{{route('adminPanel.home')}}">داشبورد</a></li>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex">
                           <div class="col-sm-6  d-inline-block">
                                <h3 class="card-title text-right">جدول دسته بندی پروژه ها</h3>
                            </div>
                           <div class="col-sm-6  d-inline-block ">
                                <a type="button" class="btn btn-outline-primary text-left" href="<?= SITEURL.PAGEADMINPATH ?>project_categories/create.php">افزودن دسته بندی پروژه ها</a>
                           </div>
                        </div>
                        <div class="card-body">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-bordered table-hover text-center table-responsive-sm">
                                <thead>
                                <tr>
                                    <th class="col-sm-1">ردیف</th>
                                    <th>تیتر</th>
                                    <th>آیکن (59*59)</th>
                                    <th>توضیحات</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- @foreach($allTitle as $title)
                                    <tr>
                                        <td>{{$title->id}}</td>
                                        <td>{{$title->titleLocation}}</td>
                                        <td>{{$title->firstTitle}}</td>
                                        <td>{{$title->secondTitle}}</td>
                                        <td>{!! $title->description !!}</td>
                                        <td>
                                            <a href="{{route('admin.title.edit', $title->id)}}">
                                                <i class="fa fa-pencil m-2"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach -->
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include_once('../layout/footer-scripts.php') ?>
