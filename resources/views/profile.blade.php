@extends('Layout.Layout')

@section('title', 'Profile Page')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="profileWrapper">
                    <x-icomoon-user class="icon" />
                </div>
            </div>

            <div class="col-md-8">
                <form action="" class="formWrapper">
                    <div class="formCard">
                        <label for="">Username</label>
                        <input type="text" placeholder="Your username....">
                    </div>
                    <div class="formCard">
                        <label for="">Email</label>
                        <input type="email" placeholder="Your email....">
                    </div>
                    <div class="formCard">
                        <label for="">Phone</label>
                        <input type="text" placeholder="Your Phone.....">
                    </div>
                </form>
            </div>

        </div>

    </div>

@endsection
