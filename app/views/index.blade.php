@extends('layout')

@section('content')
    <div class="page-header">
        <h1>All Games <small>Fabulous Games
        !</small></h1>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <a href="{{ action('GamesController@create', $game->id) }}" class="btn btn-primary">Create Game</a>
        </div>
    </div>

    @if ($game->isEmpty())
        <p>There are no games! :(</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Publisher</th>
                    <th>Complete</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($game as $game)
                <tr>
                    <td>{{ $game->title }}</td>
                    <td>{{ $game->publisher }}</td>
                    <td>{{ $game->complete ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ action('GamesController@edit', $game->id) }}" class="btn btn-default">Edit</a>
                        <a href="{{ action('GamesController@delete', $game->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@stop