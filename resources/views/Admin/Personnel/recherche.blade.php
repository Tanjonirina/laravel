@extends('templete.templete')

@section('contend')
<div class="row">
    <div class="col-lg-12 ">
       <form action="{{route('employer.recherche')}}" class="d-flex mr-3" style="justify-content: center">
        <div class="form-group mb-0 mr-1">
            <input type="text" name="recherche" class="form-control" value="{{request()->recherche ?? ''}}">
        </div>
        <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> </button>
       </form>

       @if (request()->input())
       <h6 style="justify-content: center">{{$personnel->total() }} Résultat pour la recherche"{{request()->recherche}}" </h6>

       @endif

        <center><a class="btn btn-info m-3" href="{{route('employer.recherche')}}"> Ajouter un personnel</a></center>


                           @if(session('modifier'))
                               <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                               <center><strong class="text-info">Success!  {{session('modifier')}}</strong> </center>
                             </div>
                             @endif

                             @if(session('valider'))
                             <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                             <center><strong class="text-info">Success!  {{session('valider')}}</strong> </center>
                           </div>
                           @endif

                             @if(session('suprimer'))
                               <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                               <center><strong class="text-info">Success!  {{session('suprimer')}}</strong> </center>
                             </div>
                             @endif

                             @if(session('error'))
                             <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                             <center><strong class="text-info">Success!  {{session('error')}}</strong> </center>
                           </div>
                           @endif
                             @if (count($errors)>0)
                             <div class="alert alert-danger">
                                <ul mb-0 mt-0>
                                    @foreach ($errors->all() as $error )
                                    <li>{{$error}} </li>

                                    @endforeach
                                </ul>
                             </div>

                             @endif

        <div class="card">
            <div class="card-body">
                <div class="active-member">
                    <div class="table-responsive">
                        <table class="table table-xs mb-0">
                            <thead>
                                <tr>
                                    <th>Matricule_P</th>
                                    <th>Image</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th >Adresse</th>
                                    <th>Poste</th>
                                    <th>Departement</th>
                                    <th>taux horaire</th>

                                </tr>
                            </thead>
                            <tbody>
                                <div class="container">
                                    <nav class="app-pagination">
                                        {{ $personnel->links() }}
                                    </nav>
                                </div>
                                @forelse ($personnel as $Personnels)



                                <tr id="id">
                                    <th scope="row" class="text-dark">{{$Personnels->Matricule_P}}</th>
                                    <td><img src="{{asset('image/'. $Personnels->image)}}" class=" rounded-circle mr-3"></td>
                                    <td class="text-dark">{{$Personnels->nom}}</td>
                                    <td class="text-dark">{{$Personnels->prenom}}</td>
                                    <td class="text-dark">{{$Personnels->Adresse}}</td>
                                    <td class="text-dark">{{$Personnels->poste}}</td>
                                    <td class="text-dark">{{$Personnels->departement->nom}}</td>
                                    <td class="text-dark">{{$Personnels->telephone}}</td>
                                    {{-- <td class="text-dark">{{$Personnels->taux_horaire}}</td> --}}


                                    <td>

                                        <a href="{{route('personnel.voire',$Personnels->id)}}"    class="btn btn-outline-success btn-sm modif"><i class="fa fa-edit"></i></a>
                                        <a href="" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
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
            </div>
        </div>
    </div>
</div>

@endsection('contend')
