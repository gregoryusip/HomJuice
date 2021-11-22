@extends('layouts.main')

@section('container')
    <h2>Title: {{ $post->title }}</h2>
    <h4>Blog Category: {{ $post->blog_category->name }}</h4>
    <h4>User: {{ $post->author->name }}</h4>
    <h4>Slug: {{ $post->slug }}</h4>
    <article class="my-2 fs-5">
        {!! $post->body !!}
    </article>
@endsection
