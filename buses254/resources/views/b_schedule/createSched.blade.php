@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> <strong> Enter Bus Schedule <strong> </div>
                <div class="panel-body">

                		{!! Form::open(array('route' => 'b_schedule.store')) !!}

                		
                        {{ Form::label('bus_id', 'Bus No Plate') }}
                        {{ Form::select('bus_id', $buses, array('class'=>'form-horizontal')) }}

                		<br>
                		<br>
                	
                		{{ Form::label('county_of_departure', 'County of Departure') }}
                		{{ Form::text('county_of_departure', null, array('class'=>'form-horizontal')) }}

                        <br>
                        <br>
                    
                        {{ Form::label('county_of_arrival', 'County of Arrival') }}
                        {{ Form::text('county_of_arrival', null, array('class'=>'form-horizontal')) }}

                        <br>
                        <br>
                    
                        {{ Form::label('date_of_travel', 'Date of Travel') }}
                        {{ Form::date('date_of_travel', null, array('class'=>'form-horizontal')) }}

                        <br>
                        <br>
                    
                        {{ Form::label('time_of_arrival', 'Time of Travel') }}
                        {{ Form::text('time_of_arrival', null, array('class'=>'form-horizontal')) }}

                		{{ Form::submit('Enter Details', array('class'=>'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px') ) }}



                		{!! Form::close() !!}






                 </div>
            </div>
        </div>
    </div>
</div>
@endsection