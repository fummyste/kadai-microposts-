@extends('layouts.app')

@section('content')
    <div class="row">
        <h2>お気に入りの数:{{$count_favorites}}</a></h2>
        <div class="col-sm-8">
            @include('favorites_microposts.index', ['microposts' => $favorites])
        </div>
    </div>
@endsection