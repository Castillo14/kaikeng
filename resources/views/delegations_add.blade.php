@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-5 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Delegate an Agency</h4>
                        <p class="card-description">New Delegation</p>
                        <form method="POST" action="{{ route('delegations.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="name">{{ __('Agencies') }}</label>
                                <select name="agency" class="form-control">
                                    <option value="">-- Select Options --</option>
                                    @foreach($agencies as $value)
                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group row">
                                <label for="name">{{ __('Users') }}</label>
                                <select name="user" class="form-control">
                                    <option value="">-- Select Options --</option>
                                    @foreach($users as $value)
                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group row mb-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Delegate') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
@endsection

@section('scripts')
    <script>
    </script>
@endsection
