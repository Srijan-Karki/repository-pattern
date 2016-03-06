@extends('layouts.app')

@section('content')
<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            Books
        </div>
        <ul class="list-group">
            @foreach($books as $book)
                <li class="list-group-item">
                    <label for="checkbox">
                        <i class="ion ion-ios-book"></i> &nbsp;
                        {{ $book->title }} - <small> {{ $book->author }}</small>
                    </label>
                    <div class="pull-right action-buttons">
                        <form action="{{ action('BooksController@destroy', [$book->id]) }}" method="POST">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <a href="{{ action('BooksController@edit', [$book->id]) }}">
                                <i class="ion ion-edit"></i>
                            </a>
                            <button type="submit" class="trash">
                                <i class="ion ion-trash-a" style="font-size: 18px;"></i>
                            </button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
