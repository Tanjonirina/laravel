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
    @include('utilisateur.partials.navbar')
     {{-- navbar --}}

    {{-- sidebar --}}
    @include('utilisateur.partials.sidebar')
    {{-- sidebar --}}

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">

        <div class="container-fluid mt-3">


            <div class="row">
                <div class="col-lg-12">
                    @if(session('valider'))
                               <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                               <center><strong class="text-info">Success!  {{session('suprimer')}}</strong> </center>
                             </div>
                             @endif

                        <form action="{{ route('pointage.store') }}" method="POST">
                            @csrf
                            <div class="container container-fluide d-flex justify-content-center">
                                <div class="container-fluide">
                                    <div class="col-md-6 ">
                                        <button type="submit" name="type" value="entree" class="btn btn-primary">Enregistrer l'heure d'entrée</button>
                                    </div>

                                </div>
                                <div class="container-fluide">
                                    <div class="col-md-6 ">
                                        <button type="submit" name="type" value="sortie" class="btn btn-danger">Enregistrer l'heure de sortie</button>
                                    </div>

                                </div>
                            </div>

                        </form>


                    <div class="card-body">
                        <img src="{{asset('ass/images/grh.jpg')}}" alt="" srcset="" style="width: 100%; height: 800px" >
                    </div>
                </div>
            </div>



        </div>
        <!-- #/ container -->
    </div>


</div>

@endsection('body')
