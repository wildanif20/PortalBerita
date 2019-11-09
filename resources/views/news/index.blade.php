@extends('layouts.master')
@section('content_post')
    @foreach ($news as $new)
        <div class="col-md-4">
            <div class="post">
                <a class="post-img" href="blog-post.html"><img src="./img/post-3.jpg" alt=""></a>
                <div class="post-body">
                    <div class="post-meta">
                        <a class="post-category cat-1" href="category.html">{!! $new->title !!}</a>
                        <span class="post-date">{!! $new->created_at !!}</span>
                    </div>
                    <h3 class="post-title"><a href="blog-post.html">{!! $new->content !!}</a></h3>
                </div>
            </div>
        </div>
    @endforeach    
@endsection
