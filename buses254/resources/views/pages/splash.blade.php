@extends('layouts.style.style')

@section('page_content')

        <div class="flex-center position-ref full-height">
             <div class="top-right links">
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
                </div>

                <div class="top-left links">
                <a href="{{ url('/about_us') }}">About US</a>
                </div>

                

                <div class="content">
                
                
                <div class="title m-b-md">
                   buses254
                </div>

            </div>
        </div>

  @stop