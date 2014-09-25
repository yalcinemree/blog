@extends('layouts.home')

@section('content')
<p>	@include('message.messages') </p>

<form role="form" name="signup" method="POST">
    <div class="form-group">
        <label>Name</label>
        <input type="name" class="form-control" name="name" placeholder="Name" value="{{{ Input::old('name') }}}">
    </div>
    <div class="form-group">
        <label>Surname</label>
        <input type="name" class="form-control" name="surname" placeholder="Surname" value="{{{ Input::old('surname') }}}">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email" value="{{{ Input::old('email') }}}">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password" value="{{{ Input::old('password') }}}">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>

@stop