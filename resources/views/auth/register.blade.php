@extends('layouts.app')

@section('content')
    <div class = "text-center">
        <h1>Sign up</h1>
    </div>
    
    <div class = "row">
        <div class = "col-sm-6 offset-sm-3">
            
            {!! Form::open(['route' => 'signup.post']) !!}
                <div class = "form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>
                
                <div class = "form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
                </div>
                
                <div class = "form-group">
                    {!! Form::label('password', 'password') !!}
                    {!! Form::text('password', old('password'), ['class' => 'form-control']) !!}
                </div>
                
                <div class = "form-group">
                    {!! Form::label('password_confirmation', 'password_confirmation') !!}
                    {!! Form::text('password_confirmation', old('password_confirmation'), ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('Sign up', ['class' => 'btn btn-primary btn block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection