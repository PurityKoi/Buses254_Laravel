@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> <strong> Enter Bus Details <strong> </div>
                <div class="panel-body">

                		{!! Form::open(array('route' => 'b_details.store')) !!}

                		{{ Form::label('bus_no_plate', 'Bus No Plate') }}
                		{{ Form::text('bus_no_plate', null, array('class'=>'form-horizontal')) }}

                		<br>
                		<br>
                		<br>

                		{{ Form::label('no_of_seats', 'Number of Seats') }}
                		{{ Form::number('no_of_seats', null, array('class'=>'form-horizontal')) }}

                		{{ Form::submit('Enter Details', array('class'=>'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px') ) }}



                		{!! Form::close() !!}




                 </div>
            </div>
        </div>
    </div>
</div>
@endsection