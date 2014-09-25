@extends('layouts.home')

@section('content')

<div class="row">

    <!-- Blog Post Content Column -->
    <div class="col-lg-8">

        <!-- Blog Post -->

        <!-- Title -->
        <h1>{{{ $article['title'] }}}</h1>

        <!-- Author -->
        <p class="lead">
            by <a href="#">{{{ $article['userId'] }}}</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p><span class="glyphicon glyphicon-time"></span> Posted on {{{ $article['iDate'] }}}</p>

        <hr>

        <!-- Post Content -->
        <p>{{{ $article['text'] }}}</p>

        <hr>

        <!-- Blog Comments -->
        @if(Auth::check())
        <!-- Comments Form -->
        <div class="well">
            <h4>Leave a Comment:</h4>
            <form role="form" id="comment-form">
                <div class="form-group">
                    <input name="articleId" value="{{{ $article['id'] }}}" style="display: none">
                    <input name="userId" value="{{{ Auth::id() }}}" style="display: none">
                    <textarea name="comment" class="form-control" rows="3"></textarea>
                </div>
                <button id="formOneBtn" type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <hr>
        @endif
        <!-- Posted Comments -->


        <div id="post-comment">

            @if($c['comment'])
            @foreach($c['comment'] as $comment)

            <!-- Comment -->
            <div class="media" >
                <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/64x64" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">
                        @foreach($c['users'] as $user)
                            @if($user['id'] === $comment['userId'])
                            {{{ $user['name'] }}}
                            @endif
                        @endforeach
                        <small>{{{ $comment['iDate'] }}}</small>
                    </h4>
                    {{{ $comment['comment'] }}}
                </div>
            </div>

            @endforeach
            @endif

        </div>

    </div>

</div>
<!-- /.row -->

@stop