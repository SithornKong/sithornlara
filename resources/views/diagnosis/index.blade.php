@extends('layout.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        List of patient's diagnosis

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Diagnosis</a></li>
        <li class="active">List</li>
    </ol>
</section>
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Diagnosis</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered" id="diagnosis-list">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>ICD10</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($diagnoses))
                            @foreach($diagnoses as $diagnosis )
                                <tr>
                                    <td>{{$diagnosis->id}}</td>
                                    <td>{{$diagnosis->icd}}</td>
                                    <td>{{$diagnosis->description}}</td>


                                    <td>
                                        <a href="{{url('/diagnosis/add/')}}" class="btn btn-sm btn-info">Edit</a>
                                        <a href="{{url('/diagnosis/delete/')}}" class="btn btn-sm btn-danger">Delete</a>
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
            $('#diagnosis-list').DataTable()
        });

    </script>
@endpush