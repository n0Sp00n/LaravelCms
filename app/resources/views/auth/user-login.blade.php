@extends('master')

@section('content')
    <h1>User portal</h1>
    {!! Form::open(['url' => 'user/login', 'method' => 'post']); !!}

        <div class="row">
            <div class="col-md-2">
                {!! Form::label('email', 'E-Mail Address') !!}
            </div>
            <div class="col-md-10">
                {!! Form::text('email', null, [
                    "class"  =>  "form-control"
                ]) !!}
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                {!! Form::label('password', 'Password') !!}
            </div>
            <div class="col-md-10">
                {!! Form::password('password', [
                    "class"  =>  "form-control"
                ]) !!}
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <input type="submit" name="" class="btn btn-md btn-info" value="Login">
            </div>
        </div>
    {!! Form::close() !!}
@stop
