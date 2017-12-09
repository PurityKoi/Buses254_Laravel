@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Company Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Company_Registration_Number') ? ' has-error' : '' }}">
                            <label for="Company_Registration_Number" class="col-md-4 control-label">Company Registration Number</label>

                            <div class="col-md-6">
                                <input id="Company_Registration_Number" type="text" class="form-control" name="Company_Registration_Number" value="{{ old('Company_Registration_Number') }}" required autofocus>

                                @if ($errors->has('Company_Registration_Number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Company_Registration_Number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('Owner_Name') ? ' has-error' : '' }}">
                            <label for="Owner_Name" class="col-md-4 control-label">Owner Name</label>

                            <div class="col-md-6">
                                <input id="Owner_Name" type="text" class="form-control" name="Owner_Name" value="{{ old('Owner_Name') }}" required autofocus>

                                @if ($errors->has('Owner_Name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Owner_Name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('Owner_National_Id') ? ' has-error' : '' }}">
                            <label for="Owner_National_Id" class="col-md-4 control-label">Owner National Id</label>

                            <div class="col-md-6">
                                <input id="Owner_National_Id" type="number" class="form-control" name="Owner_National_Id" value="{{ old('Owner_National_Id') }}" required autofocus>

                                @if ($errors->has('Owner_National_Id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Owner_National_Id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('Office_Location') ? ' has-error' : '' }}">
                            <label for="Office_Location" class="col-md-4 control-label">Office Location</label>

                            <div class="col-md-6">
                                <input id="Office_Location" type="text" class="form-control" name="Office_Location" value="{{ old('Office_Location') }}" required autofocus>

                                @if ($errors->has('Office_Location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Office_Location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('Phone_Number') ? ' has-error' : '' }}">
                            <label for="Phone_Number" class="col-md-4 control-label">Phone Number</label>

                            <div class="col-md-6">
                                <input id="Phone_Number" type="number" class="form-control" name="Phone_Number" value="{{ old('Phone_Number') }}" required autofocus>

                                @if ($errors->has('Phone_Number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Phone_Number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
