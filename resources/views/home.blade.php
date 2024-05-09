
@extends('layout.main')


@section('content')

<section class="flex">
    <div class="flex">

        <div class="card">
            <div class="card-inside">

                <div class="upper  relative">
                    <div>
                        <img
                            :class="x === true ? 'd-none' : ''"
                            :src="imageShowed"
                            :alt="brand">

                        <img
                            :class="x === true ? 'd-inline-block' : 'd-none'"
                            :src="imageHidden"
                            :alt="brand"
                        >
                    </div>

                    <div class="scatola-cuore absolute flex">
                        <span
                            :class="{'red': isInFavorites === true}"
                            class="cuore flex">
                            &hearts;
                        </span>
                    </div>


                    <div
                        :class="badgesRedValue === 'Sostenibilità' ? 'd-none' : ''"
                        class="sconto absolute">
                        badgesRedvalue*
                    </div>

                    <div
                        v-if="badgesGreenValue === 'Sostenibilità'"
                        class="sostenibile absolute">
                        Sostenibile
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
