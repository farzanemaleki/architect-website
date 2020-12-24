@extends('adminPanel.layout.wrapper')
@section('pageTitle')
    تصاویر صفحه اصلی
@endsection
@section('mainContent')
    <div class="header bg-gradient-primary pb-3 pt-4 text-right">
        <div class="container-fluid">
            <div class="header-body">
                <!-- Card stats -->
                <div class="row">
                    <div class="col-sm-9">
                        <h1 class="m-0 text-dark">تصاویر صفحه اصلی</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-3">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{route('adminPanel.home')}}">داشبورد</a></li>
                            <li class="breadcrumb-item active">تصاویر</li>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            {{--                            <div class="col-sm-5">--}}
                            <h3 class="card-title  d-inline-block" style="margin-left: 50%">جدول تصاویر صفحه اصلی</h3>
                            {{--                            </div>--}}
                            {{--                            <div class="col-sm-5">--}}
                            <a type="button" class="btn btn-outline-primary text-left" href="{{route('admin.homeImage.create')}}">افزودن تصویر صفحه اصلی</a>
                            {{--                            </div>--}}
                        </div>
                        <div class="card-body">
                            <div class=" col-sm-12">
                                <table id="example2" class="table table-bordered table-hover text-center table-responsive">
                                    <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>محل تصویر در صفحه اصلی سایت</th>
                                        <th>عنوان تصویر</th>
                                        <th>تصویر</th>
                                        <th>ویرایش</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allimage as $image)
                                        <tr>
                                            <td>{{$image->id}}</td>
                                            <td>{{$image->image_location}}</td>
                                            <td>{{$image->image_name}}</td>
                                            <td><img width="270px" height="150px" src="{{ url('') }}{{$image->image}}" alt="{{$image->image_name}}"></td>
                                            <td>
                                                <a class="btn btn-outline-primary m-1 ajax  " href="{{route('admin.homeImage.edit', $image->id)}}" data-toggle="tooltip" title="" data-original-title="ویرایش">
                                                    <i class="m-1 fa fa-edit"></i>
                                                </a>
                                                <a class="btn btn-outline-danger m-1 ajax" href="{{route('admin.homeImage.destroy', $image->id)}}" data-toggle="tooltip" title="" data-original-title="حذف">
                                                    <i class="m-1 fa fa-trash"></i>
                                                </a>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
@section('footerScripts')
    <script !src="">
        $('.nav-link').removeClass('active');
        $('#homeImage').addClass('active');
    </script>
@stop
