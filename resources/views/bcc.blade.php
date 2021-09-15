@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-5 col-sm-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">BCC Emails</h4>
                        <p class="card-description"> Provide E-mails that should be in BCC</p>
                        <div class="row">
                            <div class="col-md-12">
                                <form method="POST" action="{{ route('bcc.store') }}">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <input type="email" name="email" class="form-control">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-sm btn-success">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-12">
                                <ul class="list-group">
                                    @foreach($bccs as $item)
                                        <form method="GET" action="{{ route('bcc.destroy', ['id' => $item->id]) }}">
                                            @csrf
                                            <li class="list-group-item">
                                                <div class="row justify-content-between">
                                                    <div class="col-auto m-auto">{{ $item->email }}</div>
                                                    <div class="col-auto">
                                                        <button type="submit" class="btn btn-sm btn-danger">
                                                            <i class="mdi mdi-trash-can"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                        </form>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
