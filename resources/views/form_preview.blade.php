@extends('layouts.main')

@section('content')
    <style>
        label {
            color: white;
        }

        form div {
            text-align: left;
        }
    </style>
    <!-- About-->
    <section class="about-section text-center pt-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-white mb-4">Preview Of Requested Assistance</h2>
                </div>
                <div class="col-lg-12 mx-auto">
                    <form class="row mb-5">
                        <div class="col-md-4 col-sm-12 mt-2">
                            <label>Agency / <i>Ahensiya</i></label>
                            <input class="form-control" value="{{ $results->agency->name }}">
                        </div>
                        <div class="col-md-5 col-sm-12 mt-2">
                            <label>Full Name / <i>Buong Pangalan</i></label>
                            <input name="name" class="form-control" value="{{ $results->name }}">
                        </div>
                        <div class="col-md-3 col-sm-12 mt-2">
                            <label>E-mail</label>
                            <input type="email" name="email" class="form-control" value="{{ $results->email }}">
                        </div>
                        <div class="col-md-5 col-sm-12 mt-2">
                            <label>Baranggay</label>
                            <input name="baranggay" class="form-control" value="{{ $results->baranggay }}">
                        </div>
                        <div class="col-md-5 col-sm-12 mt-2">
                            <label>City / <i>Siyudad</i></label>
                            <input name="city" class="form-control" value="{{ $results->city }}">
                        </div>
                        <div class="col-sm-12 mt-2">
                            <label>Provide Below Assistance Needed / <i>Ilagda Ang Inyo Kailangang Tulong</i></label>
                            <textarea class="form-control" name="description" rows="6">{{ $results->description }}</textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
