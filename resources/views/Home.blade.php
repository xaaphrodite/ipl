@extends('layouts.app', ['css' => 'css/home.css', 'title' => 'Home'])

@section('body')
    <section>
        <div class="container">
            <h2>Home Page</h2>
            <p>{{ Auth::user()->email }}</p>
            <div class="text-end">
                <form action="{{ route('Logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-sm btn-outline-danger" type="submit">Logout</button>
                </form>
            </div>
            <hr>
            @if (session()->has('successLogin'))
                <p>{{ session()->get('successLogin') }}</p>
            @endif
        </div>
    </section>
@endsection
