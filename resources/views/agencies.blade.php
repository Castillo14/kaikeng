@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Agencies</h4>
                        <p class="card-description">Registered Agencies</p>
                        <form method="POST" action="{{ route('agency.store') }}">
                            @csrf
                            <div class="d-flex flex-column">
                                <div class="d-flex flex-column flex-lg-row">
                                    <div class="px-2 flex-grow">
                                        <label>Name</label>
                                        <input name="name" class="form-control">
                                    </div>
                                    <div class="px-2 flex-grow">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                    <div class="px-2 flex-grow">
                                        <label>Phone</label>
                                        <input name="phone" class="form-control">
                                    </div>
                                    <div class="px-2 flex-grow">
                                        <label>Address</label>
                                        <input name="address" class="form-control">
                                    </div>
                                </div>
                                <div class="w-100 mt-3">
                                    <button class="btn btn-block btn-success">
                                        <i class="mdi mdi-plus"></i> Add Agency
                                    </button>
                                </div>
                            </div>
                        </form>

                        <table class="table table-bordered mt-4">
                            <thead>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Actions</th>
                            </thead>
                            <tbody>
                            @foreach($agencies as $agency)
                                <tr>
                                    <form method="POST" action="{{ route('agency.store') }}">
                                        @csrf
                                        <td>
                                            <input value="{{ $agency->id }}" name="id" hidden>
                                            {{ $agency->name }}
                                        </td>
                                        <td>
                                            <input type="email" name="email" class="form-control"
                                                   value="{{ $agency->email }}">
                                        </td>
                                        <td>
                                            <input name="phone" class="form-control" value="{{ $agency->phone }}">
                                        </td>
                                        <td>
                                            <input name="address" class="form-control" value="{{ $agency->address }}">
                                        </td>
                                        <td>
                                            <div class="btn-group-sm" role="group" aria-label="Basic example">
                                                <button type="submit" class="btn btn-primary">Edit</button>
                                                <a href="{{ route('agency.destroy', ['id' => $agency->id]) }}"
                                                   type="button" class="btn btn-danger">Del</a>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
    </script>
@endsection
