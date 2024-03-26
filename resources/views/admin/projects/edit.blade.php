@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editeaza proiectul</h1>
@stop

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="col-6">
        @include('partials.admin.errors')
        <form action="{{ route('projects.update', ['project'=>$project->id]) }}" method="post">
            @method("PUT")
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label"></label>
                <input type="text" id="name" name="name" class="form-control @error('name', 'project') is-invalid @enderror"
                    placeholder="Nume" value="{{$project->name}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label"></label>
                <input type="text" id="description" name="description" class="form-control @error('name', 'project') is-invalid @enderror"
                       placeholder="Description" value="{{$project->description}}">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label"></label>
                <input type="text" id="status" name="status" class="form-control @error('status', 'projectg') is-invalid @enderror"
                       placeholder="Status" value="{{$project->status}}">
            </div>
            <div class="mb-3">
                <label for="created" class="form-label"></label>
                <input type="datetime-local" id="created" name="created" class="form-control @error('created', 'project') is-invalid @enderror"
                       placeholder="Data crearii" value="{{$project->created_at}}">
            </div>
            <button type="submit" class="btn btn-dark">Edit</button>
        </form>
    </div>
@stop

@section('css')

@stop

@section('js')

@stop