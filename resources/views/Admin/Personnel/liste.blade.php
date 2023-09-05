@extends('templete.templete')

@section('contend')
<div class="row">
    <div class="col-lg-12 ">
       <form action="{{route('employer.recherche')}}" class="d-flex mr-3" style="justify-content: center">
        <div class="form-group mb-0 mr-1">
            <input type="text" name="recherche" class="form-control">
        </div>
        <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> </button>
       </form>

        <center><a class="btn btn-info m-3" data-toggle="modal" data-target="#exampleModal" href=""> Ajouter une Personnel</a></center>


                           @if(session('modifier'))
                               <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                               <center><strong class="text-info">Success!  {{session('modifier')}}</strong> </center>
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
                                    <th>contact</th>
                                    {{-- <th>taux horaire</th> --}}

                                </tr>
                            </thead>
                            <tbody>
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
                                             <a href="{{route('personnel.delete',$Personnels->id)}}" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                                         </td>
                                     </tr>
                                     @empty
                                     <tr>
                                        <th>Aucune departement ajouter</th>
                                    </tr>

                                @endforelse

                             </tbody>

                        </table>
                        <div class="card-footer " style="background-color: rgb(255, 255, 255)">
                            {{$personnel->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- modal --}}
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ajouter un employer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body ">
            <form method="POST" action="{{route('employer.create')}}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                 <div class="form-group ">
                     <label for="name">Departements</label>

                     <select class="custom-select" name="departement" id="departement">
                        @foreach ($departements as $departement )
                            <option value="{{$departement->id}}">{{$departement->nom}}</option>
                        @endforeach
                    </select>


                 </div>

                 @error('Matricule')
                 <div class="text-danger" style="text-align: center;">{{ $message }}</div>
                 @enderror
                 <div class="form-group ">
                    <label for="name">Matricule_P</label>
                    <input type="text" class="form-control input-rounded" placeholder="Matricule" name="Matricule" value="{{old('Matricule')}}">
                </div>
                 <div class="form-group "">
                     <label for="name">Nom</label>
                     <input type="text" class="form-control input-rounded" placeholder="nom" name="nom" value="{{old('nom')}}">
                 </div>
                 <div class="form-group">
                     <label for="name">Prenom</label>
                     <input type="text" class="form-control input-rounded" placeholder="Prenom" name="prenom" value="{{old('prenom')}}">
                 </div>

                 <div class="form-group">
                     <label for="name">telephone</label>
                     <input type="text" class="form-control input-rounded" placeholder="telephone" value="{{old('telephone')}}" name="telephone" >
                 </div>

                 <div class="form-group">
                     <label for="name">Adresse</label>
                     <input type="text" class="form-control input-rounded" placeholder="Adresse" value="{{old('Adresse')}}" name="Adresse" >
                 </div>
                 <div class="form-group">
                     <label for="name">poste</label>
                     <input type="text" class="form-control input-rounded" placeholder="poste" value="{{old('poste')}}" name="poste" >
                 </div>
                 <div class="form-group">
                    <label for="name">Taux_horaire</label>
                    <input type="text" class="form-control input-rounded" placeholder="horaire" value="{{old('horaire')}}" name="horaire" >
                </div>
                 @error('poste')
                 <center> <div class="text-danger" style="text-align: center;">{{ $message }}</div></center>
                   @enderror
                   <div class="form-group">
                    <label for="name">date_embauche</label>
                    <input type="date" class="form-control input-rounded" placeholder="date_embauche" value="{{old('date')}}" name="date" >
                </div>

                 <div class="form-group">
                     <label for="image">image</label>
                     <input type="file" class="form-control" name='image'>
                   </div>



                 </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="update" class="btn btn-primary"> <i class='fa fa-database'></i>ajouter</button>
                </div>
          </form>
      </div>
    </div>
  </div>
</div>

@endsection('contend')
