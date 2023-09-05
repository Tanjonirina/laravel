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
                    <div class="container-fluid h-100 py-2">
                        <div class="card bg- h-100" style="background-color: rgb(255, 255, 255)">
                         <div class="card-header">
                             <button type="button" class="btn btn-info" data-target="#show" data-toggle="modal" style="margin-left: 45%;">Ajouter</button>
                         </div>
                         <div class="card-body">
                         <div class="table-responsive">
                             <table class="table table-white">
                                 <thead>
                                     <tr>
                                        <th scope="col" class="text-dark">heure_entre</th>
                                        <th scope="col" class="text-dark">Heur sortie</th>

                                     </tr>
                                 </thead>
                                 <tbody>
                                    @forelse ($pointage as $Pointage)
                                    <tr id="id">
                                        <th scope="row" class="text-dark">{{$Pointage->heure_entre}}</th>

                                        <td class="text-dark">{{$Pointage->heure_sortie}}</td>


                                    </tr>
                                    @empty
                                         <tr>
                                            <th>Aucune pointage ajouter</th>
                                        </tr>

                                    @endforelse

                                 </tbody>
                             </table>
                         </div>
                         </div>
                         <div class="card-footer " style="background-color: rgb(255, 255, 255)">
                             {{$pointage->links()}}
                         </div>
                        </div>
                     </div>



                </table>
                </div>
            </div>



        </div>
        <!-- #/ container -->
    </div>


</div>

@endsection('body')
