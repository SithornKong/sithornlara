@extends('layout.main')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Patient

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Patient</a></li>
            <li class="active">treat</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">

        <form role="form">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-danger">
                        <div class="box-header">
                            <h3 class="box-title"><b>Treatment</b></h3>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-4 form-group">

                                    <label>Patient Code</label>
                                    <input type="text" class="form-control" placeholder="code">

                                </div>
                                <div class="col-lg-4 form-group">

                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Name">

                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Date Visit</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datevisit"
                                               placeholder="Date">
                                    </div>




                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 form-group">

                                    <label>Symptom</label>
                                    <select class="form-control select2" multiple="multiple"
                                            data-placeholder="Select a symptom"
                                            style="width: 100%;">
                                        <option>Fever</option>
                                        <option>Cold</option>
                                        <option>Headache</option>
                                        <option>Stomach</option>
                                        <option>Nasal Congestion</option>
                                        <option>Vomit</option>
                                        <option>Hurt leg</option>
                                    </select>

                                </div>
                                <div class="col-lg-4 form-group">

                                    <label>Diagnosis</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Flu</option>


                                    </select>

                                </div>
                                <div class="col-lg-4 form-group">

                                    <label>Regiment</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Panadol 500mg</option>
                                        <option>Pro Cold</option>
                                        <option>Cotrimoxazole</option>

                                    </select>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 form-group">

                                    <label>Quantity</label>
                                    <input type="text" class="form-control" placeholder="number">

                                </div>
                                <div class="col-md-4 form-group">

                                    <label>Transfer</label>
                                    <input type="text" class="form-control" placeholder="To...">

                                </div>
                                <div class="col-md-4 form-group">

                                    <label>Support</label>
                                    <input type="text" class="form-control" >

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 form-group">

                                    <label>Doctor</label>
                                    <input type="text" class="form-control" placeholder="Dr.">

                                </div>
                                <div class="col-md-4 form-group">


                                    <label>Next Appointment</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="dateappo"
                                               placeholder="Date">
                                    </div>


                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Active</label>
                                    <div>
                                    <input type="checkbox" class="flat-red" checked>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-8 form-group">

                                    <label>Comment</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter..."></textarea>

                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary pull-right" style="margin-top: 25px;">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>


    </section>

@endsection

@push('scripts')
    <script>
        $('.select2').select2();
        $('#datevisit').datepicker({
            format: 'yyyy-mm-dd'
        });
        $('#dateappo').datepicker({
            format: 'yyyy-mm-dd'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass   : 'iradio_flat-green'
        });
    </script>
@endpush