@extends('adminPanel.layout.wrapper')
@section('pageTitle')
    تیترها
@endsection
@section('mainContent')
    <div class="header bg-gradient-primary pb-3 pt-4 text-right">
        <div class="container-fluid">
            <div class="header-body">
                <!-- Card stats -->
                <div class="row">
                    <div class="col-sm-9">
                        <h1 class="m-0 text-dark">تیترها</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-3">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{route('adminPanel.home')}}">داشبورد</a></li>
                            <li class="breadcrumb-item active">تیترها</li>
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
                                <h3 class="card-title  d-inline-block" style="margin-left: 68%">جدول تیترها</h3>
{{--                            </div>--}}
{{--                            <div class="col-sm-5">--}}
                                <a type="button" class="btn btn-outline-primary text-left" href="{{route('admin.title.create')}}">افزودن تیتر</a>
{{--                            </div>--}}
                        </div>
                        <div class="card-body">
                        <div class=" col-sm-12">
                            <table id="example2" class="table table-bordered table-hover text-center">
                                <thead>
                                <tr>
                                    <th>ردیف</th>
                                    <th>محل تیتر در سایت</th>
                                    <th>تیتر اول</th>
                                    <th>تیتر دوم</th>
                                    <th>توضیحات زیر تیتر</th>
                                    <th>ویرایش</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($allTitle as $title)
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
    {{--    dataTables--}}
    <script src="{{url('adminPanel/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{url('adminPanel/plugins/datatables/dataTables.bootstrap4.js')}}"></script>

    <script !src="">
        $('.nav-link').removeClass('active');
        $('#titles').addClass('active');
    </script>
@stop
