@component('components.cerds')
        @slot('title')
            título header
        @endslot
        Um Card de Exemplo
        @slot('footer')
            Footer Card
        @endslot
    @endcomponent

    <hr>
    @if ($teste == '123')
        É Difenrente
        @elseif ($teste == 123)
        é igual
    @else
        Não é Igual
    @endif
<hr>
    @unless ($teste === '123')
        Não é Igual
    @else
        É Igual
    @endunless
<hr>
    @isset($teste2)
        {{ $teste2 }}
    @endisset
<hr>
    @empty($teste3)
        Teste 3 Vazio
    @endempty


    <hr>

        {{-- Atenticação auth  --}}
    @auth()
        <p>Autenticado</p>
        @else
        <p>Não está Autenticada</p>
    @endauth

    {{--  visita --}}

    @guest
        <h1> Visita do Sistema</h1>
    @endguest

    @switch($teste)
        @case(1)
            Igual 1
            @break
        @case(2)
            I
        @break
        @case(123)
            Fofura 123;
            @break
            Defout Double
        @default

    @endswitch
    <hr>

    <h1>Exibindo os produtos</h1>

    @if (isset($products))
        @foreach ($products as $product)

        <p  class="@if ($loop->last) last @endif" style="text-align: center">{{ $product }} </p>



        @endforeach
    @endif
<br>
    @forelse ($products as $product)
    <p style="text-align: center">{{ $product }} </p>
    @empty
    <p>Não Existe Produtos Cadastrados</p>
    @endforelse

@endsection

@include('includes.alert', ['content'=> 'Alerta de Preço de Produto']);


@push('styles')
    <style>
        .last {
            background: #ccc;
        }

    </style>
@endpush

@push('scripts')
    <script>
        document.body.style.background = "#efefef";
    </script>
@endpush
