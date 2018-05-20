@extends('layout.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Patient list

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Patient</a></li>
        <li class="active">List</li>
    </ol>
</section>
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">

                <div class="box-body">
                    <table class="table table-bordered" id="patient-list">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Sex</th>
                            <th>Age</th>
                            <th>Sick Time</th>
                            <th>Status</th>
                            <th>Location</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>1</td>
                            <td>012</td>
                            <td>Lala</td>
                            <td>N</td>
                            <td>Phnom Penh</td>
                            <td>Flu</td>
                            <td>Panadol 500mg</td>
                            <td>12/04/2018</td>
                            <td>

                                <a href="{{url('/patient/add/')}}" class="btn btn-sm btn-primary">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{url('/patient/delete/')}}" class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $('#patient-list').DataTable()
        });

    </script>
@endpush