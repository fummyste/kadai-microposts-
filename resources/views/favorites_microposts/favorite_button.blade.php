    @if (Auth::user()-> is_in_favotiteMicroposts($micropost->id))
        {!! Form::open(['route' => ['microposts.removeFromFav', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('お気に入りから外す', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['microposts.addToFav', $micropost->id]]) !!}
            {!! Form::submit('お気に入りへ', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif