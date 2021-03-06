@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>All questions</h2>
                        <div class="ml-auto">
                            <a href="{{ route('questions.create')}}" class="btn btn-outline-secondary">Ask question</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    
                    @foreach($questions as $question)
                        <div class="media">
                            <div class="d-flex flex-column counters">
                                <div class="vote">
                                    <strong>{{ $question->votes }}</strong> 
                                </div>
                                <div class="status answered-accepted">
                                    <strong>{{ $question->answers }}</strong> 
                                </div>
                                <div class="view">
                                    {{ $question->views  }}
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="d-flex align-items-center">
                                <h3 class="mt-0">
                                    <a href="{{ $question -> url  }}">
                                        {{ $question->title}}
                                    </a>
                                </h3>
                                <div class="ml-auto">
                                    <a href="{{route('questions.edit', $question->id)}}" class="btn btn-sm btn-outline-info">Edit</a>
                                    
                                </div>
                                </div>
                                    <p class="lead">
                                        Asked by 
                                        <a href="{{ $question->user->url }}">
                                            {{ $question->user->name }}
                                        </a>
                                        <small class="text-muted"> 
                                            {{$question -> created_date}}
                                        </small>
                                    </p>
                                
                                {{ $question->body }}
                            </div>
                        </div>
                    @endforeach
                    <div class="mx-auto">
                        {{ $questions -> links() }}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
