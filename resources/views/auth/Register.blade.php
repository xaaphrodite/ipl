@extends('layouts.app', ['css' => 'css/auth.css', 'title' => 'Register'])

@section('body')
    <section>
        <div class="l-form">
            <form action="{{ route('Register') }}" method="POST" class="form">
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

                <div class="form__div">
                    <input type="password" class="form__input" name="confirm" id="confirm" placeholder=" " />
                    <label for="" class="form__label">Confirm</label>
                </div>

                <button type="submit" class="btn btn-outline-primary mt-1">Register</button>
                <div class="text-end">
                    <p><a href="{{ route('LoginView') }}">Login</a></p>
                </div>
                <br id="spacer__desktop">
                <br id="spacer__desktop">
            </form>
        </div>

        <div class="error__section text-center">
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
            @error('confirm')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </section>
@endsection
