@extends('layouts.public')

@section('content')

    <main class="container">
        <div class="bg-light p-5 rounded">
            <h1>The Disc Exchange. </h1>
            <p class="lead">Becuase every disc deserves to be thrown.</p>
            <a class="btn btn-lg btn-primary" href="{{ route('login') }}" role="button">Create an account</a>
            <a class="ms-auto btn btn-lg btn-primary" href="{{ route('userdiscsearch') }}" role="button">Search for discs</a>
        </div>
    </main>


@endsection
