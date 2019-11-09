@extends('layouts.master')
@section('content_post')
    @foreach ($news as $new)
        <div class="col-md-4">
            <div class="post">
                <a class="post-img" href="{{route('News.show', $new->id)}}"><img src="./img/post-3.jpg" alt=""></a>
                <div class="post-body">
                    <div class="post-meta">
                        <a class="post-category cat-1" href="{{route('News.show', $new->id)}}">{!! $new->title !!}</a>
                        <a class="post-category cat-2" href="{{route('News.edit', $new->id)}}">Update</a>
                        <a class="post-category cat-3" href="category.html">Delete</a>
                        <span class="post-date">{!! $new->created_at !!}</span>
                    </div>
                    <h3 class="post-title"><a href="blog-post.html">{!! $new->content !!}</a></h3>
                </div>
            </div>
        </div>
    @endforeach    
@endsection
