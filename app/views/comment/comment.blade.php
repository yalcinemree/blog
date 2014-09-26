@if(count($comments) > 0)
    @foreach($comments as $comment)
        <!-- Comment -->
        <div class="media" >
            <a class="pull-left" href="#">
                <img class="media-object" src="http://placehold.it/64x64" alt="">
            </a>
            <div class="media-body">
                <h4 class="media-heading">
                    {{{ $comment['user']['name'] }}}
                    <small>{{{ $comment['iDate'] }}}</small>
                </h4>
                {{{ $comment['comment'] }}}
            </div>
        </div>
    @endforeach
@else
    <h4>Yazılmiş yorum yoktur.</h4>
@endif

