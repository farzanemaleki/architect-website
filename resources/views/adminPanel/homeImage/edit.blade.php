@extends('adminPanel.layout.wrapper')
@section('pageTitle')
    ویرایش تصویر صفحه اصلی
@endsection
@section('mainContent')
    <div class="header bg-gradient-primary pb-3 pt-4 text-right">
        <div class="container-fluid">
            <div class="header-body">
                <!-- Card stats -->
                <div class="row">
                    <div class="col-sm-8">
                        <h1 class="m-0 text-dark">ویرایش تصویر صفحه اصلی</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-4">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{route('adminPanel.home')}}">داشبورد</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.homeImage.index')}}">تصاویر</a></li>
                            <li class="breadcrumb-item active">ویرایش تصویر</li>
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
                            <div class="card-title">مشخصات تصویر</div>
                        </div>

                        {{--    <-----------card body ------->--}}
                        <div class="card-body">
                            <form action="{{route('admin.homeImage.update' , $homeImage->id)}}" role="form" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <!-----------Image location---------->
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <lable>محل تصویر در صفحه اصلی سایت</lable>
                                            <input type="text" class="form-control" name="image_location" disabled value="{{$homeImage->image_location}}"/>
                                        </div>
                                    </div>
                                    <!-----------image_name---------->
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <lable>عنوان تصویر</lable>
                                            <input type="text" class="form-control" name="image_name" value="{{$homeImage->image_name}}"/>
                                        </div>
                                    </div>
                                    <!-----------image---------->
                                    <div class="col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <lable for="image"> انتخاب تصویر </lable>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="image">
                                                    <lable class="custom-file-label" for="image "></lable>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if($homeImage->image != null && $homeImage->image != '')
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label for="thumbnail">عکس قبلی: </label>
                                                <img name="thumbnail" style="width: 100%" src="{{ url('') }}{{ $homeImage->image }}"
                                                     alt="{{ $homeImage->image_name }}">
                                            </div>
                                        </div>
                                    @else
                                        <div class="col-md-4 col-sm-12">
                                            <label for="thumbnail">عکس قبلی: </label>
                                            <span class="text-danger mr-1">بدون تصویر</span>
                                        </div>
                                    @endif
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
