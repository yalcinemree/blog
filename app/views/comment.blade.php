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

