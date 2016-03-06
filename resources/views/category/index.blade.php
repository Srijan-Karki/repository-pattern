@extends('layouts.app')

@section('content')
<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            Category
        </div>
        <ul class="list-group">
            @foreach($categories as $category)
                <li class="list-group-item">
                    <label for="checkbox">
                        <i class="ion ion-ios-book"></i> &nbsp;
                        {{ $category->name }}
                    </label>
                    <div class="pull-right action-buttons">
                        <form action="{{ action('CategoryController@destroy', [$category->id]) }}" method="POST">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <a href="{{ action('CategoryController@edit', [$category->id]) }}">
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
