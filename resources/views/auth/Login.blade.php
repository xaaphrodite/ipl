@extends('layouts.app', ['css' => 'css/auth.css', 'title' => 'Login'])

@section('body')
    <section>
        <div class="l-form">
            <form action="{{ route('LoginAuth') }}" method="POST" class="form">
                @csrf
                <div class="container jumbotron jumbotron-fluid mt-5 mb-3">
                    <div class="container">
                        <router-link to="/">
                            <div class="text-center">
                                <img class="login__logo" src="{{ asset('assets/img/logo.png') }}" />
                            </div>
                        </router-link>
                    </div>
                </div>
                <div class="form__div">
                    <input type="text" class="form__input" name="email" id="email" placeholder=" " />
                    <label for="" class="form__label">Email</label>
                </div>

                <div class="form__div">
                    <input type="password" class="form__input" name="password" id="password" placeholder=" " />
                    <label for="" class="form__label">Password</label>
                </div>

                <button type="submit" name="login" id="login" class="btn btn-outline-primary mt-1">Login</button>
                <div class="text-end">
                    <p><a href="{{ route('Register') }}">Register</a></p>
                </div>
                <br id="spacer__desktop">
                <br id="spacer__desktop">
            </form>
        </div>

        <div class="alert__section text-center">
            @error('email')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
            @error('password')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
            @if (session()->has('unrecognized'))
                <div class="text-danger">
                    {{ session()->get('unrecognized') }}
                </div>
            @endif
            @if (session()->has('UserCreated'))
                <div class="text-success">
                    {{ session()->get('UserCreated') }}
                </div>
            @endif
        </div>
    </section>
@endsection
