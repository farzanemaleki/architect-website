@extends('site.layout.layout')
@section('headerLinks')
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.min.css" integrity="sha512-3Lr2MkT5iW+jVhwKFUBa+zQk8Uklef98/3mebU6wNxTzj65enYrFXaeuqPAYWxcQd1GAt9aUBvYHOIcl2SUsKA==" crossorigin="anonymous" />--}}
@endsection
@section('mainContent')
    <!---------- landing page --------->
    @include('site.landingPage.landingPage')

    <!--About Studio-->
    @include('site.aboutStudio.aboutStadio')

    <!--Gallery-->
    @include('site.gallery.gallery')

    <!--Special Proposals-->
    @include('site.specialProposals.specialProposals')
    <!--blog ------->
    @include('site.blog.blog')
    <!--brands-->
    @include('site.barnds.brands')
    <!-- Contact information-->
    @include('site.contactInfo.contactInfo')
    <!-- Page Footer-->
    @include('site.footer.footer')
{{--    <div class="snackbars" id="form-output-global"></div>--}}
@endsection
