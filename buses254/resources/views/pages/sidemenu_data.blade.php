
@extends('layouts.style.side_navbar')
@extends('layouts.app')


@section('menu_content')

<div id='cssmenu'>
  <ul>
   
   <li class='active has-sub'><a href='#'><span>Bus Details</span></a>
      <ul>


         <li class='has-sub'><a href="{{ url('/b_details/create') }}"><span>Enter Bus Details</span></a></li>


         <li class='has-sub'><a href='#'><span>View Bus Details</span></a></li>
      </ul>
   </li>

    <li class='active has-sub'><a href='#'><span>Bus Schedule</span></a>
      <ul>


         <li class='has-sub'><a href="{{ url('/b_schedule/create') }}"><span>Enter Bus Schedule</span></a></li>


         <li class='has-sub'><a href='#'><span>View Bus Schedule</span></a></li>
      </ul>
   </li>

   <li><a href='#'><span>View Passenger Payments</span></a></li>


   
   
</ul>
</div>
</div>
@endsection


