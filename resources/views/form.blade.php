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
                    <h2 class="text-white mb-4 text-2xl">C.A.R.L.O. Online Form</h2>
                    <p class="text-white font-bolder">
                        &quot;The purpose of CARLO is to have one common Customer Relations Management (CRM) system for
                        government that is easy for citizens to remember or to use.&quot;
                    </p>
                </div>
                <div class="col-lg-12 mx-auto">
                    <form class="row mb-5" method="POST" action="{{ route('form.send') }}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-4 col-sm-12 mt-2">
                            <label>Agency / <i>Ahensiya</i></label>
                            <select name="agency_id" class="form-select">
                                <option value=""> -- Select Options -- </option>
                            </select>
                        </div>
                        <div class="col-md-5 col-sm-12 mt-2">
                            <label>Full Name / <i>Buong Pangalan</i></label>
                            <input name="name" class="form-control">
                        </div>
                        <div class="col-md-3 col-sm-12 mt-2">
                            <label>E-mail</label>
                            <input type="email" name="email" class="form-control">
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
                        </div>
                        <div class="form-group col-md-12 mt-3">
                            <button id="cb-btn" type="submit" class="btn btn-success btn-block">
                                Submit<br><i>Ipadala</i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@endsection
