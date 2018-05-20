@extends('layout.main')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Report

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Report</a></li>
            <li class="active">TPO</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                {{--<div class="box box-primary">--}}
                    {{--<div class="box-header with-border">--}}
                        {{--<h3 class="box-title">Report</h3>--}}
                    {{--</div>--}}
                    <!-- /.box-header -->
                    <!-- form start -->

                    <form class="form-group">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title"><strong>TPO</strong></h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                                </div>
                            </div>
                        <!-- /.box -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-3 form-group">
                                    <!-- Date -->

                                        <label class="control-label">Start Date</label>

                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="startdate" placeholder="Date">
                                        </div>
                                        <!-- /.input group -->

                                </div>
                                <!-- Date -->
                                <div class="col-sm-3 form-group">

                                    <label class="control-label">End Date</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="enddate" placeholder="Date">
                                    </div>
                                    <!-- /.input group -->

                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" style="margin-top: 25px;">Excel</button>
                                </div>
                            </div>
                        </div>

                        <div class="box-footer">
                            <h3>Excel</h3>
                        </div>
                        </div>



                    </form>

                {{--</div>--}}
                <!-- /.box -->


            </div>
            <!--/.col (left) -->
            <!-- right column -->

            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

@push('scripts')
    <script>

        $('#startdate').datepicker({
            format: 'yyyy-mm-dd'
        });
        $('#enddate').datepicker({
            format: 'yyyy-mm-dd'
        });
    </script>
@endpush