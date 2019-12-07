@extends('layout.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Symptom

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Symptom</a></li>
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
                    <h3 class="box-title">Add Symptom</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{url('/symptom/save')}}">
                    {{csrf_field()}}
                    @if(isset($symptom))
                        <input type="hidden" name="id" value="{{$symptom->id}}">
                    @endif
                    <div class="box-body">
                        <div class="form-group">
                            <label>Symptom</label>
                            <input type="text"
                                   class="form-control"
                                   name="input[name]"
                                   placeholder="Symptom"
                                   value="{{isset($symptom)?$symptom->name:''}}">
                        </div>
                        <div class="form-group">
                            <label >Description</label>
                            <input type="text"
                                   class="form-control"
                                   name="input[description]"
                                   placeholder="Description"
                                   value="{{isset($symptom)?$symptom->description:''}}">
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