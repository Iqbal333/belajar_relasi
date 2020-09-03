@extends('layouts.master')
@section('header')
    <h2>Edit Bensin List</h2>
@stop
@section('content')
{!! Form::model($bensin, ['route'=>['bensin.update', $bensin->id], 'method'=>'path', 'class'=>'form-horizontal']) !!}
    <div class="form-group">
        {!! Form::label('nama', 'Nama', ['class'=>'control-label col-md-2']) !!}
        <div class="col-md-10">
            {!! Form::label('nama', null, ['class'=>'form-control']) !!}
            {!! $errors->has('nama')?$errors->first('nama'):'' !!}
        </div>
    </div>