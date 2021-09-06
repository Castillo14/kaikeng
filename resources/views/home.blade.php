@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Overview</h4>
                        <p class="card-description"> Help Requests </p>
                        <div class="row">
                            <div class="col-md-12">
                                <table id="tbl-help-request" class="table table-bordered display nowrap"
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
            var dt = $('#tbl-help-request').DataTable({
                serverSide: true,
                "scrollX": true,
                order: [[0, "desc"]],
                ajax: {
                    url: '{{ route('home.table') }}',
                    type: 'POST'
                },
                columns: [
                    {
                        data: function (value) {
                            return '<a target="_blank" href="/home/preview/' + value.id + '" ' +
                                'class="btn btn-link btn-block">' +
                                '<i class="fa fa-eye"></i> ' + value.id + '</a>'
                        }, name: 'id', title: 'ID'
                    },
                    {data: 'name', name: 'name', title: 'Full Name'},
                    {data: 'agency.name', name: 'agency.name', title: 'Agency'},
                    {data: 'created_at', name: 'created_at', title: 'Created at'},
                ],
                drawCallback() {

                }
            });
        });
    </script>
@endsection
