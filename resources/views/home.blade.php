
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
                        <div class="sconto absolute">
                            20%
                        </div>

                        <div class="sostenibile absolute">
                            Sostenibile
                        </div>
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
