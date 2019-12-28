@extends('layout.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h3>
        Diagnosis

    </h3>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Diagnosis</a></li>
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
                <h4 class="box-title">Add Diagnosis</h4>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{url('/diagnosis/save')}}" method="post">
                {{csrf_field()}}
                @if(isset($diagnosis))
                    <input type="hidden" name="id" value="{{$diagnosis->id}}">
                @endif
                <div class="box-body">
                    <div class="form-group">
                        <label>ICD10</label>
                        <input type="text"
                               class="form-control"
                               name="input[icd]"
                               placeholder="ICD code"
                               value="{{isset($diagnosis)?$diagnosis->icd:''}}">
                    </div>
                    <div class="form-group">
                        <label >Description</label>
                        <input type="text"
                               class="form-control"
                               name="input[description]"
                               placeholder="Description"
                               value="{{isset($diagnosis)?$diagnosis->description:''}}">
                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

        <!-- /.box -->

</section>
@endsection