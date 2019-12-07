@extends('layout.main')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Regiment

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
                            @if(isset($regiments))
                                @foreach($regiments as $regiment)
                            <tr>
                                <td>{{$regiment->id}}</td>
                                <td>{{$regiment->name}}</td>
                                <td>{{$regiment->description}}</td>
                                <td>
                                    <a href="{{url('/regiment/add/'.$regiment->id)}}" class="btn btn-sm btn-info">Edit</a>
                                    <a onclick="deleteConfirm('{{url('/regiment/delete/'.$regiment->id)}}')" class="btn btn-sm btn-danger">Delete</a>
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
            $('#regiment-list').DataTable()
        });

        @if(session('success'))
        swal({
            position: 'top-end',
            type: 'success',
            title: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 2000
        })
        @endif

        function deleteConfirm(url){
            swal({
                title: 'Are you sure?',
                text: "You want to delete",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                //when say yes
                if (result.value) {
                $.get(url,function (response) {
                    if (response){
                        swal({
                            title: 'Ok',
                            text: "Deleted Successfully",
                            type: 'success',
                        }).then((result)=> {
                            window.location.reload();
                    })

                    } else {
                        swal(
                            'Fail',
                            'Action delete fail',
                            'error'
                        )
                    }
                })
            } else {
                swal(
                    'Cancelled',
                    'Action delete has been cancelled',
                    'error'
                )
            }
        });
        }

    </script>
@endpush