@extends('layout.main')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3>
            Doctor

        </h3>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Doctor</a></li>
            <li class="active">Add</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-lg-6 col-md-12 col-sm-12 col-lg-offset-3">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h4 class="box-title">Add Doctor</h4>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{url('/doctor/save')}}">
                        {{csrf_field()}}
                        @if(isset($doctor))
                            <input type="hidden" name="id" value="{{$doctor->id}}">
                        @endif
                        <div class="box-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text"
                                       class="form-control"
                                       name="input[name]"
                                       placeholder="Name"
                                       value="{{isset($doctor)?$doctor->name:''}}">
                            </div>


                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button  type="submit" class="btn btn-primary pull-right">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- /.box -->

    </section>
@endsection

@push('scripts')
    <script>
        @if(session('errors'))

            @if (count($errors) > 0)
                var message = '';
                @foreach ($errors->all() as $error)
                    message += '{{ $error }}';
                @endforeach

            @endif
            swal({
                type: 'error',
                title: 'Oops...',
                text: message,

            });
        @endif
    </script>
@endpush