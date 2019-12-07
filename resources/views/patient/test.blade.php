@extends('layout.main')
@section('content')


    <section class="content">
    <h1>Laravel Dynamic Drop Down with ajax</h1>
<div class="row">
<div class="col-md-12">
    <div class="col-md-4 form-group">
    <span>Province: </span>
    <select style="width: 200px" class="province form-control select2" id="prod_cat_id">

        <option value="0" disabled="true" selected="true">-Select-</option>
        @foreach($provinces as $province)
            <option value="{{$province->id}}">{{$province->name}}</option>
        @endforeach

    </select>
    </div>
    <div class="col-md-4 form-group">
    <span>District: </span>
    <select style="width: 200px" class="district form-control select2">

        <option value="0" disabled="true" selected="true">District</option>
    </select>
    </div>
    <span>Commune: </span>
    <select style="width: 200px" class="commune form-control select2">

        <option value="0" disabled="true" selected="true">Commune</option>
    </select>

        <span>Village: </span>
        <select style="width: 200px" class="village form-control select2">

            <option value="0" disabled="true" selected="true">Village</option>
        </select>



</div>
</div>
</section>
@endsection
@push('scripts')


<script >
    $('.select2').select2();
    $(document).ready(function(){

        $(document).on('change','.province',function(){
            // console.log("hmm its change");

            var cat_id=$(this).val();
            // console.log(cat_id);
            var div=$(this).parent();

            var op=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('district')!!}',
                data:{'id':cat_id},
                success:function(district){
                    //console.log('success');

                    //console.log(data);

                    //console.log(data.length);
                    op+='<option value="0" selected disabled>chose district</option>';
                    for(var i=0;i<district.length;i++){
                        op+='<option value="'+district[i].id+'">'+district[i].name+'</option>';
                    }
                    div.find('.commune').html('<option value="0" selected disabled>chose commune</option>');
                    div.find('.village').html('<option value="0" selected disabled>chose village</option>');
                    div.find('.district').html(" ");
                    div.find('.district').append(op);

                },
                error:function(){

                }
            });
        });

        $(document).on('change','.district',function () {
            var prod_id=$(this).val();

            var a=$(this).parent();
            //console.log(prod_id);
            var op="";
            $.ajax({
                type:'get',
                url:'{!!URL::to('commune')!!}',
                data:{'id':prod_id},
                dataType:'json',//return data will be json
                success:function(commune){
                    //console.log(commune);
                    //console.log(commune.name);
                    op+='<option value="0" selected disabled>chose commune</option>';
                    for(var i=0;i<commune.length;i++){
                        op+='<option value="'+commune[i].id+'">'+commune[i].name+'</option>';
                    }
                    // here price is coloumn name in products table data.coln name
                    a.find('.village').html("<option value=\"0\" selected disabled>chose village</option>");
                    a.find('.commune').html(" ");
                    a.find('.commune').append(op);

                },
                error:function(){

                }
            });


        });
        $(document).on('change','.commune',function () {
            var prod_id=$(this).val();

            var a=$(this).parent();
            //console.log(prod_id);
            var op="";
            $.ajax({
                type:'get',
                url:'{!!URL::to('village')!!}',
                data:{'id':prod_id},
                dataType:'json',//return data will be json
                success:function(village){
                    //console.log(commune);
                    //console.log(commune.name);
                    op+='<option value="0" selected disabled>chose village</option>';
                    for(var i=0;i<village.length;i++){
                        op+='<option value="'+village[i].id+'">'+village[i].name+'</option>';
                    }
                    // here price is coloumn name in products table data.coln name

                    a.find('.village').html(" ");
                    a.find('.village').append(op);

                },
                error:function(){

                }
            });


        });

    });
</script>
@endpush


