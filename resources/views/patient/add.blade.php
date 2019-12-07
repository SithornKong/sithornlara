@extends('layout.main')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Patient Register

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Patient</a></li>
            <li class="active">Add</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">

            <form role="form" method="post" action="{{url('/patient/save')}}">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="box box-primary">
                            <div class="box-body">
                                <div class=" form-group">
                                    <label>Date Register</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="dateregister"
                                               placeholder="Date">
                                    </div>
                                </div>
                                <div class=" form-group">
                                    <label>Patient Code</label>
                                    <input type="text" class="form-control" placeholder="code">
                                </div>
                                <div class=" form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class=" form-group">
                                    <label>Sex</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Female</option>
                                        <option>Male</option>
                                    </select>
                                </div>
                                <div class=" form-group">
                                    <label>Age</label>
                                    <input type="text" class="form-control" placeholder="Age">
                                </div>
                                <div class=" form-group">
                                    <label>Birth Date</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="birthdate"
                                               placeholder="Date">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box box-primary">
                            <div class="box-body">
                                <div class=" form-group">
                                    <label>Province</label>
                                    <select class="province form-group select2" style="width: 100%;">
                                        <option value="0" disabled="true" selected="true">Select province</option>
                                        @foreach($provinces as $province)
                                            <option value="{{$province->id}}">{{$province->name}}</option>
                                        @endforeach
                                    </select>

                                    <label>District</label>
                                    <select class="district form-group select2" style="width: 100%; "  >
                                        <option value="0" disabled="true" selected="true">District</option>
                                    </select>

                                    <label>Commune</label>
                                    <select class="commune form-group select2" style="width: 100%;">
                                        <option value="0" disabled="true" selected="true">Commune</option>
                                    </select>

                                    <label>Village</label>
                                    <select class="village form-group select2" style="width: 100%;">
                                        <option value="0" disabled="true" selected="true">Village</option>
                                    </select>
                                </div>
                                <div class=" form-group">
                                    <label>Sick Time</label>
                                    <input type="text" class="form-control" placeholder="Months">
                                </div>
                                <div class=" form-group">
                                    <label>Comment</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter..."></textarea>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="box-footer">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary pull-right" style="margin-top: 25px;">Save</button>
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
        $('#birthdate').datepicker({
            format: 'yyyy-mm-dd'
        });

        $(document).ready(function(){

            $(document).on('change','.province',function(){
                //console.log("hmm its change");

                var id=$(this).val();
                //console.log(this);
                var div=$(this).parent();
                //console.log(this);
                var op=" ";

                $.ajax({
                    type:'get',
                    url:"{{url('/district')}}",
                    data:{'id':id},
                    dataType:'json',//return data will be json
                    success:function(district){
                        //console.log('success');
                        //console.log(district);
                        //console.log(district[5].id);
                        //console.log(district[5].name);

                        //console.log(district.length);

                        op+='<option value="0" selected disabled>Select District</option>';
                        for(var i=0;i<district.length;i++){
                            op+='<option value="'+district[i].id+'">'+district[i].name+'</option>';

                        }
                        //console.log(op);
                        div.find('.district').html(" ");
                        div.find('.district').append(op);



                        //console.log(div);

                    },
                    error:function(){

                    }
                });
            });
            $(document).on('change','.district',function(){
                //console.log("hmm its change");

                var id=$(this).val();
                //console.log(this);
                var div=$(this).parent();
                //console.log(this);
                var op=" ";

                $.ajax({
                    type:'get',
                    url:"{{url('/commune')}}",
                    data:{'id':id},
                    dataType:'json',//return data will be json
                    success:function(commune){
                        //console.log('success');
                        //console.log(district);
                        //console.log(district[5].id);
                        //console.log(district[5].name);

                        //console.log(district.length);

                        op+='<option value="0" selected disabled>Select Commune</option>';
                        for(var i=0;i<commune.length;i++){
                            op+='<option value="'+commune[i].id+'">'+commune[i].name+'</option>';

                        }
                        //console.log(op);
                        div.find('.commune').html(" ");
                        div.find('.commune').append(op);



                        //console.log(div);

                    },
                    error:function(){

                    }
                });
            });
            $(document).on('change','.commune',function(){
                //console.log("hmm its change");

                var id=$(this).val();
                //console.log(this);
                var div=$(this).parent();
                //console.log(this);
                var op=" ";

                $.ajax({
                    type:'get',
                    url:"{{url('/village')}}",
                    data:{'id':id},
                    dataType:'json',//return data will be json
                    success:function(village){
                        //console.log('success');
                        //console.log(district);
                        //console.log(district[5].id);
                        //console.log(district[5].name);

                        //console.log(district.length);

                        op+='<option value="0" selected disabled>Select Village</option>';
                        for(var i=0;i<village.length;i++){
                            op+='<option value="'+village[i].id+'">'+village[i].name+'</option>';

                        }
                        //console.log(op);
                        div.find('.village').html(" ");
                        div.find('.village').append(op);



                        //console.log(div);

                    },
                    error:function(){

                    }
                });
            });



        });


    </script>
@endpush