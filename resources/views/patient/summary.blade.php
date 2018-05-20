@extends('layout.main')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Patient Preview

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Patient</a></li>
            <li class="active">Add</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">


        <form role="form">

            <div class="box box-primary">

                <div class="box-body">


                    <div class="row">
                        <div class="col-md-3 form-group">

                            <label>Patient Code</label>
                            <input type="text" class="form-control" placeholder="code">

                        </div>
                        <div class="col-md-3 form-group">

                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name">


                        </div>

                        <div class="col-md-2 form-group">

                            <label>Sex</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Female</option>
                                <option>Male</option>

                            </select>

                        </div>
                        <div class="col-md-1 form-group">

                            <label>Age</label>
                            <input type="text" class="form-control" placeholder="Age">

                        </div>
                        <div class="col-md-3 form-group">


                            <label>Date Visit</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="datevisit" placeholder="Date">
                            </div>


                        </div>


                    </div>

                    <div class="row">
                        <div class="col-md-3 form-group">

                            <label>Province</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Svay Rieng</option>
                                <option>Kampong Spue</option>
                                <option>Kampong Chhnang</option>
                                <option>Kampong Thom</option>
                                <option>Kandal</option>

                            </select>

                        </div>
                        <div class="col-md-3 form-group">

                            <label>District</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Kampong Tralach</option>
                                <option>Oudong</option>
                                <option>Samakimechey</option>

                            </select>

                        </div>

                        <div class="col-md-3 form-group">

                            <label>Commune</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Orussey</option>
                                <option>Veang Chas</option>
                                <option>Peany</option>

                            </select>

                        </div>
                        <div class="col-md-3 form-group">

                            <label>Village</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Sala Lek 5</option>
                                <option>Ka Ot</option>
                                <option>Mlu Mern</option>

                            </select>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 form-group">

                            <label>Sick Time</label>
                            <input type="text" class="form-control" placeholder="Start Time">

                        </div>
                        <div class="col-md-3 form-group">

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

                        <div class="col-md-3 form-group">

                            <label>Diagnosis</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Flu</option>


                            </select>

                        </div>
                        <div class="col-md-3 form-group">

                            <label>Regiment</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Panadol 500mg</option>
                                <option>Pro Cold</option>
                                <option>Cotrimoxazole</option>

                            </select>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 form-group">

                            <label>Status</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">active</option>
                                <option>non active</option>


                            </select>

                        </div>
                        <div class="col-md-3 form-group">

                            <label>Case</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">New</option>
                                <option>Old</option>

                            </select>

                        </div>
                        <div class="col-md-3 form-group">

                            <label>Support by</label>
                            <input type="text" class="form-control" placeholder="Support">

                        </div>
                        <div class="col-md-3 form-group">

                            <label>Transfer</label>
                            <input type="text" class="form-control" placeholder="Transfer">

                        </div>


                    </div>

                    <div class="row">
                        <div class="col-md-3 form-group">

                            <label>Doctor</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Pang Sokneang</option>
                                <option>Dek nan</option>


                            </select>


                        </div>
                        <div class="col-md-3 form-group">

                            <label>Next Appointment</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="dateappo" placeholder="Date">
                            </div>


                        </div>

                        <div class="col-md-6 form-group">

                            <label>Description</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>

                        </div>
                    </div>

                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Save</button>
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
    </script>
@endpush