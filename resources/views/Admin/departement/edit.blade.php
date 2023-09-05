@extends('templete.templete')

@section('contend')


<div class="card " >
    <div class="card-body">
        <h4>Edit un departement ici</h4>
        <div class="basic-form">

            <form method="post" action="{{route('departement.update',$departement->id)}}">
                @csrf
                @method('PUT')


                @error('name')
                <div class="text-danger" style="text-align: center;">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="name">Nom de Départements</label>
                    <input type="text" value="{{$departement->nom}}" class="form-control input-rounded" placeholder="" name="nom" >
                </div>

                <div class="butom">
                  <center><button type="submit"  class="btn btn-info ml-5" data-toggle="modal" data-target="#exampleModal">Mettre a jours</button></center>
                  <!-- Modal -->
                  </div>


@endsection('contend')
