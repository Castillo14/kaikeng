@extends('layouts.main')

@section('content')
    <div class="content-loading" hidden="hidden">
        <div class="loading">
            <p>Sending...</p>
            <span></span>
        </div>
    </div>
    <!-- About-->
    <section class="about-section text-center pt-5 mt-5 mb-5">
        <div class="container px-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="mb-4 text-2xl">C.A.R.L.O. Online Form</h2>
                    <p class="font-bolder">
                        &quot;The purpose of CARLO is to have one common Customer Relations Management (CRM) system for
                        government that is easy for citizens to remember or to use.&quot;
                    </p>
                </div>
                <div class="col-lg-12">
                    <form class="row mb-5" method="POST" action="{{ route('form.send') }}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-4 col-sm-12 mt-2">
                            <label>Agency / <i>Ahensiya</i></label>
                            <select name="agency_id" class="form-select">
                                <option value=""> -- Select Options --</option>
                                @foreach($agencies as $agency)
                                    <option value="{{ $agency->id }}">{{ $agency->name }}</option>
                                @endforeach
                            </select>
                            @error('agency_id')
                            <span class="font-bolder" style="color: red">Please choose an Agency.</span>
                            @enderror
                        </div>
                        <div class="col-md-5 col-sm-12 mt-2">
                            <label>Full Name / <i>Buong Pangalan</i></label>
                            <input name="name" class="form-control">
                        </div>
                        <div class="col-md-3 col-sm-12 mt-2">
                            <label>Gender / <i>Kasarian</i></label>
                            <select name="gender" class="form-select">
                                <option class="" selected> -- Select Options --</option>
                                <option class="male">Male</option>
                                <option class="female">Female</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-12 mt-2">
                            <label>Birth Date / <i>Araw ng kapanganakan</i></label>
                            <input type="date" name="birthdate" class="form-control">
                        </div>
                        <div class="col-md-3 col-sm-12 mt-2">
                            <label>E-mail</label>
                            <input type="email" name="email" class="form-control">
                            @error('email')
                            <span class="font-bolder" style="color: red">Please provide your E-mail.</span>
                            @enderror
                        </div>
                        <div class="col-md-3 col-sm-12 mt-2">
                            <label>Contact / Telepono</label>
                            <input type="text" name="contact" class="form-control">
                            @error('contact')
                            <span class="font-bolder" style="color: red">Please provide your Contact.</span>
                            @enderror
                        </div>
                        <div class="col-md-5 col-sm-12 mt-2">
                            <label>Baranggay</label>
                            <input name="baranggay" class="form-control">
                        </div>
                        <div class="col-md-5 col-sm-12 mt-2">
                            <label>City / <i>Siyudad</i></label>
                            <input name="city" class="form-control">
                        </div>
                        <div class="col-sm-12 mt-2">
                            <label>Provide Below Assistance Needed / <i>Ilagda Ang Inyo Kailangang Tulong</i></label>
                            <textarea class="form-control" name="description" rows="6"></textarea>
                            @error('description')
                            <span class="font-bolder" style="color: red">Please provide details.</span>
                            @enderror
                        </div>
                        <div class="col-md-3 col-sm-12 mt-2">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Attachement #1</label>
                                <input class="form-control" type="file" name="attach_1">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 mt-2">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Attachement #2</label>
                                <input class="form-control" type="file" name="attach_2">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 mt-2">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Attachement #3</label>
                                <input class="form-control" type="file" name="attach_3">
                            </div>
                        </div>
                        <div class="form-group col-md-12 mt-3">
                            <div class="d-grid gap-2">
                                <button id="cb-btn" type="submit" class="btn btn-success btn-block">
                                    Submit
                                </button>
                                <a href="{{ route('landing') }}" class="btn btn-secondary text-white"
                                   type="button">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(function () {
            $('#cb-btn').on('click', function () {
                $('.content-loading').removeAttr('hidden');
            });
        });
    </script>
@endsection
