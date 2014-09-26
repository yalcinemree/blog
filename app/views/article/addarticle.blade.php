@extends('layouts.home')

@section('content')
    <p>	@include('message.messages') </p>

    <form role="form" method="POST">
        <div class="form-group">
            <label>Title</label>
            <input type="name" class="form-control" name="title" placeholder="Title" value="{{{ Input::old('title') }}}">
        </div>
        <div class="form-group">
            <label>Text</label>
            <textarea type="text" class="form-control" name="text" placeholder="Text">{{{ Input::old('text') }}}</textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@stop

