@extends('layouts.main')

@section('content')
    <header class="masthead">
        <div class="container d-flex vh-100 justify-content-center">
            <div class="d-flex flex-column">
                <div class="headline d-flex flex-column">
                    <h1 class="part-1">Citizens Assistance Recording and </h1>
                    <h1 class="part-2"> Listing Organization</h1>
                </div>
                <br>
                <!-- <label class="sub-headline text-white text-center">Helping by Ka Iking</label> -->
                <label class="sub-headline-1 text-center lh-lg">
                    Kailangan mo tulong. Pindutin mo ako. Nandyan ako sa tabi mo.
                    <br>
                    Hindi ka nag iisa.
                </label>
                <label class="sub-headline-2 text-center mt-2 lh-lg">
                    Masapul mo't Saranay, pisilin nak, adda ak lng abay mo,
                    <br>
                    dika't agmaymaysa.
                </label>
                <div class="d-flex justify-content-center pindutin">
                    <a class="btn btn-light rounded-pill fw-bolder py-3 px-5 fs-6 shadow" href="{{ route('form') }}">
                        Pindutin Para Sa Tulong</a>
                </div>
            </div>
        </div>
    </header>
@endsection
