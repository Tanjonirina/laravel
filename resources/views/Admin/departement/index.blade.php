@extends('templete.templete')

@section('contend')

<div class="container">
    @if(session('success'))
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <center><strong class="text-info">Success!  {{session('valider')}}</strong> </center>
  </div>
  @endif
    <div class="col-md-12">
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
                             <th scope="col" class="text-dark">#</th>
                             <th scope="col" class="text-dark">Nom du Département</th>

                         </tr>
                     </thead>
                     <tbody>
                        @forelse ($departement as $departements)



                             <tr id="id">
                                 <th scope="row" class="text-dark">{{$departements->id}}</th>

                                 <td class="text-dark">{{$departements->nom}}</td>

                                 <td>

                                     <a href="{{route('departement.voire',$departements->id)}}"    class="btn btn-outline-success btn-sm modif"><i class="fa fa-edit"></i></a>
                                     <a href="{{route('departement.delete', $departements->id)}}" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                                 </td>
                             </tr>
                             @empty
                             <tr>
                                <th>Aucune departement ajouter</th>
                            </tr>

                        @endforelse

                     </tbody>
                 </table>
             </div>
             </div>
             <div class="card-footer " style="background-color: rgb(255, 255, 255)">
                 {{$departement->links()}}
             </div>
            </div>
         </div>
    </div>





    <!-- Modal voire -->
    <div class="modal fade" id="show" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{route('departement.creat')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="tanjona">Ajouter de Département</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nom">Nom du departement</label>
                            <input type="text" name="nom" id="nom" class="form-control" value="">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="update" class="btn btn-primary"> <i class='fa fa-database'></i> Save</button>
                    </div>
                </form>
            </div>

            <div class="modal fade" id="modifier" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form  method="post" id='myform'>
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title">Ajout departements</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="nom">Nom du departement</label>
                                    <input type="text" name="nom" id="nom" class="form-control" value="">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" id="update" class="btn btn-primary"> <i class='fa fa-database'></i> Save</button>
                            </div>
                        </form>
                    </div>
    </div>
    </div>









@endsection('contend')
