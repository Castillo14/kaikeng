@extends('layouts.main')

@section('content')
    <!-- Header-->
    <header class="text-center mt-5 pt-3">
        <div class="container px-5">
            <div class="d-flex flex-column">
                <div class="mt-4">
                    <img src="{{ asset('images/CARLO_logo.png') }}" width="200px" class="img-fluid mt-3">
                </div>
                <div>
                    <span class="sub-text">CITIZEN'S ASSISTANCE RECORDING AND LISTING ORGANIZATION</span>
                </div>
                <div class="mt-4 moto-text">
                    <div class="fs-1">SERBISYONG MAS PINAGYAMAN</div>
                    <div class="fs-1">MABILIS AT MAASAHAN</div>
                </div>
                <div class="mt-4">
                    <div class="fs-3 fw-bolder">KAAGAPAY SA PAGBABAGO</div>
                    <div class="fs-3 fw-bolder">SERBISYONG PARA SA
                        <span class="fs-2"
                              style="font-weight: 900">PILIPINO</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 d-grid gap-2 mx-auto">
                     <a class="btn btn-primary btn-lg rounded-3 mt-5" href="{{ route('form') }}">Magpatuloy</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
