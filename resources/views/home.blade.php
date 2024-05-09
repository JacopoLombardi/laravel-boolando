
@extends('layout.main')


@section('content')

<section class="flex">
    <div class="flex">

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
                        badgesRedvalue*
                    </div>

                    <div class="sostenibile absolute">
                        Sostenibile*
                    </div>
                </div>

               <div class="under">
                  <p>brand*</p>
                  <h2>name*</h2>
                  <p class="price"> price* &euro;</p>
               </div>

            </div>
         </div>

    </div>
  </section>

@endsection
