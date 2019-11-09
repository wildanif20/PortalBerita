@extends('layouts.master')
@section('content_post')
    
    <div class="card border-success mb-3" style="max-width: 100rem;">
        <div class="card-header bg-transparent border-success"></div>
            <div class="card-body text-success">
              <h5 class="card-title">{!! $news->title !!}</h5>
              <p class="card-text">{!! $news->content !!}</p>
            </div>
        <div class="card-footer bg-transparent border-success">{!! $news->created_at !!}</div>
    </div>

@endsection