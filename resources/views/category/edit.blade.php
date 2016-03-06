@extends('layouts.app')
@section('css')
    <style type="text/css">
        .form-group.required .control-label:after {
            content:" *";
            color:red;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit category
            </div>
            {!!  Form::model($category, ['method'=>'PUT', 'action' => ['CategoryController@update',$category->id], 'class' => 'form-horizontal']) !!}
                {!! csrf_field() !!}
                <div class="panel-body">
                    @include('category.form')
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <button type="submit" class="btn-success btn">Save</button>
                            <a href="{{ action('BooksController@index') }}" class="btn-default btn">Cancel</a>
                            <button type="reset" class="btn-inverse btn">Reset</button>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
