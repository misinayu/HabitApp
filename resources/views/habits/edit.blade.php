@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Edit Habit</h1>
            {!! Form::open(['action' => 'HabitsController@update', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Habit Name'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
            </div>
            <div class="form-group">
                {{Form::label('is_turned', 'isTurned')}}
                {{Form::checkbox('is_turned', '')}}
            </div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
