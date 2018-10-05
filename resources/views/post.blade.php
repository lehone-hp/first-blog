@extends('layouts.app')

@section('content')


    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{ asset('img/post-bg.jpg') }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>{{ $post->title }}</h1>
                        <h2 class="subheading">{{ $post->subtitle }}</h2>
                        <span class="meta">Posted by
                <a href="#">{{ $post->user->username }}</a>
                on {{ Carbon\Carbon::parse($post->created_at)->format('F d, Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container-fluid">
            <div class="row">
                <div class="mx-auto">
                    {!!html_entity_decode($post->content)!!}
                </div>
            </div>
        </div>
    </article>

@endsection