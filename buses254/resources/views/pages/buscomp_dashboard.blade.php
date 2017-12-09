
<!DOCTYPE html>
<html>
<head>
<style>
body {
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
}

.sidenav {
    height: 100%;
    width: 0;
    position: absolute;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav ul {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav ul:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: relative;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
.clearfix{clear: both;}


#main {
	width: 80%;
	float: right;
    transition: margin-left .5s;
    padding: 16px;}

#open-menu{
width: 10%;
float: left;
} 
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

cssmenu,
#cssmenu ul,
#cssmenu ul li,
#cssmenu ul ul {
  list-style: none;
 padding-top: 10px;
  border: 0;
  
}

#cssmenu ul li {

}

#cssmenu ul li ul li{
	font-size: 16px;
	
}



h1 { color: #fff; font-family: 'Righteous', cursive; font-size: 65px; font-weight: normal; line-height: 60px; margin: 10px 0 20px; text-transform: uppercase; text-shadow: 2px 2px 0 #000, margin: 10px 0 24px; text-align: center; }

</style>
</head>
@section('content')
<body>


<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
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

   <li><a href='#'><span>Ticket Payments</span></a></li>
   </ul>
</div>
</div>

<div id="main" >
<h1>Did You Know??</h1>
<p>For the passenger the system shall: 
1.	Provide the passenger with a list of available bus companies depending on the route they select
2.	Provide the passenger with up-to-date bus schedules
3.	Enable the passenger to select a seat on the bus
4.	Enable the passenger to purchase a ticket via Mpesa
5.	Provide the passenger with the ticket via SMS after payment is received
    For the ticket checker officer the system shall:
1.	Enable them to enter the passenger’s ticket number into the system 
2.	Provide them with details of the passenger’s ticket for validation
For the bus companies the system shall: 
1.	Enable the bus company to register with the system
2.	Enable the bus company to edit their bus schedules
3.	Enable the bus company to view the payments that have been received from the passengers
</p>

</div>
<div id= "open-menu"> <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
</div>

<div class= "clearfix"> </div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
    
</body>
 @endsection
</html> 

@extends('layouts.app')