@extends('layouts.home')

@section('content')
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <h1 class="page-header">
                Articles
                <small></small>
            </h1>
            @if(count($articles) > 0)
                @foreach($articles as $article)
                    <!-- First Blog Post -->
                    <h2>
                        <a href="/blog/public/article/{{{ $article['id'] }}}">{{{ $article['title'] }}}</a>
                    </h2>
                    <p class="lead">
                        by {{{ $article['user']['name'] }}}
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> Posted on {{{ $article['iDate'] }}}</p>
                    <hr>
                    <p>{{{ $article['text'] }}}</p>
                    <a class="btn btn-primary" href="/blog/public/article/{{{ $article['id'] }}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <hr>
                @endforeach
            @else
            <h2>
                Yazılmış Makale Yok.
            </h2>
            @endif

            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    @if($page>1)
                        <a href="?page={{{$page-1 }}}">&larr; Older</a>
                    @else
                        &larr; Older
                    @endif
                </li>
                @if($total_page>0)
                    @for($i=1;$i<$total_page;$i++)
                        <li>
                            @if($i == $page)
                                {{{$i}}}
                            @else
                                <a href="?page={{{$i}}}">{{{$i}}}</a>
                            @endif
                        </li>
                    @endfor
                @endif
                <li class="next">
                    @if($page<$total_page)
                        <a href="?page={{{ $page+1 }}}">Newer &rarr;</a>
                    @else
                        Newer &rarr;
                    @endif
                </li>
            </ul>
            Toplam : {{{$total_page}}}
        </div>
    </div>
    <!-- /.row -->
@stop