@extends('site.layout.layout')
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
