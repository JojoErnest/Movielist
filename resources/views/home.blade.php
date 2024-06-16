@extends('Layout.Layout')

@section('title', 'Home')

@section('content')
    <div class="landing container">
        <div class="landing_box d-flex flex-column align-items-center justify-content-center">

            <div class="container d-flex align-items-center justify-content-center">
                <img src="https://registration.himtibinus.or.id/assets/undraw_amusement_park_17oe.svg" alt="home_image" />
            </div>

            <h1 class="text-center my-4">
                <span class="text-secondary">First time here?</span>
            </h1>
            <p> Before we can proceed with your registration, you have to be logged in with your Registered account.</p>
        </div>

        <hr>
    </div>

    <div class="event container p-5">
        <h2 class="mb-4 fw-bold">UPCOMING EVENT</h2>
        <div class="row ">
            <div class="col-4 mb-4">
                <x-event-card />
            </div>
            <div class="col-4 mb-4">
                <x-event-card />
            </div>
            <div class="col-4 mb-4">
                <x-event-card />
            </div>
            <div class="col-4 mb-4">
                <x-event-card />
            </div>
        </div>
    </div>
@endsection
