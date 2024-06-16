@extends('Layout.Layout')

@section('title', 'Login')

@section('content')
    <div class="">
        <img src="{{ url('storage/1.jpeg') }}" alt="" class="bg-image">
    </div>
    <div class="card mx-4 mx-md-5 shadow-5-strong bg-login mb-5">
        <div class="card-body py-5 px-md-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-5 text-center">Login Form</h2>
                    <form class="text-center">
                        <div class="form-outline mb-4">
                            <input type="email" name="email" class="form-control" placeholder="Email Address" />
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" name="password" class="form-control" placeholder="Password" />
                        </div>
                        <p>Not registered? <a href="#" class="text-decoration-none">Create an account</a></p>
                        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
