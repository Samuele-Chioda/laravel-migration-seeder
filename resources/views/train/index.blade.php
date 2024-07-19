@extends('layouts.app')

@section('page-title', 'train index')

@section('main-content')
    <h1>Lista dei treni in partenza in giornata:</h1>
    <section class="cards-treni">
        @foreach ($train as $trenoSingolo)
            <article>
                <h2>
                    Azienda:<span> {{ $trenoSingolo->azienda }}</span>
                </h2>
                <h3>
                    Stazione di partenza:<span> {{ $trenoSingolo->stazione_di_partenza }}</span>
                </h3>
                <h3>
                    Stazione di arrivo:<span> {{ $trenoSingolo->stazione_di_arrivo }}</span>
                </h3>
                <div>
                    <p>Partenza prevista:<span> {{ $trenoSingolo->orario_di_partenza }}</span></p>
                    <p>Arrivo previsto:<span> {{ $trenoSingolo->orario_di_arrivo }}</span></p>
                    <p>Codice del treno:<span> {{ $trenoSingolo->codice_treno }}</span> </p>
                    <p>
                        Numero delle carrozze del treno: <span>{{ $trenoSingolo->numero_carrozze }} </span>
                    </p>
                </div>
            </article>
        @endforeach
    </section>
@endsection

{{-- pagina index collegata con rotta e controller --}}
