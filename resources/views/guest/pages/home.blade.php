@extends('layouts.app')

@section('page-title', 'homepage')

@section('main-content')
    <h1>Lista dei treni in partenza in giornata:</h1>
    <section>
        @foreach ($train as $trenoSingolo)
            <article>
                <h2>
                    Azienda: {{ $trenoSingolo->azienda }}
                </h2>
            </article>
        @endforeach
    </section>
    @endforeach
@endsection
