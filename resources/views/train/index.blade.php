@extends('layouts.app')

@section('page-title', 'train index')

@section('main-content')
    <h1>Lista dei treni in partenza in giornata:</h1>
    <section class="cards-treni">
        @foreach ($train as $trenoSingolo)
            <article>
                <h2>
                    Azienda: {{ $trenoSingolo->azienda }}
                </h2>
                <h3>
                    Stazione di partenza: {{ $trenoSingolo->stazione_di_partenza }}
                </h3>
                <div>
                    <p>Partenza prevista: {{ $trenoSingolo->orario_di_partenza }}</p>
                    <p>Arrivo previsto: {{ $trenoSingolo->orario_di_arrivo }}</p>
                    <p>Codice del treno: {{ $trenoSingolo->codice_treno }} </p>
                </div>
            </article>
        @endforeach
    </section>
@endsection
