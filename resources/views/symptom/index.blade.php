@extends('layout.main')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            List of patient's symptom

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Symptom</a></li>
            <li class="active">List</li>
        </ol>
    </section>
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Symptom</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered" id="symptom-list">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Symptom</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($symptoms))
                                @foreach($symptoms as $symptom)
                            <tr>
                                <td>{{$symptom->id}}</td>
                                <td>{{$symptom->name}}</td>
                                <td>{{$symptom->description}}</td>
                                <td>
                                    <a href="{{url('/symptom/add/')}}" class="btn btn-sm btn-info">Edit</a>
                                    <a href="{{url('/symptom/delete/')}}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                                @endforeach
                            @endif
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
            $('#symptom-list').DataTable()
        });

    </script>
@endpush