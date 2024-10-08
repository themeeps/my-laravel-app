@extends('layout.app')

@section('content')
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">{{ $project->title }}</h2>
                <p class="card-text">{{ $project->description }}</p>
                @if($project->link)
                    <a href="{{ $project->link }}" target="_blank" class="btn btn-primary">View Project</a>
                @endif
                <a href="{{ route('portfolio.index') }}" class="btn btn-secondary mt-3">Back to Portfolio</a>
            </div>
        </div>
    </div>
@endsection
