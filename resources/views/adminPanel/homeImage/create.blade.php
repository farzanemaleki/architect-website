@extends('adminPanel.layout.wrapper')
@section('pageTitle')
    افزودن تصویر صفحه اصلی
@endsection
@section('mainContent')
    <div class="header bg-gradient-primary pb-3 pt-4 text-right">
        <div class="container-fluid">
            <div class="header-body">
                <!-- Card stats -->
                <div class="row">
                    <div class="col-sm-8">
                        <h1 class="m-0 text-dark">افزودن تصویر صفحه اصلی</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-4">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{route('adminPanel.home')}}">داشبورد</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.homeImage.index')}}">تصاویر</a></li>
                            <li class="breadcrumb-item active">افزودن تصویر</li>
                        </ol>
                    </div><!-- /.col--->
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        @foreach($errors->all() as $error)
            <div class="alert alert-danger col-sm-3">
                <li>{{$error}}</li>
            </div>
        @endforeach
    </div>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card text-right">
                        <div class="card-header">
                            <div class="card-title">مشخصات تصویر جدید</div>
                        </div>

                        {{--    <-----------card body ------->--}}
                        <div class="card-body">
                            <form action="{{route('admin.homeImage.store')}}" role="form" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <!-----------Image location---------->
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <lable>محل تصویر در صفحه اصلی سایت</lable>
                                            <input type="text" class="form-control" name="image_location" value="{{old('image_location')}}"
                                                   placeholder="محل تصویر در صفحه اصلی سایت را وارد کنید ...">
                                        </div>
                                    </div>
                                    <!-----------image_name---------->
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <lable>عنوان تصویر</lable>
                                            <input type="text" class="form-control" name="image_name" value="{{old('image_name')}}"
                                                   placeholder="عنوان تصویر را وارد کنید ...">
                                        </div>
                                    </div>
                                    <!-----------image---------->
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <lable>انتخاب تصویر </lable>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="image">
                                                    <lable class="custom-file-label" for="image "></lable>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" value="ذخیره">
                                            <a class="btn btn-danger" href="{{ route('admin.homeImage.index') }}">لغو عملیات</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                @stop
                @section('footerScripts')
                        <script !src="">
                            $('.nav-link').removeClass('active');
                            $('#homeImage').addClass('active');
                        </script>
@stop
