@extends('layout.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Regiment

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Regiment</a></li>
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
                    <h4 class="box-title">Add Regiment</h4>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{url('/regiment/save')}}">
                    {{csrf_field()}}
                    @if(isset($regiment))
                        <input type="hidden" name="id" value="{{$regiment->id}}">
                    @endif
                    <div class="box-body">
                        <div class="form-group">
                            <label>Regiment</label>
                            <input type="text"
                                   value="{{isset($regiment)?$regiment->name:''}}"
                                   class="form-control"
                                   name="input[name]"
                                   placeholder="Regiment">
                        </div>
                        <div class="form-group">
                            <label >Description</label>
                            <input type="text"
                                   value="{{isset($regiment)?$regiment->description:''}}"
                                   class="form-control"
                                   name="input[description]"
                                   placeholder="Description">
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
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
        var message = '<ul>';
        @foreach ($errors->all() as $error)
            message += '<li>{{ $error }}</li>';
        @endforeach
            message += '</ul>';
        @endif
        $.notify({
// options
//            title: 'Fail',
//            icon: 'glyphicon glyphicon-warning-sign',
            message: message
        }, {
// settings
            type: 'danger',
            animate: {
                enter: 'animated lightSpeedIn',
                exit: 'animated lightSpeedOut'
            },
        });
        @endif
    </script>
@endpush