@extends('layout.app')

@section('content')
    @foreach($projects as $project)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text">{{ Str::limit($project->description, 100) }}</p>
                    <a href="{{ route('portfolio.show', $project->id) }}" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
