@extends('layout.main')

@section('container')

    <div class="row">
        <h3 class="text-center">Please, Login</h3>
        <form action="/login" method="post">
            @csrf
            <div class="col-md-4 offset-md-4">
                <div class="form-floating mb-2">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingEmail" name="email" placeholder="Email address" value="{{ old('email') }}" require>
                    <label for="floatingEmail">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div> 
                <div class="form-floating mb-2">
                    <input type="password" class="form-control" id="floatingPass" name="password" placeholder="password address" require>
                    <label for="floatingPass">Password</label>
                </div>
                <div class="btn-login text-center my-3">
                    <button type="submit" class="w-100 btn btn-primary btn-lg">Login</button>
                </div>
            </div>
        </form>
        <div class="register text-center">
            <small class="text-muted">don't have an account yet ?</small><a href="/register" class="text-decoration-none"> join now!</a>
        </div>
    </div>

@endsection