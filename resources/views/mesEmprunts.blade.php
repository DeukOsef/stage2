@extends('layouts.layoutConnect')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Connection</div>
                    <div class="card-body">
                        VOUS ETES CONNECTES
                        <div class="row justify-content" style="height: 750px; margin-top: 30px" >
                            <div class="col-md-1"></div>
                            <div class="col-md-7">
                                <div class="row">
                                    <table class="table table-hover table-bordered table-striped datatable" style="width:650px">
                                        <thead>
                                        <tr>
                                            <th>idEmprunt</th>
                                            <th>idObjet</th>
                                            <th>idUser</th>
                                            <th>DateDeb</th>
                                            <th>DateFin</th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $.noConflict();
            $('.datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('getEmprunt') }}',
                columns: [
                    {data: 'idEmprunt', name: 'idEmprunt'},
                    {data: 'idObjet', name: 'idObjet'},
                    {data: 'idUser', name: 'idUser'},
                    {data: 'dateDeb', name: 'dateDeb'},
                    {data: 'dateFin', name: 'dateFin'},
                    ]
            });
        });
    </script>
@endsection