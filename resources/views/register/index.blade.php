@extends('layout.main')

@section('container')
<h1 class="h3 mb-3 fw-normal text-center">Registerasi Form</h1>
<div class="row">
    <form action="/register" method="post">
        @csrf
        <div class="col-md-4 offset-md-4">
            <div class="form-floating mb-2">
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingName" name="name" placeholder="name" value="{{ old('name') }}">
              <label for="floatingName">Name</label>
            </div>
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
    
            <div class="form-floating mb-2">
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingEmail" name="email" placeholder="Email address" value="{{ old('email') }}">
              <label for="floatingEmail">Email address</label>
            </div>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
    
            <div class="form-floating mb-2">
              <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="password" >
              <label for="floatingPassword">password</label>
            </div>
    
            <div class="form-floating mb-2">
              <input type="password" class="form-control" id="floatingVerpass" name="verifikasiPass" placeholder="verifikasi Password" >
              <label for="floatingVerpass">Verifikasi Password</label>
            </div>
        
            <button class="w-100 btn btn-lg btn-primary" type="submit">Registerasi</button>
        </div>
    </form>
</div>
@endsection