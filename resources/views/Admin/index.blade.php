@extends('layouts.dashboard')

@section('body')
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="1" />
        </svg>
    </div>
</div>
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
         
            
            <div class="row">
               
                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-1">
                        <div class="card-body">
                            <h3 class="card-title text-white">Total Départements</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white ml-2">{{$totalDepartements}} </h2>
                                <p class="text-white mb-0">**************</p>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-home"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-2">
                        <div class="card-body">
                            <h3 class="card-title text-white">Total Employer</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{$totalEmployers}} </h2>
                                <p class="text-white mb-0">**************</p>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-3">
                        <div class="card-body">
                            <h3 class="card-title text-white">Total Utilisateur</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{$conger}}</h2>
                                <p class="text-white mb-0">**************</p>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-user"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-4">
                        <div class="card-body">
                            <h3 class="card-title text-white">congés en cours</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">0</h2>
                                <p class="text-white mb-0">**************</p>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card-body">
                        <img src="{{asset('ass/images/grh.jpg')}}" alt="" srcset="" style="width: 100%; height: 500px" >
                    </div>
                </div>
            </div>

            
        </div>
        <!-- #/ container -->
    </div>
  

</div>

@endsection('body')