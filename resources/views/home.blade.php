
@extends('layout.main')


@section('content')

<section class="flex">


        <div class="card">
            <div class="card-inside">

                <div class="upper  relative">
                    <div>
                        <img src="/img/1.webp" alt="brand">
                    </div>

                    <div class="scatola-cuore absolute flex">
                        <span class="cuore flex">
                            &hearts;
                        </span>
                    </div>


                    <div class="sconto absolute">
                        20%
                    </div>

                    <div class="sostenibile absolute">
                        Sostenibile
                    </div>
                </div>

                <div class="under">
                    <p>Levi's</p>
                    <h2>Relaxed Fit</h2>
                    <p class="price"> 29.99 &euro;</p>
                </div>

            </div>
        </div>


  </section>

@endsection
