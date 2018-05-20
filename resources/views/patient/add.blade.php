@extends('layout.main')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Patient

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Patient</a></li>
            <li class="active">Add</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">

            <form role="form">
                <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title"><b>Register</b></h3>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4 form-group">

                                    <label>Patient Code</label>
                                    <input type="text" class="form-control" placeholder="code">

                                </div>
                                <div class="col-md-4 form-group">

                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Name">


                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Date Register</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="dateregister"
                                               placeholder="Date">
                                    </div>




                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 form-group">

                                    <label>Sex</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Female</option>
                                        <option>Male</option>

                                    </select>

                                </div>
                                <div class="col-md-4 form-group">

                                    <label>Age</label>
                                    <input type="text" class="form-control" placeholder="Age">

                                </div>
                                <div class="col-md-4 form-group">

                                    <label>Sick Time</label>
                                    <input type="text" class="form-control" placeholder="Month">

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 form-group">

                                    <label>Status</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Active</option>
                                        <option>Deactive</option>


                                    </select>

                                </div>
                                <div class="col-md-4 form-group">

                                    <label>Province</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Svay Rieng</option>
                                        <option>Kampong Spue</option>
                                        <option>Kampong Chhnang</option>
                                        <option>Kampong Thom</option>
                                        <option>Kandal</option>

                                    </select>

                                </div>
                                <div class="col-md-4 form-group">

                                    <label>District</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Kampong Tralach</option>
                                        <option>Oudong</option>
                                        <option>Samakimechey</option>

                                    </select>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 form-group">

                                    <label>Commune</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Orussey</option>
                                        <option>Veang Chas</option>
                                        <option>Peany</option>

                                    </select>

                                </div>
                                <div class="col-md-4 form-group">

                                    <label>Village</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Sala Lek 5</option>
                                        <option>Ka Ot</option>
                                        <option>Mlu Mern</option>

                                    </select>

                                </div>
                                <div class="col-md-4 form-group">

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
        $('#dateregister').datepicker({
            format: 'yyyy-mm-dd'
        });

    </script>
@endpush