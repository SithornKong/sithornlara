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
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Regiment</label>
                            <input type="text" class="form-control" name="input[regiment]" placeholder="Regiment">
                        </div>
                        <div class="form-group">
                            <label >Description</label>
                            <input type="text" class="form-control" name="input[description]" placeholder="Description">
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