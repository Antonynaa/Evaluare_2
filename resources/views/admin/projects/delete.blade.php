@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Confirmare Ștergere Proiect</div>

                    <div class="panel-body">
                        <p>Sunteți sigur că doriți să ștergeți proiectul "{{ $project->name }}"?</p>

                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" class="btn btn-danger">Confirmă Ștergerea</button>
                            <a href="{{ route('projects.index') }}" class="btn btn-default">Anulează</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection