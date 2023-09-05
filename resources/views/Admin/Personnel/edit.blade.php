@extends('templete.templete')

@section('contend')


<div class="card " >
    <div class="card-body">
        <h4>Edit Personnel</h4>
        <div class="basic-form">

            <form method="POST" action="{{route('personnel.update',$personnel->id)}}" enctype="multipart/form-data">
                @csrf

                 <div class="form-group ">
                     <label for="name">Departements</label>

                     <select class="custom-select" name="departement" id="departement">
                        <option value="{{$personnel->departement->id}}">{{$personnel->departement->nom}}</option>
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
                    <input type="text" class="form-control input-rounded" placeholder="Matricule" name="Matricule" value="{{$personnel->Matricule_P}}">
                </div>


                @error('nom')
                <div class="text-danger" style="text-align: center;">{{ $message }}</div>
                @enderror
                 <div class="form-group "">
                     <label for="name">Nom</label>
                     <input type="text" class="form-control input-rounded" placeholder="nom" name="nom" value="{{$personnel->nom}}">
                 </div>

                 @error('prenom')
                 <div class="text-danger" style="text-align: center;">{{ $message }}</div>
                 @enderror
                 <div class="form-group">
                     <label for="name">Prenom</label>
                     <input type="text" class="form-control input-rounded" placeholder="Prenom" name="prenom" value="{{$personnel->prenom}}">
                 </div>

                 @error('telephone')
                 <div class="text-danger" style="text-align: center;">{{ $message }}</div>
                 @enderror
                 <div class="form-group">
                     <label for="name">telephone</label>
                     <input type="text" class="form-control input-rounded" placeholder="telephone" value="{{$personnel->telephone}}" name="telephone" >
                 </div>

                 @error('Adresse')
                 <div class="text-danger" style="text-align: center;">{{ $message }}</div>
                 @enderror
                 <div class="form-group">
                     <label for="name">Adresse</label>
                     <input type="text" class="form-control input-rounded" placeholder="Adresse" value="{{$personnel->Adresse}}" name="Adresse" >
                 </div>

                 @error('poste')
                 <div class="text-danger" style="text-align: center;">{{ $message }}</div>
                 @enderror
                 <div class="form-group">
                     <label for="name">poste</label>
                     <input type="text" class="form-control input-rounded" placeholder="poste" value="{{$personnel->poste}}" name="poste" >
                 </div>


                 <div class="form-group">
                    <label for="name">Taux_horaire</label>
                    <input type="text" class="form-control input-rounded" placeholder="horaire" value="{{$personnel->taux_horaire}}" name="horaire" >
                </div>
                 @error('date')
                 <center> <div class="text-danger" style="text-align: center;">{{ $message }}</div></center>
                   @enderror
                   <div class="form-group">
                    <label for="name">date_embauche</label>
                    <input type="date" class="form-control input-rounded" placeholder="date_embauche" value="{{$personnel->date_embouche}}" name="date" >
                </div>

                 <div class="form-group">
                     <label for="image">image</label>
                     <input type="file" class="form-control" name='image' value="{{$personnel->image}}">
                   </div>



                 </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="update" class="btn btn-primary"> <i class='fa fa-database'></i>ajouter</button>
                </div>
          </form>


@endsection('contend')
