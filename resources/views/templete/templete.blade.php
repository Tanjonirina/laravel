@extends('layouts.dashboard')


@section('body')
{{-- <div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="1" />
        </svg>
    </div>
</div> --}}
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    
    {{-- navbar --}}
    @include('Admin.partials.navbar')
     {{-- navbar --}}

    {{-- sidebar --}}
    @include('Admin.partials.sidebar')
    {{-- sidebar --}}

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">

        <div class="container-fluid mt-3">
            
            @yield('contend')
        <!-- #/ container -->
    </div>
    <!--**********************************
        Content body end
    ***********************************-->
    

</div>



@endsection('body')
@section('script')
<script src="{{asset("Asset/js/ajax/user.js")}}"></script>
<script src="{{asset("Asset/js/ajax/Employer.js")}}"></script>

@endsection('script')