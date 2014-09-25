@extends('layouts.home')

@section('content')
<div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

        <h1 class="page-header">
            Articles
            <small></small>
        </h1>

        @if($articles)
            @foreach($articles as $article)

                <!-- First Blog Post -->
                <h2>
                    <a href="#">{{{ $article['title'] }}}</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">

                            {{{ $article['name'] }}}


                    </a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on {{{ $article['iDate'] }}}</p>
                <hr>
                <p>{{{ $article['text'] }}}</p>
                <a class="btn btn-primary" href="/blog/public/article/{{{ $article['id'] }}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

        @endforeach
        @endif

        {{ $articles->links(); }}

    </div>

</div>
<!-- /.row -->
@stop