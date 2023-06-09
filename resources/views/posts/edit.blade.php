@extends('layouts.app')

@section('title', 'Edit Blog')

@section('content')

    <h1 class="my-4">Edit Blog</h1>

    <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="mb-3">
            <label class="form-label">Konten</label>
            <textarea class="form-control" name="content" id="content"></textarea>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>

    </form>










@endsection
