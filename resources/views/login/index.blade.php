@extends('layouts.app')

@section("body")


<section class="container-fluid">
    <div class="container login">
        <div class="bag row d-flex align-items-center ">
            <div class="col-md-6 p-0">
             <img src="Asset/image/neon.png" alt="iconic Image" class="img-fluid ">
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 mb-lg-4 mb-3 px-md-5">
                        <h1 class="text text-center">Login</h1>
                    </div>
                    <div class="col-md-12">


                        <form action="{{route('submit-login')}}" class=" px-mb-5 px-3" method="POST">
                          @csrf

                          @error('Matricule_P')
                          <div class="alert mb-4 r">
                           <div class="text-danger" style="text-align: center;">{{$message}}</div>
                          </div>
                          {{-- message --}}
                          @enderror

                            <div class="mb-3 mt-3">
                              <label for="email" class="form-label text"><i class=" fa fa-envelope"></i> Numero Matricule :</label>
                              <input type="text" class="form-control " id="email" placeholder="Enter email" name="Matricule_P">
                            </div>

                            <div class="mb-3">
                                      @error('password')
                                  <div class="alert mb-4 r">
                                  <div class="text-danger" style="text-align: center;">{{$message}}</div>
                                  </div>
                                  {{-- message --}}
                                  @enderror

                              <label for="pwd" class="form-label text"><i class="fa fa-lock"></i> Password:</label>
                              <input type="password" class="form-control " id="pwd" placeholder="Enter password" name="password">
                            </div>
                            <div class="form-check mb-3  text-center">
                              <label class="form-check-label ">
                                <input class="form-check-input text" type="checkbox" name="remember"> Remember me
                              </label>
                            </div>
                            <div class="button  justify-content-center-md-start text-center">
                            <button type="submit" class="btn btn-outline-danger mb-md-0 mb-5 ">Submit</button>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
 </section>
@endsection("body")


