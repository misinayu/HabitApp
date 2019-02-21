@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Create Habit</h1>
            {!! Form::open(['action' => 'HabitsController@store', 'method' => 'POST']) !!}
            <div class="form-group">
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
