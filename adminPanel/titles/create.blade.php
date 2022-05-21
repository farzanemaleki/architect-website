@extends('adminPanel.layout.wrapper')
@section('pageTitle')
    افزودن تیتر
@endsection
@section('mainContent')
    <div class="header bg-gradient-primary pb-3 pt-4 text-right">
        <div class="container-fluid">
            <div class="header-body">
                <!-- Card stats -->
                <div class="row">
                    <div class="col-sm-8">
                        <h1 class="m-0 text-dark">افزودن تیتر</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-4">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{route('adminPanel.home')}}">داشبورد</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.title.index')}}">تیترها</a></li>
                            <li class="breadcrumb-item active">افزودن تیتر</li>
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
                    @if(session('message'))
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
                    @endif
                </div>
                <div class="card text-right">
                    <div class="card-header">
                        <div class="card-title">مشخصات تیتر جدید</div>
                    </div>

                    {{--    <-----------card body ------->--}}
                    <div class="card-body">
                        <form action="" role="form" method="post">
                            @csrf
                            <div class="row">

                                <!-----------title location---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable> محل تیتر در سایت</lable>
                                        <input type="text" class="form-control" name="titleLocation"
                                               placeholder="محل قرارگیری تیتر را وارد کنید ...">
                                    </div>
                                </div>
                                <!-----------title first---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable>تیتر اول</lable>
                                        <input type="text" class="form-control" name="firstTitle"
                                               placeholder="تیتر اول را وارد کنید ...">
                                    </div>
                                </div>
                                <!-----------title second---------->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <lable>تیتر دوم</lable>
                                        <input type="text" class="form-control" name="secondTitle"
                                               placeholder="تیتر دوم را وارد کنید ...">
                                    </div>
                                </div>
                                <!-----------title description---------->
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <lable>توضیحات زیر تیتر</lable>
                                        <textarea rows="5" type="text" class="form-control" name="description" id="description" placeholder="توضیحات زیر تیتر را وارد کنید ..."></textarea>
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


            @stop
            @section('footerScripts')
                <!-- bs-custom-file-input -->
                    <script
                        src="{{ url('adminPanel/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
                    <script src="{{ url('adminPanel/plugins/ckeditor/ckeditor.js') }}"></script>

                    <script !src="">

                        // CKEDITOR.replace('description', {
                        //     filebrowserUploadMethod : 'form',
                        //     filebrowserUploadUrl: '/dashboard/save_image',
                        //     filebrowserImageUploadUrl: '/dashboard/save_image',
                        //
                        // });

                     </script>

                    <script !src="">
                        $('.nav-link').removeClass('active');
                        $('#titles').addClass('active');
                    </script>
@stop
