@extends('layouts.app')
@extends('layouts.style.style')
@extends('layouts.style.side_navbar')

@section('content')

@section('page_content')

@section ('menu_content')

<div id='cssmenu'>
<ul>
   
   

   <li><a href="{{ url('/b_schedule/create') }}"><span>Create Schedule</span></a></li>

   <li><a href="{{ url('/b_schedule') }}"><span>View All Schedules</span></a></li>   

</ul>
</div>


<div class= box>
<h3> Bus Schedule has successfully been entered as shown below </h3>
<br>
<br>

<div class= namey> Bus No Plate </div>  <div class= retrieved>{{ $bus_no_plate}} </div>

<br>


<div class= namey> County of Departure </div>
<div class="retrieved"> {{$schedule->county_of_departure}} </div>


<br>

<div class= namey> County of Arrival</div>
<div class="retrieved">{{$schedule->county_of_arrival}}</div>


<br>

<div class= namey> Date of Departure</div>
<div class="retrieved">{{$schedule->date_of_travel}}</div>


<br>

<div class= namey> Time of Departure</div>
<div class="retrieved">{{$schedule->time_of_arrival}}</div>

</div>


@endsection
@endsection
@endsection
