@extends('layouts.master')
@section('content_post')
    <form action="{{route('News.update', $news->id)}}" method="GET">
        {{ csrf_field() }}
        {{ method_field('patch') }}
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" id="title" value="{!! $news->title !!}">
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <textarea class="form-control" name="content" id="content" rows="3">{!! $news->content !!}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection