@extends('layouts.app')

@section('title', 'Berita')

@section('content')

    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
        <div class="col-lg-6 px-0">
            <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently
                about what’s most interesting in this post’s contents.</p>
            <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">Continue reading...</a></p>
        </div>
    </div>

    @foreach ($post as $p)
        <div class="card my-4 rounded-0">
            <div class="body">
                <div class="card-body">
                    <h5 class="card-title">{{ $p->title }}</h5>
                    <p class="card-text">
                        <br>
                        <small class="muted">Created at
                            {{ date('d M Y H:i', strtotime($p->created_at)) }}
                        </small>
                    </p>
                    <a href="{{ route('show', $p->slug) }}" class="btn btn-success">Selengkapnya</a>
                    <a href="{{ route('edit', $p->slug) }}" class="btn btn-warning">Edit</a>
                </div>
            </div>
        </div>
    @endforeach

@endsection
