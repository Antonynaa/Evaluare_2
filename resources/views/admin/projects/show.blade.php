@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Detalii</h1>
@stop

@section('content')
    <table class="table table-bordered mt-3">
        <tbody>
                <tr>
                    <td>Nume</td>
                    <td>{{$project->name}}</td>
                </tr>
                <tr>
                    <td>Descriere</td>
                    <td>{{$project->description}}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>{{$project->status}}</td>
                </tr>
                <tr>
                    <td>Data crearii:</td>
                    <td>{{$project->created}}</td>
                </tr>
        </tbody>
    </table>
@stop

@section('css')

@stop

@section('js')

@stop