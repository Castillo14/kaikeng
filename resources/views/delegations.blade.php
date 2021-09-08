@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Delegations</h4>
                        <p class="card-description"> You can delegate the user to an Agency </p>
                        <p class="card-description">
                            <a href="{{ route('delegations.create') }}" class="btn btn-success">Add Delegation</a>
                        </p>
                        <div class="row">
                            <div class="col-md-12">
                                <table id="tbl-delegations" class="table table-bordered display nowrap"
                                       style="width:100%">
                                </table>
                            </div>
                        </div>
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
            var dt = $('#tbl-delegations').DataTable({
                serverSide: true,
                "scrollX": true,
                order: [[0, "desc"]],
                ajax: {
                    url: '{{ route('delegations.table') }}',
                    type: 'POST'
                },
                columns: [
                    {data: 'user.name', name: 'user.name', title: 'User'},
                    {data: 'agency.name', name: 'agency.name', title: 'Agency'},
                    {data: 'created_at', name: 'created_at', title: 'Date Assigned'},
                ],
                drawCallback() {
                }
            });
        });
    </script>
@endsection
