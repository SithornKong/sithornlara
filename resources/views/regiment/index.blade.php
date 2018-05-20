@extends('layout.main')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            List of patient's regiment

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Regiment</a></li>
            <li class="active">List</li>
        </ol>
    </section>
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Regiment</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered" id="regiment-list">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Regiment</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>1</td>
                                <td>P500</td>
                                <td>Panadol 500mg</td>


                                <td>
                                    <a href="{{url('/regiment/form/')}}" class="btn btn-sm btn-info">Edit</a>
                                    <a href="{{url('/regiment/delete/')}}" class="btn btn-sm btn-danger">Delete</a>
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
            $('#regiment-list').DataTable()
        });

    </script>
@endpush