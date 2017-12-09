@extends('layouts.app')
@extends('layouts.style.style')
@extends('layouts.style.side_navbar')

@section('content')

@section('page_content')

@section ('menu_content')

<div id='cssmenu'>
<ul>
   
   

   <li><a href="{{ url('/b_details/create') }}"><span>Enter Bus Details</span></a></li>

   <li><a href="{{ url('/b_details') }}"><span>View All Buses</span></a></li>   

</ul>
</div>


<div class= box>
<h3> Bus Details have been successfully entered as shown below </h3>
<br>
<br>

<div class= namey> Bus No Plate </div>  <div class= retrieved>{{ $bus_no_plate}} </div>

<br>


<div class= namey> Number of Seats </div>
<div class="retrieved"> {{$schedule->county_of_departure}} </div>


<br>


</div>


@endsection
@endsection
@endsection