<?php
/**
 * Created by PhpStorm.
 * User: LLC
 * Date: 11/18/2016
 * Time: 9:15 AM
 */

@extends('layouts.master')

@section('content')

    <h1>Add a New Task</h1>
    <p class="lead">Add to your task list below.</p>
    <hr>

@stop


{!! Form::open([
    'route' => 'tasks.store'
]) !!}

<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Create New Task', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}