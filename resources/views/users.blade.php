@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Accounts</h4>
                        <p class="card-description"> Registered Users </p>
                        <p class="card-description">
                            <a href="{{ route('users.create') }}" class="btn btn-success">Create Account</a>
                        </p>
                        <div class="row">
                            <div class="col-md-12">
                                <table id="tbl-users" class="table table-bordered display nowrap"
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
    <script type="text/javascript">
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var dt = $('#tbl-users').DataTable({
                serverSide: true,
                scrollX: true,
                order: [[0, "desc"]],
                ajax: {
                    url: '{{ route('users.table') }}',
                    type: 'GET'
                },
                columns: [
                    {data: 'id', name: 'id', title: 'ID'},
                    {
                        data: function (value) {
                            return '<a href="' + value.users_show + '" class="btn btn-link">' +
                                '<i class="fas fa-edit"></i> ' + value.name + '</a>'
                        }, name: 'name', title: 'Name'
                    },
                    {data: 'role_display', name: 'role', title: 'Role'},
                    {data: 'email', name: 'email', title: 'E-mail'},
                ],
                drawCallback() {
                }
            });
        });
    </script>
@endsection
