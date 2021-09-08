@extends('layouts.main')

@section('content')
    <!-- About-->
    <section class="flex-shrink-0 about-section text-center pt-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-white mb-4 text-2xl">Please Provide Your Ticket No.</h2>
                    <p class="text-white font-bolder">
                        "You can see your ticket no. on the e-mail that has been used to send the Assistance Form.To
                        check status of your Request"
                    </p>
                </div>
                <div class="col-lg-8 mx-auto">
                    <form method="GET" action="{{ route('follow.up') }}">
                        <div class="input-group mb-3">
                            <input type="text" name="code" class="form-control" placeholder="Type Ticket No.">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search"></i> Search
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-12"></div>
                @if($results === 0)
                    <div class="col-lg-8 mx-auto text-white">
                        <h2>Search to Find Results.</h2>
                    </div>
                @elseif(!$results)
                    <div class="col-lg-8 mx-auto text-white">
                        <h2>No Results Found.</h2>
                    </div>
                @else
                    <div class="col-lg-4 mx-auto">
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row text-white justify-content-between">
                                <h3>Ticket No.:</h3>
                                <h3>{{ $results['code'] }}</h3>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row text-white justify-content-between">
                                <h3>Agency:</h3>
                                <h3>{{ $results['agency']['name'] }}</h3>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row text-white justify-content-between">
                                <h3>Status:</h3>
                                <h3>{{ strtoupper($results['status']) }}</h3>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
