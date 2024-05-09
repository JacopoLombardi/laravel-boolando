
@extends('layout.main')


@section('content')

<section class="flex">

        @foreach ( $products_array as $product )
            <div class="card">
                <div class="card-inside">

                    <div class="upper  relative">

                        {{-- img --}}
                        <div>
                            <img src="/img/{{$product['frontImage']}}" alt="brand">
                        </div>

                        {{-- heart --}}
                        <div class="scatola-cuore absolute flex">
                            <span class="cuore flex">
                                &hearts;
                            </span>
                        </div>

                        {{-- badges --}}

                        {{-- logica per avere l'ultimo elemento dell'array type e poi prendere il 'value' e se non ce lo sconto metto stringa vuota --}}
                        <?php
                            $last_array = array_key_last($product['badges']);
                            $discount = $product['badges'][$last_array]['value'];
                            if($discount === 'Sostenibilità'){
                                $discount = '';
                            }
                        ?>

                        @if (!($discount === ''))
                            <div class="sconto absolute">
                                {{ $discount }}
                            </div>
                        @endif

                        @if ( $product['badges'][0]['value'] === 'Sostenibilità')
                            <div class="sostenibile absolute">
                                Sostenibile
                            </div>
                        @endif
                    </div>

                    {{-- description --}}
                    <div class="under">
                        <p> {{ $product['brand'] }} </p>
                        <h2> {{ $product['name'] }} </h2>
                        <p class="price"> {{ $product['price'] }} &euro;</p>
                    </div>

                </div>
            </div>
        @endforeach

  </section>

@endsection
